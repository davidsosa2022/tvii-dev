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
    // Sanitize and prepare form data
    $pid = $_POST["pid"];

    // Check if account with same pid already exists
    $check_stmt = $conn->prepare("SELECT pid FROM users WHERE pid = ?");
    $check_stmt->bind_param("s", $pid);
    $check_stmt->execute();
    $check_stmt->store_result();
    
    if ($check_stmt->num_rows > 0) {
        // Account with same pid already exists, return error
        http_response_code(400); // Bad Request
        header("Content-Type: application/json");
        echo json_encode(array("success" => 0, "error" => "ACCOUNT_WITH_PID_EXISTS"));
        exit(); // Stop further execution
    }

    // Continue with inserting the new account
    $mii_language = $_POST["mii_language"];
    $mii_country = $_POST["mii_country"];
    $mii_name = $_POST["mii_name"];
    $mii_image = $_POST["mii_img"];
    $mii_friends = $_POST["mii_friends"];
    $mii_birthday = date('Y-m-d', strtotime($_POST["mii_birthday"])); // Convert input date to YYYY-MM-DD format
    $mii_user_bio = $_POST["mii_user_bio"];
    
    // Convert mii_first_time_favorites to mii_favorites
    $mii_favorites = $_POST["mii_first_time_favorites"];

    // Get the first 32 characters of the x-nintendo-servicetoken header
    $mii_auth = substr($_SERVER["HTTP_X_NINTENDO_SERVICE_TOKEN"], 0, 32);

    if (empty($mii_auth)) {
        http_response_code(500);
        header("Content-Type: application/json");
        echo json_encode(array("success" => 0, "error" => "SERVICE_TOKEN_MISSING"));
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO users (pid, mii_language, mii_country, mii_name, mii_image, mii_friends, mii_birthday, mii_user_bio, mii_favorites, mii_auth, mii_last_time_seen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");

    // Bind parameters for the prepared statement
    $stmt->bind_param("ssssssssss", $pid, $mii_language, $mii_country, $mii_name, $mii_image, $mii_friends, $mii_birthday, $mii_user_bio, $mii_favorites, $mii_auth);


    // Execute the statement
    if ($stmt->execute()) {
        http_response_code(200);
        header("Content-Type: application/json");
        echo json_encode(array("success" => 1));
    } else {
        http_response_code(500); // Internal Server Error
        header("Content-Type: application/json");
        echo json_encode(array("success" => 0, "error" => $stmt->error));
    }

    // Close statements
    $stmt->close();
    $check_stmt->close();
}

// Close connection
$conn->close();
?>
