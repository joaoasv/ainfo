<?php

    require_once "../config/db.php";
    $connection = conn();

    $name = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['name']));
    $pass = md5(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['pass'])));

    $query = "SELECT * FROM `tb_user` WHERE user_username = '$name' AND user_pass = '$pass' AND user_approved = '1'";
    $result = mysqli_query($connection, $query);
    $fetchResult = mysqli_fetch_array($result);

    if($fetchResult){

        setcookie("ainfo", $fetchResult['id'], time() + 604800 , '/'); //Expira em 7 dias
        session_start();
        $_SESSION['user'] = $fetchResult['id'];
        echo json_encode(array('login' => true));

    }else{

        echo json_encode(array('login' => false));

    }
