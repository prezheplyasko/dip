<? include_once('./views/common/header.php'); ?>
<div class="good-card">
    <div class="card">
        <div class="card-header">
            <?= $good['good_name']; ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Цена: <?= $good['good_price']; ?> Р. </h5>

        </div>
        <div class="card-footer">
            <img class="card-img" src="../../<?= $good['good_img']; ?>" alt="">
        </div>
    </div>
    <div class="good-text">
        <p class="good-description">
            <?= $good['good_descr']; ?>
        </p>
    </div>
</div>


    <button type="button" onclick="addToCart(<?= $good['good_id']; ?>)" class="btn-reg"> Добавить в корзину </button>

<? include_once('./views/common/footer.php'); ?>