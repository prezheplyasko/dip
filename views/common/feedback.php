<? include_once('./views/common/header.php'); ?>
<div class="feed-wrap">
<form method="POST">

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Введите Ваш email">
        </div>
    <div class="form-group">
        <label for="feed">Текст сообщения</label>
        <textarea name="feed" class="form-control" id="feed" aria-describedby="emailHelp" placeholder="Ваш вопрос или предложение"></textarea>
    </div>


    <button type="submit" class="btn-reg" onclick="myFeed()">Отправить</button>

    <script>
        function myFeed(){
            alert("Ваше сообщение отправлено");
        }
    </script>
</form>
</div>
<? include_once('./views/common/footer.php'); ?>

