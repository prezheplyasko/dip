<? include_once('./views/common/header.php'); ?>


<form method="POST" class="form-form">
    <div class="form-container">
        <div class="form-group">

            <? if (!empty($errors)): ?>
                <div>
                    <? foreach ($errors as $error): ?>
                        <p style="color: red"> <?= $error; ?> </p>
                    <? endforeach; ?>
                </div>
            <? endif; ?>

            <label for="exampleInputEmail1" class="label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите Email" required>
            <span class="form__error">Это поле должно содержать E-Mail в формате example@site.com</span>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1" class="label"> Пароль</label>
            <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Введите пароль">
        </div>



        <button type="submit" class="btn-reg">Войти</button>

    </div>
</form>

<? include_once('./views/common/footer.php'); ?>
