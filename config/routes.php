<?php

$routes = array(

    'GoodsController' => array(
        'good/view/([0-9]+)' => 'view/$1',
        'goods' => 'index'

    ),
    'StaticController' => array(
        'main' => 'index',
        'company'=> 'company',
        'delivery'=> 'delivery',
        'contacts'=> 'contacts',
        'policy'=> 'policy'

    ),
    'UsersController' => array(
        'reg' => 'register',
        'auth' => 'auth',
        'logout' => 'logout'
    ),
    'CartsController' => array(
        'cart' => 'index'
    ),
    'AdminControllerProxy' => array(
        'ad-panel' => 'index',
        'add' => 'add',
        'ad-panel/view/([0-9]+)' => 'view/$1',
        'ad-panel/edit/([0-9]+)' => 'edit/$1',
        'ad-panel/delete/([0-9]+)' => 'delete/$1'

    ),
    'FeedController' => array(
        'feedback' => 'index'
    )


);