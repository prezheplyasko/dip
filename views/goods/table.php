
<? include_once('./views/common/header.php'); ?>


<div class="grid">
    <? foreach ($goods as $good): ?>

<div class="grid-item">

            <div class="item-item"><a class="good-link" href="<?= FULL_SITE_ROOT . 'good/view/' . $good['good_id']; ?>">
                    <?= $good['good_name']; ?>
                </a></div>
    <div class="item-item"><a class="good-link" href="<?= FULL_SITE_ROOT . 'good/view/' . $good['good_id']; ?>">
            <?= $good['country_name']; ?>
        </a></div>

            <div class="list">
                <a href="<?= FULL_SITE_ROOT . 'good/view/' . $good['good_id']; ?>"><img class="list-img" src="<?= $good['good_img']; ?>" alt=""></a></div>

    <div class="item-item"><a class="good-link" href="<?= FULL_SITE_ROOT . 'good/view/' . $good['good_id']; ?>">
            <?= $good['good_price']; ?> Р.
        </a></div>
</div>

        <? endforeach; ?>





</div>


<? include_once('./views/common/footer.php'); ?>