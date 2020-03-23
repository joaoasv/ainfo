<?php

    $serveName = '177.66.168.92';
    $uid = 'siteConn';
    $pwd = 'edB?2i92';
    $dbName = 'BDDPMAR';

    $connectionInfo = array(
        "UID" => $uid,
        "PWD" => $pwd,
        "Database" => $dbName
    );

    $conn = sqlsrv_connect($serveName, $connectionInfo);
    $tsql= "SELECT TOP 10 * FROM TB_SOPA_NOTICIAS_CATEGORIAS T1 INNER JOIN TB_SOPA_NOTICIAS T2 
            ON T1.NC_ID_NOTICIA = T2.ID_NOTICIA WHERE T1.NC_ID_CATEGORIA = 45
            AND T2.CD_STATUS = 'B' ORDER BY T2.DT_ANO + T2.DT_MES + T2.DT_DIA + T2.ID_NOTICIA DESC";
            
    $stmt = sqlsrv_query($conn, $tsql);

    while($row = sqlsrv_fetch_array($stmt)){
        echo "<pre>";
        var_dump($row);
        echo "</pre>";
    }

    if($stmt) {
        echo 'conectado porra!';
    } else {
        echo 'docinho nos fudeo.';
        die(print_r(sqlsrv_errors(), true));
    }

    ?>



