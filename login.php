<?php 
    session_start();
    if(isset($_COOKIE['ainfo']) && $_SESSION['user']){

        header('location: ./admin/index.php');
        
    }else{
        
        include './views/header.php';
        include './views/pages/login.php';
        include './views/footer.php';
            
    }