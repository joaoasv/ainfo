<?php

include_once './db.php';

$connection = conn();

echo $name = $_POST['petition'];

$petition = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['petition']));

$name = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['p_name']));

$cpf = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['p_cpf']));

$query = "INSERT INTO `petition`(`cpf`, `name`, `answer`) VALUES ('$cpf', '$name', '$petition')";
mysqli_query($connection, $query);

?>
