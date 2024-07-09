<?php
require_once '../config.php';

// Create connection
$conn = new mysqli(CONFIG_DB_SERVER, CONFIG_DB_USER, CONFIG_DB_PASS, CONFIG_DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the x-nintendo-service-token header is present
    if (!empty($_SERVER['HTTP_X_NINTENDO_SERVICE_TOKEN'])) {
        $nintendoServiceToken = $_SERVER['HTTP_X_NINTENDO_SERVICE_TOKEN'];

        // Update mii_last_time_seen to current date
        $currentTime = date('Y-m-d H:i:s');
        $updateStmt = $conn->prepare("UPDATE users SET mii_last_time_seen = ? WHERE LEFT(mii_auth, 32) = ?");
        $tokenPrefix = substr($nintendoServiceToken, 0, 32);
        $updateStmt->bind_param("ss", $currentTime, $tokenPrefix);        
        $updateStmt->execute();
        $updateStmt->close();

        // Return success response
        http_response_code(200);
        header("Content-Type: application/json");
        echo json_encode(array("success" => 1));
    } else {
        // No x-nintendo-service-token header provided
        http_response_code(400);
        header("Content-Type: application/json");
        echo json_encode(array("success" => 0, "error" => "SERVICE_TOKEN_MISSING"));
    }
} else {
    // Return error response if not a POST request
    http_response_code(400); // Bad Request
    header("Content-Type: application/json");
    echo json_encode(array("success" => 0, "error" => "INVALID_REQUEST"));
}

// Close connection
$conn->close();
?>
