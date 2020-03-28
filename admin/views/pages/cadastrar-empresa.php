<?php
    // Array usada para atribuir usuário
    // e atualizar banco de dados.
    $user = []; 

    $consult->setQuery("SELECT user_name FROM tb_user 
    WHERE id = $userId");
    $consult->result();
    while($row = mysqli_fetch_assoc($consult->getResult())){
        $user['name'] = $row['user_name'];
    }

    // Cadastrando empresa para posteriormente fazer updates
    $consult->setQuery("INSERT INTO `tb_business`
    (`user_id`, `name`, `description`, `products`, `phone`, `payment`, `map`, `img`, `config`)
    VALUES ( '$userId', '' , '' , '' , '' , '' , '', '' , '0' )");

    $consult->result();
?>
        <div class="notification"></div>
        <div class="admin__content--title">
            <h1>
                Olá, <?= $user['name']?>!
            </h1>
            <h3>Vamos configurar agora a sua empresa ;)</h3>
        </div>

        <div class="admin__content--inner">
            <div>
                <h5>Defina uma imagem para sua página.</h5>
                <div class="admin__content--inner-img" id='uploaded_image'>
                    <img src="../public/assets/images/default_img.jpg" alt="">
                </div>
                <input type="file" name="file" id="file">
            </div>
            <input type="hidden" id="user" value="<?=$userId?>" >
            <form method="POST">

                <label for="business-name">Nome</label>
                <input type="text" id="business-name" placeholder="Nome da sua empresa">

                <label for="about">Fale um pouco sobre a sua empresa</label>
                <textarea name="about" id="about" placeholder="Descreva a sua empresa"></textarea>

                <label for="number">Seu número</label>
                <input type="text" id="phone-number" placeholder="Seu número para entregas">

                <label>Seus produtos</label>
                <div id="productList">
                    <div id="products-0">
                        <input type="text" id="produto" placeholder="Produto">
                        <input type="text" id="preco" placeholder="Preço">
                    </div>
                </div>
                <span id="moreProduct">[ MAIS ]</span>
                <span id="removeProduct">[ MENOS ]</span>

                <br/>

                <label>Mapa</label>
                <input type="text" placeholder="Latitude" id="lat">
                <input type="text" placeholder="Longitude" id="long">

                <input type="submit" id="sendBusiness" value="Criar">

            </form>
        </div>