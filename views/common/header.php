<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $this->title; ?></title>
    <link rel="stylesheet" href="<?= CSS . 'style.css'; ?>">
    <link rel="stylesheet" href="<?= CSS . 'style2.css'; ?>">

    <link rel="stylesheet" href="<?= CSS . 'owl.carousel.min.css'; ?>">
    <link rel="stylesheet" href="<?= CSS . 'owl.theme.default.min.css'; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

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
                    <a id="mi" class="dropdown-item" href="<?= FULL_SITE_ROOT . 'reg'?>">Регистрация</a>
                    <a  id="mi" class="dropdown-item" href="<?= FULL_SITE_ROOT . 'auth'?>">Авторизация</a>

            </li>

            <li class="nav-item">
                <a id="mi" class="nav-link" href="<?= FULL_SITE_ROOT . 'ad-panel'?>">Административная панель</a>
            </li>


        </ul>

    </div>
</div>

