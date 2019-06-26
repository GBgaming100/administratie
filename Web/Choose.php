<?php
/**
 * Created by PhpStorm.
 * User: maxvd
 * Date: 6/17/2019
 * Time: 12:35 PM
 */
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
<div class="cardExists">

    <!-- all content if card does exists in database-->
    <div class="row w-100.1">
        <div class="col-4 p-0" id="tooLate">
            <div class="info-container">
                <h2>Te laat</h2>
                <button class="btn w-100 btn-outline-light" data-toggle="modal" data-target="#tooLateModal">Te laat
                    briefje
                </button>
            </div>
        </div>
        <div class="col-4 p-0" id="sick">
            <div class="info-container">
                <h2>Ziek</h2>
                <button class="btn w-100 btn-outline-light" data-toggle="modal" data-target="#sickModal">Ziek naar huis
                    briefje
                </button>
            </div>
        </div>
        <div class="col-4 p-0" id="absent">
            <div class="info-container">
                <h2>Verlof </h2>
                <button class="btn w-100 btn-outline-light" data-toggle="modal" data-target="#absentModal">Verlof
                    briefje
                </button>

            </div>

        </div>
        <a href="index.php">
            <div class="btn btn-primary close_btn">Close <i class="fas fa-times-circle m-left-1"></i></div>
        </a>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="sickModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ziek naar huis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="printJS-form-Sick">
                    <h4 class="d-none">Ziek naar huis</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Voor- en achternaam:</label>
                            <input type="email" class="form-control" id="inputEmail4"
                                   value="<?php echo $_SESSION['dbData'][0]['Name'] ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Student Nummer</label>
                            <input type="text" class="form-control" id="inputPassword4"
                                   value="<?php echo $_SESSION['dbData'][0]['StudentNumber'] ?>" disabled>
                        </div>

                    </div>
                    <div class="form-group ">
                        <label for="inputPassword4">SLB-er:</label>
                        <input type="text" class="form-control" id="inputPassword4" value="<?php echo $_SESSION['dbData'][0]['SLB'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Klas</label>
                        <input type="text" class="form-control" id="inputAddress"
                               value="<?php echo $_SESSION['dbData'][0]['Class'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Datum</label>
                        <input type="text" class="form-control" id="inputAddress2" value="<?php echo date("m.d.y"); ?>"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Tijd</label>
                        <input type="text" class="form-control" id="inputAddress2" value="<?php echo date("H:i") ?>"
                               disabled>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary js_stats_sick js_print" onclick="printJS('printJS-form-Sick', 'html'); header()">
                    Print briefje
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="absentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Verlof aanvragen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="printJS-form-absent">
                    <h4 class="d-none">Verlofaanvraag student</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Voor- en achternaam:</label>
                            <input type="email" class="form-control" id="inputEmail4"
                                   value="<?php echo $_SESSION['dbData'][0]['Name'] ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Student Nummer</label>
                            <input type="text" class="form-control" id="inputPassword4"
                                   value="<?php echo $_SESSION['dbData'][0]['StudentNumber'] ?>" disabled>
                        </div>

                    </div>
                    <div class="form-group ">
                        <label for="inputPassword4">SLB-er:</label>
                        <input type="text" class="form-control" id="inputPassword4" value="<?php echo $_SESSION['dbData'][0]['SLB'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Klas</label>
                        <input type="text" class="form-control" id="inputAddress"
                               value="<?php echo $_SESSION['dbData'][0]['Class'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Ik vraag het volgende verlof aan:</label>
                        <select id="inputState" class="form-control">
                            <option value="1" selected>kies reden.</option>
                            <option value="2">Huisarts bezoek</option>
                            <option value="3">Ziekenhuis bezoek</option>
                            <option value="4">Tandarts bezoek</option>
                            <option value="5">Bijzonder verlof*, reden</option>
                        </select>
                    </div>
                    <div class="form-group js_ExtraTime d-none">
                        <label>Reden voor bijzonder verlof.</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Datum</label>
                        <input type="date" class="form-control" id="inputAddress" value="6-22-2019">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Van</label>
                        <input type="text" class="form-control" id="inputAddress" value="10:00">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Tot</label>
                        <input type="text" class="form-control" id="inputAddress" value="12:00">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary js_stats_absent" onclick="printJS('printJS-form-absent', 'html'); header()">
                    Print briefje
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tooLateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Te laat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="printJS-form-late">
                    <h4 class="d-none">Te laat briefje student</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Voor- en achternaam:</label>
                            <input type="email" class="form-control" id="inputEmail4"
                                   value="<?php echo $_SESSION['dbData'][0]['Name'] ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Student Nummer</label>
                            <input type="text" class="form-control" id="inputPassword4"
                                   value="<?php echo $_SESSION['dbData'][0]['StudentNumber'] ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="inputPassword4">SLB-er:</label>
                        <input type="text" class="form-control" id="inputPassword4" value="<?php echo $_SESSION['dbData'][0]['SLB'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Klas</label>
                        <input type="text" class="form-control" id="inputAddress"
                               value="<?php echo $_SESSION['dbData'][0]['Class'] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Tijd binnenkomst</label>
                        <input type="text" class="form-control" id="inputAddress" value="<?php echo date("H:i") ?>"
                               disabled>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Te laat reden:</label>
                        <input type="text" class="form-control" id="inputAddress" value="Bus had vertraging">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary js_stats_late" onclick="printJS('printJS-form-late', 'html'); header()">
                    Print briefje
                </button>
            </div>
        </div>
    </div>
</div>
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
<script src="js/choose.js"></script>

</body>
</html>
