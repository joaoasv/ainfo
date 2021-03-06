    <section class="push__notification" id="push">
        <a href="#" class="push__close" id="push__close"><i class='lni lni-close'></i></a>
        <h1></i><?= $push['news']; ?></h1>
    </section>

    <section class="header">
        <h1><a href="./index.php"><img src="<?= path_assets; ?>/images/logo-angra.svg" alt=""></a></h1>
    </section>

    <nav class="navigation">
        <div class="wrapper">
            <ul class="navigation__menu">
                <li class="navigation__menu--item"><a class="navigation__menu--link" href="./">Página Inicial</a></li>
                <li class="navigation__menu--item"><a class="navigation__menu--link" href="./">Denúncia Anônima</a></li>
                <li class="navigation__menu--item"><a class="navigation__menu--link" href="./#stores">Compre do Pequeno</a></li>
                <li class="navigation__menu--item"><a class="navigation__menu--link" href="./sintomas">Tenho os sintomas</a></li>
                <li class="navigation__menu--item"><a class="navigation__menu--link" href="./#petition">Petição</a></li>
            </ul>
        </div>
    </nav>

    <section class="data">
        <div class="wrapper">
            <div class="bg-dots">
                <img src="<?= path_assets; ?>/images/divisor.svg" alt="">
            </div>
            <div class="headTitle">
                    <span class="dot"></span>
                    <span>Últimas</span>
                    <h4>Atualizações <small>[ <?= $date['update']; ?> ]</small></h4>
            </div>
            <div class="data__box">
                <div>
                    <span>Suspeitos//</span>
                    <h2 class="red-light"><?= $casos['suspeitos'];?></h2>
                    <p>Casos</p>
                </div>
                <div>
                    <span>Confirmados//</span>
                    <h2 class="red-light"><?= $casos['confirmados'];?></h2>
                    <p>Casos</p>
                </div>
                <div>
                    <span>Descartados//</span>
                    <h2 class="red-light"><?= $casos['descartados'];?></h2>
                    <p>Casos</p>
                </div>
                <div>
                    <span>Em análise//</span>
                    <h2 class="red-light"><?= $casos['analise'];?></h2>
                    <p>Casos</p>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="wrapper">
            <div class="headTitle">
                <span class="dot"></span>
                <span>Informe-se</span>
                <h4>Prevenção</h4>
            </div>
            <div class="bg-corona">
                <img src="<?= path_assets; ?>/images/corona.svg" alt="">
            </div>
            <div class="info__list">
                <ul>
                    <li>
                        <div class="info__list--img">
                            <img src="<?= path_assets; ?>/images/icon_7.svg" alt="">
                        </div>
                        <div class="info__list--content">
                            <h5>Lave as mãos //</h5>
                            <p>
                                Lavar as mãos até a metade do pulso, esfregando também as partes internas das unhas.
                                Utilizar álcool 70. 
                            </p>

                        </div>
                    </li>
                    <li>
                        <div class="info__list--img">
                            <img src="<?= path_assets; ?>/images/icon_2.svg" alt="">
                        </div>
                        <div class="info__list--content">
                            <h5>A forma certa de tossir e espirrar //</h5>
                            <p>
                                Tossir ou espirrar levando o rosto à parte interna do cotovelo.
                            </p>

                        </div>
                    </li>
                    <li>
                        <div class="info__list--img">
                            <img src="<?= path_assets; ?>/images/icon_3.svg" alt="">
                        </div>
                        <div class="info__list--content">
                            <h5>Evite toques //</h5>
                            <p>
                                Evitar tocar nariz, olhos e boca antes de limpar as mãos. 
                            </p>

                        </div>
                    </li>
                    <li>
                        <div class="info__list--img">
                            <img src="<?= path_assets; ?>/images/icon_4.svg" alt="">
                        </div>
                        <div class="info__list--content">
                            <h5>Utilize lenço descartável //</h5>
                            <p>
                                Utilizar lenço descartável quando estiver com nariz escorrendo. 
                            </p>

                        </div>
                    </li>
                    <li>
                        <div class="info__list--img">
                            <img src="<?= path_assets; ?>/images/icon_5.svg" alt="">
                        </div>
                        <div class="info__list--content">
                            <h5>Evite sair //</h5>
                            <p>
                                Evitar sair de casa, caso apresente algum sintoma de gripe.    
                            </p>

                        </div>
                    </li>
                    <li>
                        <div class="info__list--img">
                            <img src="<?= path_assets; ?>/images/icon_6.svg" alt="">
                        </div>
                        <div class="info__list--content">
                            <h5>Limpe os objetos com álcool //</h5>
                            <p>
                                Limpar com álcool objetos tocados frequentemente.    
                            </p>

                        </div>
                    </li>
                    <li>
                        <div class="info__list--img">
                            <img src="<?= path_assets; ?>/images/icon_1.svg" alt="">
                        </div>
                        <div class="info__list--content">
                            <h5>Evite cumprimentos //</h5>
                            <p>
                                Evitar cumprimentar com beijos no rosto, apertando as mãos ou abraçando.
                            </p>

                        </div>
                    </li>
                    <li>
                        <div class="info__list--img">
                            <img src="<?= path_assets; ?>/images/icon_8.svg" alt="">
                        </div>
                        <div class="info__list--content">
                            <h5>Use máscara //</h5>
                            <p>
                                Usar máscara caso apresente sintomas. 
                            </p>

                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>

    <?php include './views/includes/stores.php'; ?>
    
    <section class="news">
        <div class="wrapper">
            <div class="headTitle">
                    <span class="dot"></span>
                    <span>Últimas</span>
                    <h4>notícias</h4>
            </div>
            <div class="bg-dots">
                <img src="<?= path_assets; ?>/images/divisor-dots.svg" alt="">
            </div>
            <div class="bg-dots-2">
                <img src="<?= path_assets; ?>/images/divisor-dots2.svg" alt="">
            </div>
            <div class="bg-dots-3">
                <img src="<?= path_assets; ?>/images/divisor-dots.svg" alt="">
            </div>
            <div class="bg-dots-4">
                <img src="<?= path_assets; ?>/images/divisor-dots2.svg" alt="">
            </div>
            <div class="news__content">
                <?php foreach($materia as $m){                ?>
                <div>
                    <?php echo $m['title'];?> 
                    <a href="<?php echo $m['link'];?>" target="_blank" rel=”nofollow”>Ver mais ></a>
                    <span>Fonte: <?= $m['fonte'];?></span>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    
    <div id="notification"></div>

    <div class=wapp>
        <a href="whatsapp://send?text= ⚠ Últimas notícias sobre  o Coronavírus em Angra. *Clique ABAIXO* para ver mais https://angrainforma.com" target="_blank">
            <i class='lni lni-whatsapp'></i> Compartilhe
        </a>
    </div>


    <section class="report">
        <div class="wrapper">
            <div class="headTitle">
                    <span class="dot"></span>
                    <span>Denúncias</span>
                    <h4>anônimas</h4>
            </div>
            <div class="report__container">
                <div class="report__container--box">
                    <?php
                    foreach($return as $r){?>
                        <div class="report__container--box-title">
                            <?= $r['subject'];?>
                        </div>
                        <div>
                            <?= $r['msg']; ?>
                        </div>
                        <span>
                            Atenção: a informação acima foi enviada por um usuário anônimo.
                        </span>
                        <?php $textLink = 'whatsapp://send?text=⚠' . substr($r['msg'], 0, 55) . '...' . "*Clique ABAIXO* para ver mais https://angrainforma.com";?>
                        <a href="<?= $textLink;?>" target="_blank" class="report__container--box-share">
                            <img src="./public/assets/images/send.svg" alt="">
                            Compartilhe esta denúncia
                        </a>
                    <?php
                    }
                    ?>
                    
                </div>
                <form id="report" method="POST">
                    <input id="subject" type="text" name="subject" placeholder="Assunto" required>
                    <textarea id="message" name="message" id="" cols="30" rows="10" placeholder="Mensagem" required></textarea>
                    <input id="sub-send" type="submit" value="Enviar">
                </form>
            </div>
        
        </div>
    </section>

    <section class="petition">
        <div class="wrapper">
            <div class="headTitle" id="#petition">
                    <span class="dot"></span>
                    <span>abaixo //</span>
                    <h4>assinado</h4>
            </div>
            <div class="petition__container">
                <div class="petition__container--box">
                    <h4>Queremos saber a sua opinião!</h4>
                    <p>O que você acha a respeito do fechamento do comércio na cidade, por causa da crise do cornavírus! Vote, agora mesmo.</p>
                
                    <div class="petition__result">
                        <ul>
                            <li>
                                <h3>A favor//</h3>
                                <span class="red-light">#<?= $totalAccept; ?></span>
                                <p>votos</p>
                            </li>
                            <li>
                                <h3>Contra//</h3>
                                <span class="red-light">#<?= $totalDeclined; ?></span>
                                <p>votos</p>
                            </li>
                            <li>
                                <h3>Total//</h3>
                                <span class="red-light">#<?= $total; ?></span>
                                <p>votos</p>
                            </li>
                        </ul>
                    </div>
                
                </div>
                <form id="petition" method="POST">
                    
                    <div class="radio__group">
                        <div class="radio">
                            <label for="accept">Concordo//</label>
                            <input type="radio" id="accept" name="petition" value="1" checked>
                            <div class="radio__check"></div>
                        </div>

                        <div class="radio">
                            <label for="notaccept">Não concordo//</label>
                            <input type="radio" id="notaccept" name="petition" value="0">
                            <div class="radio__check"></div>
                        </div>
                    </div>
                    
                    <input id="p_name" type="text" name="p_name" placeholder="Seu nome" required>
                    <input id="p_cpf" type="text" name="p_cpf" placeholder="Seu CPF" required>
                    <input id="petition-send" type="submit" value="Enviar">
                </form>
            </div>
        
        </div>
    </section>