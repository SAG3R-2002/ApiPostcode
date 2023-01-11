<?php
require_once "Client/PostcodeClient.php";

$token = '8f6a58aa-59f4-4755-8874-d9441ec17c86';
$client = new ApiPostcode\Client\PostcodeClient($token);

$address = $client->fetchAddress('1082MD', 34);

echo $address->getStreet(), "</br>";     // Claude Debussylaan
echo $address->getCity(),  "<br>";      // Amsterdam
echo $address->getHouseNumber(),"<br>"; // 34
echo $address->getZipCode(), "<br>";    // 1082MD
echo $address->getLatitude(), "<br>";   // 52.3377074
echo $address->getLongitude();   // 4.8719565