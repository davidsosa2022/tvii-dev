<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bsky_handle = $_POST['bsky_handle'];
    $bsky_pass = $_POST['bsky_pass'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://bsky.social/xrpc/com.atproto.server.createSession",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode(array('identifier' => $bsky_handle, 'password' => $bsky_pass)),
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        header("Content-Type: application/json");
        http_response_code($responseCode);
        echo $response;
    }
} else {
    echo "Invalid Request Method";
}
?>

