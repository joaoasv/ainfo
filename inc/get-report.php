<?php

$connection = conn();
$return = [];

$query = "SELECT subject, msg FROM report WHERE approved = 1 ORDER BY id DESC LIMIT 0, 5";
$insert = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($insert)){
    array_push($return, $row);
}
?>
