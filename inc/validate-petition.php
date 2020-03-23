<?php

include_once './db.php';

include_once './validaCpf.php';


$connection = conn();

$cpfPost = $_POST['p_cpf'];

$check = validaCPF($cpfPost);

if($check) {
    $query = "SELECT `cpf` FROM `petition` where cpf = '$cpfPost'";
    $result = mysqli_query($connection, $query);
    $d = mysqli_num_rows($result);
    
    if(mysqli_num_rows($result) > 0){
        echo json_encode(array('cpf' => false, 'check' => true));
    }else{
        echo json_encode(array('cpf' => true, 'check' => true));
    }
} else {
    echo json_encode(array('check' => false));
}

?>

