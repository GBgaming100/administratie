<?php
/**
 * Created by PhpStorm.
 * User: maxvd
 * Date: 6/17/2019
 * Time: 12:35 PM
 */
session_start();


//die();

?>
<html>
<head>

    <!-- Character set -->
    <meta charset="utf-8">
    <!-- Tells the Internet Explorer to display the webpage in the highest mode available. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For rendering on mobile devices and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Faster+One|Fugaz+One|Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" type="text/css" href="css/sal.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Staatliches&display=swap" rel="stylesheet">


    <title>Administratie</title>
</head>
<body>
<div id="background">
</div>
<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row registerHeight">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registreren</h2>
                        <p>
                            Omdat dit de eerste keer is dat je dit systeem gebruikt zal je je moeten registreren. je zal
                            hiervoor je Naam, StudentNummer, SLB'er en klas moeten invullen. <br>
                            <small>Deze informatie wordt niet verkocht aan derde partijen omdat het niks waard is.
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">
                    Vul alstublieft uw gegevens in</h4>
                <form class="registerForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            Volledige naam
                            <input name="Full_Name" placeholder="..." class="form-control"
                                   type="text">
                        </div>
                        <div class="form-group col-md-6">
                            Studentnummer
                            <input type="text" class="form-control" name="StudentNumber" placeholder="...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            SLB'er
                            <input id="SLB" name="SLB" placeholder="..." class="form-control"
                                   required="required" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            Klas
                            <input id="Class" name="Class" placeholder="..." class="form-control"
                                   required="required" type="text">
                        </div>
                        <div class="form-group col-md-6 d-none">
                            Klas
                            <input id="RFIDTag" name="RFIDtag" required="required"
                                   value="<?php echo($_SESSION['newRFIDtag']) ?>" type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <button type="button" class="btn btn-danger col-md-12 js_submit">Submit</button>
                    </div>
            </div>
            </form>
        </div>

    </div>

    </div>
</section>
<a href="index.php">
    <div class="btn btn-primary close_btn">Close <i class="fas fa-times-circle m-left-1"></i></div>
</a>
<!--</body>-->
<!-- jQuery JS -->
<script src="js/jquery.js"></script>
<!-- Sal JS -->
<script src="js/sal.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- print JS-->
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.css"></script>
<!-- Font Awsome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
<!-- Socket JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
<!-- Mustache JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.js"></script>
<!-- Timer JS -->
<script src="js/timer.jquery.min.js"></script>
<!-- Custom js  -->
<script src="js/register.js"></script>

</body>
</html>
