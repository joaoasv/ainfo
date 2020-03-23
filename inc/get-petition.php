<?php
    
    $connection = conn();
    $accept = [];
    $declined = [];

    $query = "SELECT `answer` FROM `petition`";
    $insert = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($insert)){
        if($row['answer'] == 0) {
            array_push($declined, $row['answer']);
        } else {
            array_push($accept, $row['answer']);
        }
    }

    $totalAccept = count($accept);
    $totalDeclined = count($declined);
    $total = $totalDeclined + $totalAccept;
