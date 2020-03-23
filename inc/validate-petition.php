<?php

    require_once "../config/db.php";

    function validaCPF($cpf) {
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        if (strlen($cpf) != 11) {
            return false;
        }
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }

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


