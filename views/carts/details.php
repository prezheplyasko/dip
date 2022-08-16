<? include_once('./views/common/header.php'); ?>

<? if (!empty($cartDetails)): ?>
    <div >
        <h4 class="card-title">
            Ваша Корзина:
        </h4>
        <table class="te">
            <thead>
            <tr>
                <th>

                </th>
                <th>

                </th>
                <th>

                </th>
                <th>

                </th>
                <th>

                </th>
            </tr>
            </thead>
            <tbody>
            <? foreach ($goodInfo as $goodInfo): ?>
                <div class="details" data-id="<?= $goodInfo['good_id']; ?>">
                    <div class="detail-item">
                        <?= $goodInfo['good_name']; ?>
                    </div>

                    <div class="detail-item">
                        <?= $goodInfo['good_price']; ?> Р.
                    </div>
                        <div class="detail-item">

                            <input class="stepper" data-price="<?= $goodInfo['good_price']; ?>" type="number" step="1" min="1" max="100" value="<?= $goodInfo['count']; ?>" />

                    </div>
                            <div class="detail-item">
                        <?= $goodInfo['good_price'] * $goodInfo['count']; ?> Р.
                    </div> <hr>
                                <div class="detail-item">
                        <button class="cart-btn" onclick="removeFromCart(<?= $goodInfo['good_id']; ?>)"> Убрать из корзины </button>
                    </div>

        </div>
            <? endforeach; ?>
            </tbody>
        </table>

        <? if (!empty($errors)): ?>
            <div>
                <? foreach ($errors as $error): ?>
                    <p style="color: red"> <?= $error; ?> </p>
                <? endforeach; ?>
            </div>
        <? endif; ?>
        <form method="POST">



            <button type="submit" onclick="myOrder()" class="cart-submit">Заказать!</button>
            <script>
                function myOrder(){
                    alert("Заказ отправлен в обработку. Наши специалисты скоро свяжутся с Вами")
                }
            </script>
        </form>
    </div>
<? else: ?>
    <h2> Корзина пуста. Пожалуйста, добавьте <a href="<?= FULL_SITE_ROOT . 'goods'?>">товары</a> </h2>

<? endif; ?>
<? include_once('./views/common/footer.php'); ?>
