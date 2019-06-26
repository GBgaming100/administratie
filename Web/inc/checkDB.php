<?php
/**
 * Created by PhpStorm.
 * User: maxvd
 * Date: 6/5/2019
 * Time: 10:13 AM
 */
include "database.php";

session_start();


$query = "SELECT * FROM `user`";

$users = query($query);


foreach ($users as $value){
    if ($value['rfidTag'] == $_POST['rfidTag']){
        $_SESSION['rfidTag'] = $value['rfidTag'];
        ExistsMboo($_POST['rfidTag']);
        echo true;
    } else{

        $_SESSION['newRFIDtag'] = $_POST['rfidTag'];
        echo false;
    }
}

function ExistsMboo($RFIDtag){
    $query  = "SELECT * FROM `user` WHERE rfidTag = '$RFIDtag'";

    $i = query($query);

    $_SESSION['dbData'] = $i;
}
?>