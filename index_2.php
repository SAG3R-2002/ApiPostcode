<?php

require_once "Client/PostcodeClient.php";



if (isset($_POST['go']))
{//aan het werk met de twee inputvelden
    $token = '8f6a58aa-59f4-4755-8874-d9441ec17c86';

    $client = new ApiPostcode\Client\PostcodeClient($token);

    $postc=$_POST['postcode'];
    $huisnr= $_POST['huisnr'];

    $address = $client->fetchAddress($postc, $huisnr);

    $straatnaam = $address->getStreet();     // Claude Debussylaan
    $woonplaats = $address->getCity();      // Amsterdam
    //echo $address->getHouseNumber(),"<br>"; // 34
    //echo $address->getZipCode(), "<br>";    // 1082MD
    //echo $address->getLatitude(), "<br>";   // 52.3377074
    //echo $address->getLongitude();   // 4.8719565



}
else {
    $straatnaam = "";
    $woonplaats = "";
}
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>API-postcode demo</h1>
    <form method="POST" action="index.php">
    <div class="row">
        <div class="col-4">
                            <div class="input-group">
                                <span class="input-group-text">Postcode en Huisnummer</span>
                                <input name="postcode" type="text" aria-label="First name" class="form-control" placeholder="postcode" value="<?= $postc ?>">
                                <input name="huisnr" type="text" aria-label="Last name" class="form-control"placeholder="huisnummer" value="<?= $huisnr ?>">
                            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <fieldset disabled>

                            <label for="disabledTextInput" class="form-label">Straatnaam en woonplaats</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Hier komts straatnaam en woonplaats" value="<?= $straatnaam ?> <?= $woonplaats ?>">

            </fieldset>
        </div>
    </div>
   <div class="row" style="margin-top: 10px">
       <div class="row 1">
           <input name="go" type="submit" class="btn btn-success"">
       </div>
   </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>