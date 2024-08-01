<?php
if(isset($_GET['day']) && isset($_GET['hour']) && isset($_GET['country']) && isset($_GET['lang'])) {
    // Define the query parameters
    $day = $_GET['day'];
    $hour = $_GET['hour'];
    $country = $_GET['country'];
    $lang = $_GET['lang'];

    // Path to the local XML file
    $xmlFilePath = 'guide_api.xml';

    if (file_exists($xmlFilePath)) {
        // Set the response header to XML
        header('Content-Type: application/xml');

        // Read and echo the content of the XML file
        echo file_get_contents($xmlFilePath);
    } else {
        // If the file does not exist, send an error message
        header('Content-Type: text/plain');
        echo "Error: XML file not found.";
    }
} else {
    header('Content-Type: text/plain');
    echo "Error: One or more required parameters (day, hour, country, lang) are missing.";
}
?>
