<?php
require_once "Client/PostcodeClient.php";

$token = '8f6a58aa-59f4-4755-8874-d9441ec17c86';
$client = new ApiPostcode\Client\PostcodeClient($token);

$address = $client->fetchAddress($_POST['postc'], $_POST['nr']);


echo json_encode($address->getStreet()." ".$address->getCity());

?>
