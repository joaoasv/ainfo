<?php

    require_once "../model/Conn.php";
    include './Request.php';
    
    if($_FILES['file']['name'] != ''){

        $user = $_POST['user'];
        $test = explode("." , $_FILES['file']['name']);
        $extension = end($test);
        $name = rand(100,999) . '.' . $extension;
        $location = '../../public/assets/images/upload/' . $name;
        $atual_directory = '../public/assets/images/upload/' . $name;
        move_uploaded_file($_FILES['file']['tmp_name'], $location);
        echo "<img src='" .$atual_directory. "'>";

        $consult = new Request();
        $consult->connect();
        $consult->setQuery("UPDATE `tb_business` SET `img`= '$name' WHERE `user_id` = '$user'");
        $consult->result();

    }

?>