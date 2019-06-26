<?php
//this file is to get all the data from the database and save it in the session
session_start();
include "database.php";

$newRfidTag = $_SESSION['newRFIDtag'];

$query  = "SELECT * FROM `user` WHERE rfidTag = '$newRfidTag'";

$i = query($query);

$_SESSION['dbData'] = $i;

header('Location: /Administratie/Choose.php');