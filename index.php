<?php
    
    error_reporting(1);

    if (isset($_GET['url']) === false) {
        include $pathViews . '404.php';
        exit();
    }
    
    $url = $_GET['url'];

    $routes = [
        '' => [
            'file' => 'front-page',
            'params' => []
        ],
        'stores' => [
            'file' => 'page-store',
            'params' => []
        ]
    ];

    if(isset($routes[$url])) {

        $pathViews = './views/pages/';
        $actualRoute = $routes[$url];
        $file = __DIR__ . $pathViews . $actualRoute['file'] . '.php';

        if(file_exists($file)) {
            foreach($actualRoute['params'] as $name => $value) {
                $_GET[$name] = $value;
            }
            include $file;
        } else {
            include $pathViews . '404.php';
        }
    }

    // if (isset($routes[$url])) {

    //     $actualRoute = $routes[$url];
    //     $file = __dir__ . DR . $actualRoute['file'] . '.php';
    
    //     if (file_exists($file)) {
    //         foreach ($actualRoute['params'] as $name => $value) {
    //             $_GET[$name] = $value;
    //         }
    //         include $file;
    //     } else {
    //         include '501.php';
    //     }
    // } else {
    //     include './views/404.php';
    // }


    // $routes = array(
    //     '' => array(
    //         'file' => 'principal',
    //         'params' => array()
    //     ),
    //     'detalhe/televisao' => array(
    //         'file' => 'detalhe',
    //         'params' => array('cat' => 1)
    //     )
    // );



