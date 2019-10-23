<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 2/21/2018
 * Time: 11:28 AM
 */

function query($sql)
{
    $connect = mysqli_connect("localhost:3306","administratie","administratie", "administratie"); //localhost

    $resource = mysqli_query($connect, $sql);
    $retuning_array = array();
    while($result = mysqli_fetch_assoc($resource))
    {
        $retuning_array[] = $result;
    }
    return $retuning_array;
}