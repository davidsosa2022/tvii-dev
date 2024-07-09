<?php

require_once '../config.php';

if (strpos($_SERVER['REQUEST_URI'], '/create') === 0) {
    return;
}

$conn = new mysqli(CONFIG_DB_SERVER, CONFIG_DB_USER, CONFIG_DB_PASS, CONFIG_DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nintendoServiceToken = isset($_SERVER['HTTP_X_NINTENDO_SERVICE_TOKEN']) ? $_SERVER['HTTP_X_NINTENDO_SERVICE_TOKEN'] : '';

//errors and language supported currently only english, spanish, portuguese and japanese
if (empty($nintendoServiceToken)) {
    showErrorPage(404, "Invalid authentication method.
    This site is meant to be used on a Wii U.\n
    Metodo de autenticación invalido.
    Este sitio se usa en una Wii U.\n
    Método de autenticação inválido.
    Este site deve ser usado em um Wii U.\n
    無効な認証方法です。
    このサイトは Wii U で使用することを目的としています。");
}

$tokenPrefix = substr($nintendoServiceToken, 0, 32);

$sql = "SELECT * FROM users WHERE LEFT(mii_auth, 32) = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tokenPrefix);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();
} else {
    header("Location: /create");
    exit();
}

$conn->close();

$availableLanguages = array('en');

$userLang = strtolower($userData['mii_language']);

if (in_array($userLang, $availableLanguages)) {
    $jsonFilePath = '../loc/' . $userLang . '.json';
} else {
    $jsonFilePath = '../loc/en.json';
}

$jsonContent = file_get_contents($jsonFilePath);
$translations = json_decode($jsonContent, true);

function localize($key, $args = array()) {
    global $translations;
    if (isset($translations[$key])) {
        $translation = $translations[$key];
        foreach ($args as $placeholder => $value) {
            $translation = str_replace($placeholder, $value, $translation);
        }
        
        return $translation;
    } else {
        return $key;
    }
}

function showErrorPage($statusCode, $message) {
    $encodedMessage = urlencode($message);
    header("Location: /error?status=$statusCode&message=$encodedMessage");
    exit();
}

?>