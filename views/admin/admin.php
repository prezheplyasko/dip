<? include_once('./views/admin/header.php'); ?>

    <a class="btn btn-primary" href="<?= FULL_SITE_ROOT . 'add'; ?>">
        Добавить новый товар в базу
    </a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Товар</th>
        <th scope="col">Цена (Руб)</th>
        <th scope="col">Действия</th>
    </tr>
    </thead>
    <tbody>
    <? foreach ($goods as $good): ?>
        <tr>
            <td scope="row"><?= $good['good_id']; ?></td>
            <td scope="row"><a href="<?= FULL_SITE_ROOT . 'ad-panel/view/' . $good['good_id']; ?>">
                    <?= $good['good_name']; ?>
                </a></td>

            <td scope="row"><?= $good['good_price']; ?> </td>

            <td>
                    <a class="btn btn-success"
                       href="<?= FULL_SITE_ROOT . 'ad-panel/edit' . $good['good_id']; ?>">
                        Редактировать
                    </a>
                    <button class="btn btn-danger"
                            onclick="remove('good', <?= $good['good_id']; ?>)">
                        Удалить
                    </button>
                </td>
        </tr>
    <? endforeach; ?>
    </tbody>
</table>

<? include_once('./views/admin/footer.php'); ?>