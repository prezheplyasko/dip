<? include_once('./views/admin/header.php'); ?>

    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Название товара</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Цена</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

<? include_once('./views/admin/footer.php'); ?>
