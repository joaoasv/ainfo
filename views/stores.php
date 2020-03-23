<?php 
    $stores = [
        '1' => [
            'name' => 'Black Wood Burguer',
            'category' => 'food',
            'tel' => '974022570',
            'fb_link' => 'https://fb.com/blackwoodburguer',
            'tw_link' => false,
            'ig_link' => 'https://instagram.com/blackwoodburguer'
        ]
        // ],
        // '2' => [
        //     'name' => 'ASV Digital',
        //     'category' => 'agency',
        //     'tel' => '974022570',
        //     'fb_link' => 'https://fb.com/blackwoodburguer',
        //     'tw_link' => false,
        //     'ig_link' => 'https://instagram.com/blackwoodburguer'
        // ]
    ];
?>
<section class="stores">
    <div class="wrapper">
        <div class="stores__title">
            <span class="dot"></span>
            <span>Empresas locais</span>
            <h4>Delivery</h4>
        </div>
        <div class="stores__container">
            <ul class="stores__container--list">
                <?php foreach($stores as $store): ?>
                <li class="stores__container--item">
                    <span class="stores__category stores__category--<?php $store['category']; ?>"><?php $store['category']; ?></span>
                    <h4><?= $store['name']; ?></h4>
                    <a href="tel:+5524<?= $store['tel']; ?>" class="stores__tel"><?= $store['tel']; ?></a>
                    <div class="stores__social">
                        <a href="<?= $store['fb_link']?>" class="stores__social--link"><span class="stores__social--icon">fb</span></a>
                        <a href="<?= $store['tw_link']?>" class="stores__social--link"><span class="stores__social--icon">tw</span></a>
                        <a href="<?= $store['ig_link']?>" class="stores__social--link"><span class="stores__social--icon">ig</span></a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>