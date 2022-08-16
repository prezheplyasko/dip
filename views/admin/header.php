<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $this->title; ?></title>
    <link rel="stylesheet" href="<?= CSS . 'style.css'; ?>">
    <link rel="stylesheet" href="<?= CSS . '1.css'; ?>">
    <link rel="stylesheet" href="<?= CSS . '2.css'; ?>">
    <link rel="stylesheet" href="<?= CSS . '3.css'; ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>



    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>
<body>

<div class="common">
    <div class="main">
        <a class="navbar-brand" href="<?= FULL_SITE_ROOT . 'main'?>"><img class="main-img" src="<?= IMG . 'logo.png'; ?>" alt="Fancy Logo"></a>
    </div>

    <div class="nav">
        <ul class="nav justify-content-space-evenly">
            <li  class="mi nav-item dropdown">
                <a id="mi" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">О нас</a>
                <div class="dropdown-menu">
                    <a id="mi" class="dropdown-item" href="<?= FULL_SITE_ROOT . 'company'?>">Компания</a>
                    <a id="mi" class="dropdown-item" href="<?= FULL_SITE_ROOT . 'contacts'?>">Контакты</a>
                    <a id="mi" class="dropdown-item" href="<?= FULL_SITE_ROOT . 'delivery'?>">Доставка</a>
                    <a id="mi" class="dropdown-item" href="<?= FULL_SITE_ROOT . 'policy'?>">Политика конфиденциальности</a>

            </li>
            <li class="nav-item <?=  ($this->title === 'Товары') ? 'active': ''; ?>">
                <a id="mi" class="nav-link" href="<?= FULL_SITE_ROOT . 'goods'?>">Товары <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a id="mi" class="nav-link" href="<?= FULL_SITE_ROOT . 'cart'?>">Корзина</a>
            </li>
            <li class="nav-item dropdown">
                <a id="mi" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Вход</a>
                <div class="dropdown-menu">
                    <a id="mi" class="dropdown-item" href="#">Авторизация</a>
                    <a  id="mi" class="dropdown-item" href="<?= FULL_SITE_ROOT . 'reg'?>">Регистрация</a>

            </li>

            <li class="nav-item">
                <a id="mi" class="nav-link" href="<?= FULL_SITE_ROOT . 'ad-panel'?>">Административная панель</a>
            </li>


        </ul>

    </div>
</div>


