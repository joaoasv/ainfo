<?php 
    require_once "./config/db.php";

    include "./config/config.php";
    include "./inc/functions.php";

    include "./views/data.php";

    include "./inc/get-petition.php";
    include "./inc/get-report.php";


?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= stylesheet_url; ?>"> 
    <title>Angra Informa</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <meta property="og:title" content="Angra Informa • Coronavirus">
    <meta property="og:site_name" content="Angra Informa • Coronavirus">
    <meta property='og:image' content='https://www.angrainforma.com/assets/images/og_corona.png' />
    <meta property='og:description' content='Notícias em primeira mão sobre o Coronavirus em Angra' />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107064769-15"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-107064769-15');
    </script>
</head>
<body>