<?php
    include './views/header.php';

    if(isset($_GET['p'])) {
        include './views/pages/single.php';
    }
    else {
        include './views/pages/lojas.php';
    }
    include './views/footer.php';