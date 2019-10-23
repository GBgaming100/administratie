<?php

session_start();
session_destroy();
session_start();


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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/sal.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Staatliches&display=swap" rel="stylesheet">


    <title>Administratie</title>
</head>
<body>
<nav>
    <a href="index.php" class="logo"> <img src="http://www.roc-teraa.nl/wp-content/themes/roc/img/logo.jpg"></a>
</nav>
<div class="start">
    <div id="background"></div>
    <div class="object">
        Scan je schoolpas <a href="https://www.jeremeyvuden.nl">op</a> de RFID reader
        <br>
        <i class="fas fa-id-card cardLogo"></i>
    </div>
</div>

<div class="">
    <form method="post" action="#" id="printJS-form">
        <div id="basicUsage">
            test
        </div>
    </form>

    <button type="button" onclick="printJS('printJS-form', 'html')">
        Print Form
    </button>

</div>
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
<script src="js/main.js"></script>

</body>
</html>