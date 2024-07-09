<?php
if(isset($_GET['country'])) {
    $country = $_GET['country'];

    $whiteTitleID = "000500301001310A";

    if($country != "US") {
        $whiteTitleID = "000500301001320A";
    } elseif($country === "JP") {
        $whiteTitleID = "000500301001300A";
    }

    $countryInfo = "<white-domain>https://" . $_SERVER['HTTP_HOST'] . "/\n".
                   "<gold-domain>https://" . $_SERVER['HTTP_HOST'] . "/\n".
                   "<white-title-ID>$whiteTitleID\n" .
                   "<top-page>https://" . $_SERVER['HTTP_HOST'] . "/\n".
                   "<white-acr>a";

    header('Content-Type: text/plain');

    echo $countryInfo;
} else {
    echo "Error: Country parameter is missing.";
}
?>
