<?php

    require_once "../model/Conn.php";
    include './Request.php';
    
    $user = $_POST['user'];
    $business = $_POST['business'];
    $products = $_POST['products'];
    $about = $_POST['about'];
    $phone = $_POST['phone'];
    $map = $_POST['map'];

    $consult = new Request();
    $consult->connect();
    $consult->setQuery("UPDATE `tb_business` SET `name`= '$business', `description`= '$about', `products`= '$products', `phone` = '$phone', `map` = '$map', `config` = '1' WHERE `user_id` = '$user'"); 
    $consult->result();


?>