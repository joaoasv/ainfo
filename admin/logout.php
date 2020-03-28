<?php
    if(isset($_COOKIE['ainfo'])){
        unset($_COOKIE['ainfo']);
        setcookie('ainfo', null, -1, '/'); 
        header('Location: ../index.php');
        return true;
    }else{
        echo 'saiu';
    }
?>