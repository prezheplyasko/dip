<?php
include_once('models/Good.php');


class GoodsController
{
    private $title = 'Товары';
    public function actionIndex()
    {
        $goodModel = new Good();
        $goods = $goodModel->getGoods();
        include_once('views/goods/table.php');
        return;

    }

    public function actionView($id)
    {
        $goodModel = new Good();
        $good = $goodModel->getGoodById($id);
        
        include_once('views/goods/view.php');
        return;
    }


}