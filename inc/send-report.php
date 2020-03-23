<?php
    require_once "../config/db.php";

    $connection = conn();

    $subject = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['subject']));

    $message = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['message']));

    $query = "INSERT INTO `report`(`subject`, `msg`, `approved`) VALUES ('$subject','$message', '0')";
    mysqli_query($connection, $query);

