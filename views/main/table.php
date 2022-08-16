
<? include_once('./views/common/header.php'); ?>

<div class="cat">
    <? foreach ($info as $cat): ?>
    <div class="cat-list"><a id="mi-cat" class="cat-link" href="<?= FULL_SITE_ROOT . 'goods'?>"><?= $cat['cat_name']; ?></a></div>
    <? endforeach; ?>
</div>

<div class="owl-carousel owl-theme">
    <div><img class="main-car" src="<?= IMG . '/main/1.jpg'; ?>" alt="1"></div>
    <div><img class="main-car" src="<?= IMG . '/main/2.jpg'; ?>" alt="2"></div>
    <div><img class="main-car" src="<?= IMG . '/main/4.jpg'; ?>" alt="3"></div>
    <div><img class="main-car" src="<?= IMG . '/main/5.jpg'; ?>" alt="3"></div>
</div>

<div class="about">
    <div class="header" >
        <a name="about">Почему мы?</a></div>
    <div class="content">
        <div class="about-1">
            <div class="about-card">
                <div class="about-pic"><i class="fa-solid fa-truck"></i></div>
                <div class="about-text">Мы порадуем Вас быстрой доставкой! Осуществляем доставку товаров в течение 2-5 дней со дня заказа. Заказавшим у нас первый раз доставка - БЕСПЛАТНО!</div>
            </div>
            <div class="about-card">
                <div class="about-pic"><i class="fa-solid fa-certificate"></i></div>
                <div class="about-text">Мы продаем только оригинальные продукты, прямиком из стран Азии. Все товары имеют соответствующие сертификаты качества</div>
            </div>
        </div>
        <div class="about-2">
            <div class="about-card">
                <div class="about-pic"><i class="fa-solid fa-face-grin-stars"></i></div>
                <div class="about-text">Мы готовы меняться, чтобы продолждать радовать наших любимых клиентов. Ждем Вашу обратную связь и предложения по работе магазина</div>
            </div>
            <div class="about-card">
                <div class="about-pic"><i class="fa-solid fa-gem"></i></div>
                <div class="about-text">Зарегистрируйтесь сейчас, и Вы увидите, как выгодно покупать у нас. Постоянных покупателей ждут приятные скидки и особые предложения!</div>
            </div>
        </div>
    </div>

</div>



<? include_once('./views/common/footer.php'); ?>