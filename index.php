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
   <!-- <form method="POST" action="index.php"> -->
    <div class="row">
        <div class="col-4">
         <div class="input-group">
          <span class="input-group-text">Postcode en Huisnummer</span>
          <input name="postcode" id="postcode" type="text" aria-label="First name" class="form-control" placeholder="postcode" onchange="zoekinapi();">
          <input name="huisnr" id="huisnr" type="text" aria-label="Last name" class="form-control"placeholder="huisnummer" onchange="zoekinapi();">
         </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <fieldset disabled>

                            <label for="straatenplaatsnaam" class="form-label">Straatnaam en woonplaats</label>
                            <input type="text" id="straatenplaatsnaam" class="form-control" placeholder="Hier komts straatnaam en woonplaats" value="">

            </fieldset>
        </div>
    </div>

    <!-- </form> -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="index.js"></script>
</body>
</html>