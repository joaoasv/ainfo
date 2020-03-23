<?php 
    require './inc/functions.php';
    $stores = [
        '1' => [
            'name' => 'Black Wood Burguer',
            'category' => 'Fast Food',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ],
        '2' => [
            'name' => 'Broncos Burger',
            'category' => 'Fast Food',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ],
        '3' => [
            'name' => 'Dito e Feito Pizzaria',
            'category' => 'Fast Food',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ],
        '4' => [
            'name' => 'Haru Sushi Ninja',
            'category' => 'Fast Food',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ],
        '5' => [
            'name' => 'Drogatur',
            'category' => 'Medicamentos',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ],
        '6' => [
            'name' => 'Zona Sul',
            'category' => 'Mercado',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ],
        '7' => [
            'name' => 'Rede Market',
            'category' => 'Mercado',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ],
        '8' => [
            'name' => 'Let´s Bruger',
            'category' => 'Fast Food',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ],
        '9' => [
            'name' => 'Influencer',
            'category' => 'Moda',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ]
    ];
?>
<section class="stores">
    <div class="wrapper">
        
        <div class="stores__group">
            <div class="stores__title">
                <span class="dot"></span>
                <span>Empresas locais</span>
                <h4>Delivery</h4>
            </div>
            <ul class="stores__filter">
                <li><a href="#"><i class="lnil lnil-restaurant"></i>Fast food</a></li>
                <li><a href="#"><i class="lnil lnil-cart-alt"></i>Mercado</a></li>
                <li><a href="#"><i class="lnil lnil-medical-sign"></i>Farmácia</a></li>
                <li><a href="#"><i class="lnil lnil-tshirt"></i>Moda</a></li>
            </ul>
        </div>

        <div class="stores__container">
            <ul class="stores__container--list">
                <?php 
                        foreach($stores as $store): 
                        $category = $store['category']; 
                        $slug = strtolower(str_replace(' ', '-', $category));
                ?>
                <li class="stores__container--item">                      
                    <div class="stores__inner">
                        <span class="stores__category stores__category--<?= $slug; ?>">
                            <?php 
                                $iconClass;
                                switch ($store['category']) {
                                    case 'Fast Food':
                                        $iconClass = 'lnil-restaurant';
                                        break;
                                    case 'Medicamentos':
                                        $iconClass = 'lnil-medical-sign';
                                        break;
                                    case 'Moda':
                                        $iconClass = 'lnil-tshirt';
                                        break;
                                    case 'Mercado':
                                        $iconClass = 'lnil-cart-alt';
                                        break;
                                    default:
                                        $iconClass = 'lnil-briefcase';
                                        break;
                                };
                            ?>
                            <i class="lnil <?= $iconClass; ?>"></i> <?= $store['category']; ?>
                        </span>

                        <h4 class="stores__title--inner"><?= $store['name']; ?></h4>
                                
                        <div class="stores__social">
                            <a href="./" class="stores__social--links">
                                <i class="lnil lnil-facebook"></i>
                            </a>
                            <a href="./" class="stores__social--links">
                                <i class="lnil lnil-Instagram"></i>
                            </a>
                            <a href="./" class="stores__social--links">
                                <i class="lnil lnil-Website"></i>
                            </a>
                        </div>
                    </div>
                    <div class="stores__call">
                        <div class="stores__details">
                            <a href="tel:+5524<?= $store['tel']; ?>">WhatsApp</a>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>