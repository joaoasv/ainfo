<?php 

session_start();
require_once "./model/Conn.php";
include './controller/Request.php';

//Conferindo login
if(isset($_COOKIE['ainfo']) && $_SESSION['user']){

    $userId = $_COOKIE['ainfo'];
    
    $consult = new Request();
    $consult->connect();
    
    
    //Conferindo se o usuário já gerou uma página da empresa
    /*
    / Esta é a consulta correta. Utilizar após debug.
    /
    / $consult->setQuery("SELECT tb_business.name FROM tb_user 
    / INNER JOIN tb_business ON tb_business.user_id = '$userId' WHERE tb_business.config = 1");
    /
    */

    $consult->setQuery("SELECT tb_business.name FROM tb_user 
    INNER JOIN tb_business ON tb_business.user_id = 2 WHERE tb_business.config = 0");
    
    $consult->result();

    $fetchResult = mysqli_fetch_row($consult->getResult());

    // Atribuindo valor para a variavel que irá determinar existência da página
    $built_page = $fetchResult ? true : false;
    

    
}else{
    
    header('location: ../login.php');
        
}
include './views/header.php';

?>

<section class="admin">
    <div class="admin__menu">
        <div>
            <img src="../public/assets/images/logo-angra.svg" alt="">
        </div>
        <ul>
            <li><a href="./?p=empresa">Minha empresa</a></li>
            <li><a href="./?p=dados">Meus dados</a></li>
            <li><a href="./logout.php">Sair</a></li>
        </ul>
    </div>
    <div class="admin__content">
        <?php
            if(isset($_GET['p']) && $built_page == true){
                
                switch ($_GET['p']) {
                    case 'empresa':
                        include './views/pages/minha-empresa.php';
                        break;
                    case 'dados':
                        include './views/pages/meus-dados.php';
                        break;
                    default:
                        include './views/pages/minha-empresa.php';
                        break;
                }

            }else{
                if(!$built_page == true){
                    include './views/pages/cadastrar-empresa.php';
                }else{
                    include './views/pages/minha-empresa.php';
                }
            }

        ?>

    </div>
</section>


<?php
    include './views/footer.php';

    