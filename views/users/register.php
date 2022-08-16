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
    <div class="form-group">
        <label for="exampleInputEmail1" class="label">Подтвердите Пароль</label>
        <input type="password" name="repeat_password" class="form-control" id="password2" aria-describedby="emailHelp" placeholder="Пароль еще раз">
    </div>

    <div class="g-recaptcha" data-sitekey="6LdfUZ8eAAAAAMmKDgUdOuFwyObzJUXSb4HxWv8m"></div>

    <div class="text-danger" id="recaptchaError"></div>

    <script src='https://www.google.com/recaptcha/api.js'></script>



    <button type="submit" class="btn-reg">Зарегистрироваться</button>

    </div>
</form>

<? include_once('./views/common/footer.php'); ?>
