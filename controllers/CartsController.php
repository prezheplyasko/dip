<?php

class CartsController
{

    private $title = 'Корзина';
    public $role;

    public function actionIndex()
    {
        $cartDetails = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : array();
        if ($cartDetails) {
            if (isset($_POST['email'])) {
                $user = $_COOKIE['user'] ?? htmlentities($_POST['email']);
                $cartModel = new Cart();
                $orderId = $cartModel->addOrder($cartDetails, $user);
                if ($orderId) {

                    setcookie('cart', '', time() - 10000, '/');
                    header('Location: ' . FULL_SITE_ROOT . 'goods');
                }
            }
            $ids = array_keys($cartDetails);
            $goodModel = new Good();
            $goodInfo = $goodModel->getGoodInfoForCart($ids);
            $goodInfo = array_map(function($good) use ($cartDetails) {
                $good['count'] = $cartDetails[$good['good_id']];
                return $good;
            }, $goodInfo);

        }
        include_once('./views/carts/details.php');
    }
}