<div class="main-footer">
    <div class="footer-nav">
        <div class="footer-nav-item"><a class="footer-nav-link" href="<?= FULL_SITE_ROOT . 'company'?>">О нас</a></div>
        <div class="footer-nav-item"><a class="footer-nav-link" href="<?= FULL_SITE_ROOT . 'contacts'?>">Контакты</a></div>
        <div class="footer-nav-item"><a class="footer-nav-link" href="<?= FULL_SITE_ROOT . 'policy'?>">Пользовательствое соглашение</a></div>

    </div>
    <div class="main-feed">
        <div class="feedback">

                <button class="feedback-button" ><a href="<?= FULL_SITE_ROOT . 'feedback'?>">Отправить Свой Вопрос</a></button>

        </div>
        <div class="sm">

            <div class="sm-item"><a href="#"><i class="fa-brands fa-vk"></i></a></div>
            <div class="sm-item"><a href="#"><i class="fa-brands fa-instagram"></a></i></div>
            <div class="sm-item"><a href="#"><i class="fa-brands fa-facebook-f"></a></i></div>
        </div>
    </div>

</div>

<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="assets/js/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            items:1,
            loop:true,
            margin:50,
            autoplay:true,
            autoplayTimeout:6000,
            smartSpeed:850,
            autoplayHoverPause:false
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#a61408",
                "text": "#ffffff"
            },
            "button": {
                "background": "transparent",
                "text": "#ffffff",
                "border": "#ffffff"
            }
        },
        "position": "bottom-left",
        "content": {
            "message": "Этот сайт использует куки. Не бойтесь, это нестрашно!",
            "dismiss": "Принять",
            "link": "Узнать, что это за куки такие"
        }
    });
</script>
<script src="<?= JS . 'cookie.js'; ?>"></script>
<script src="<?= JS . 'script.js'; ?>"></script>

</body>
</html>