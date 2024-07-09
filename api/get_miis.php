<?php
require_once '../config.php';

$primaryUrl = 'https://account.pretendo.cc/v1/api/miis';

// Get the query string parameters
$query = $_GET;
$pids = isset($query['pids']) ? $query['pids'] : '';

$ch = curl_init();

// Construct URL with only 'pids' parameter
curl_setopt($ch, CURLOPT_URL, $primaryUrl . '?' . http_build_query(['pids' => $pids]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, '(Nintendo TVii API)');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_CAINFO, CONFIG_OLV_SSL_CERT);

// Set to use HTTP/1.1
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

$headers = array(
    'X-Nintendo-Client-ID: a2efa818a34fa16b8afbc8a74eba3eda',
    'X-Nintendo-Client-Secret: c91cdb5658bd4954ade78533a339cf9a'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// If cURL request failed or response is empty, retry
if (curl_errno($ch) || empty($response)) {
    curl_setopt($ch, CURLOPT_URL, $primaryUrl . '?' . http_build_query(['pids' => $pids]));
    $response = curl_exec($ch);
}

curl_close($ch);

// Output the XML response
header('Content-Type: text/xml');
http_response_code($responseCode);
echo $response;
?>









