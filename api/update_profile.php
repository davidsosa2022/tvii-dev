<?php
require_once '../config.php';

// Create connection
$conn = new mysqli(CONFIG_DB_SERVER, CONFIG_DB_USER, CONFIG_DB_PASS, CONFIG_DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the x-nintendo-service-token header
    $nintendoServiceToken =  $_SERVER['HTTP_X_NINTENDO_SERVICE_TOKEN'];
    if (empty($nintendoServiceToken)) {
        http_response_code(404); // Not Found
        header("Content-Type: application/json");
        echo json_encode(array("success" => 0, "error" => "SERVICE_TOKEN_MISSING"));
    }
    $tokenPrefix = substr($nintendoServiceToken, 0, 32);

    // Prepare SQL statement to find a profile that matches the token prefix
    $sql = "SELECT * FROM users WHERE LEFT(mii_auth, 32) = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $tokenPrefix);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update the existing profile
        $row = $result->fetch_assoc();
        $pid = $row["pid"];
        
        // Update fields with POST data
        $mii_language = $_POST["mii_language"];
        $mii_country = $_POST["mii_country"];
        $mii_name = $_POST["mii_name"];
        $mii_image = $_POST["mii_img"];
        $mii_friends = $_POST["mii_friends"];

        // Prepare and bind SQL statement for updating profile
        $update_stmt = $conn->prepare("UPDATE users SET mii_language = ?, mii_country = ?, mii_name = ?, mii_image = ?, mii_friends = ? WHERE pid = ?");
        $update_stmt->bind_param("ssssss", $mii_language, $mii_country, $mii_name, $mii_image, $mii_friends, $pid);

        // Execute the update statement
        if ($update_stmt->execute()) {
            http_response_code(200);
            header("Content-Type: application/json");
            echo json_encode(array("success" => 1));
        } else {
            http_response_code(500); // Internal Server Error
            header("Content-Type: application/json");
            echo json_encode(array("success" => 0, "error" => $update_stmt->error));
        }

        // Close update statement
        $update_stmt->close();
    } else {
        // No profile found for the given token prefix
        http_response_code(404); // Not Found
        header("Content-Type: application/json");
        echo json_encode(array("success" => 0, "error" => "NO_PROFILE"));
    }

    // Close statements
    $stmt->close();
}

// Close connection
$conn->close();
?>
