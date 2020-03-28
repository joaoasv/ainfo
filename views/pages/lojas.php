<h1>listagem geral das lojas</h1>

<?php 

    $content = [];
    $business = $_GET['page'];
    // echo $business;
    $conn = conn();
    $query = "SELECT * from `tb_business` WHERE `name` = '$business'";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        array_push($content, $row);
    }

    $products = explode('/*',  $content[0]['products']);
    $map = explode('/*',  $content[0]['map']);


?>