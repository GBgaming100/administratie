<?php

include "database.php";

$fullName = $_POST['Full_Name'];
$StudentNumber = $_POST['StudentNumber'];
$SLB = $_POST['SLB'];
$Class = $_POST['Class'];
$RFIDtag = $_POST['RFIDtag'];
//query to fill the database with info
$query = "INSERT INTO `user` (`rfidTag`, `Name`, `Class`, `StudentNumber`, `SLB`) VALUES ('$RFIDtag','$fullName', '$Class', '$StudentNumber', '$SLB')";
$i = query($query);

//session needs to be filled

$allUsers = "SELECT * FROM `user`";

foreach ($allUsers as $value) {
    if ($value['rfidTag'] == $RFIDtag){
        echo"this should always echo";
    }
}