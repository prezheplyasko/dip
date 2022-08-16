<? include_once('./views/admin/header.php'); ?>

<form method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Название</label>
        <input type="text" name="good_name" value="<?= $goodInfo['good_name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Цена</label>
        <input type="text" name="good_price" value="<?= $goodInfo['good_price']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">

    </div>

    <button type="submit" class="btn btn-primary">Изменить</button>
</form>

<? include_once('./views/admin/footer.php'); ?>
