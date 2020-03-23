<?php

function conn(){
    // $conn = mysqli_connect('localhost', 'root', '', 'ainfo');
    $conn = mysqli_connect('sql164.main-hosting.eu', 'u533837016_asv', 'gatorade100', 'u533837016_ainfo');
    return $conn;
}

?>