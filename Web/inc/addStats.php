<?php

include "database.php";


$kindOfStat = $_POST['kindOfStat'];
$date = date("H:i");


//query to fill the database with info
$query = "INSERT INTO `stats` (`kindOfNote`, `date`) VALUES ('$kindOfStat', '$date');";
$i = query($query);