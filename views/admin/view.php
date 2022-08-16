<? include_once('./views/admin/header.php'); ?>

<div class="card">
    <div class="card-header">
        <?= $good['good_name']; ?>
    </div>
    <div class="card-body">
        <h5 class="card-title">Цена: <?= $good['good_price']; ?></h5>

    </div>

</div>

<? include_once('./views/admin/footer.php'); ?>
