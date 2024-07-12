<?php

require_once '../config.php';

$baseUrl = isset($_SERVER['HTTP_X_NINTENDO_OLV_URL']) ? $_SERVER['HTTP_X_NINTENDO_OLV_URL'] : '';

function buildCustomHeaders() {
    $xNintendoServiceToken = isset($_SERVER['HTTP_X_NINTENDO_SERVICETOKEN']) ? $_SERVER['HTTP_X_NINTENDO_SERVICETOKEN'] : null;
    $xNintendoParamPack = isset($_SERVER['HTTP_X_NINTENDO_PARAMPACK']) ? $_SERVER['HTTP_X_NINTENDO_PARAMPACK'] : null;
    $customUserAgent = isset($_SERVER['HTTP_X_NINTENDO_OLV_USER_AGENT']) ? $_SERVER['HTTP_X_NINTENDO_OLV_USER_AGENT'] : null;

    $customHeaders = [
        'X-Nintendo-ServiceToken: ' . $xNintendoServiceToken,
        'X-Nintendo-ParamPack: ' . $xNintendoParamPack,
        'User-Agent: ' . $customUserAgent,
    ];

    return $customHeaders;
}

function performCurlRequest($url, $method, $data = null) {
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_CAINFO, CONFIG_OLV_SSL_CERT);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, buildCustomHeaders());

    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }

    $apiResponse = curl_exec($ch);
    $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        echo 'cURL Error: ' . curl_error($ch);
        http_response_code(400);
    } else {
        header('Content-Type: application/xml');
        http_response_code($responseCode);
        echo $apiResponse;
    }

    curl_close($ch);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract postId from POST data or query string
    $postId = isset($_POST['postId']) ? $_POST['postId'] : (isset($_GET['postId']) ? $_GET['postId'] : null);

    if ($postId !== null) {
        // Check if 'delete' query parameter is set
        $delete = isset($_POST['delete']) ? $_POST['delete'] : (isset($_GET['delete']) ? $_GET['delete'] : null);

        // Construct API endpoint
        $apiEndpoint =  $baseUrl . '/v1/posts/' . urlencode($postId) . '/empathies';
        if ($delete === '1') {
            $apiEndpoint .= '.delete';
        }

        // Perform cURL request
        performCurlRequest($apiEndpoint, 'POST', http_build_query($_POST));
    } else {
        echo 'postId is required.';
        http_response_code(400);
    }
}

?>
