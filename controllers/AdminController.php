<?php

class AdminController
{

    private $title = 'Админ-панель';
    public $role;

    public function actionIndex()
    {
        $goodModel = new Good();
        $goods = $goodModel->getGoods();
        include_once('views/admin/admin.php');
        return;
    }

    public function actionView($id)
    {
        $goodModel = new Good();
        $good = $goodModel->getGoodById($id);
        include_once('views/admin/view.php');
        return;
    }

    public function actionAdd()
    {
        if (isset($_POST['good_name'])) {
            $name = htmlentities($_POST['good_name']);
            $price = htmlentities($_POST['good_price']);

            $goodsInfo = array(
                'name' => $name,
                'price' => $price,

            );
            $goodModel = new Good();
            if ($goodModel->addGood($goodsInfo)) {
                header('Location: ' . FULL_SITE_ROOT . 'ad-panel');
            }
        }

        include_once('./views/goods/add.php');
        return;
    }

    public function actionEdit($id)
    {
        $goodModel = new Good();
        if (isset($_POST['good_name'])) {
            $name = htmlentities($_POST['good_name']);
            if ($goodModel->updateGood($name, $id)) {
                header('Location: ' . FULL_SITE_ROOT . 'ad-panel');
            }
        }
        $good = $goodModel->getGoodById($id);
        include_once('views/admin/edit.php');
        return;
    }
    public function actionDelete($id)
    {
        $goodModel = new Good();
        if ($goodModel->deleteGood($id)) {
            header('Location: ' . FULL_SITE_ROOT . 'ad-panel');
        }
        return;
    }




}