<?php
$this->registerCssFile("@web/css/kompleks.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комплексное рекламное обслуживание</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
</head>
<body>
<div class="menu-fon">
    <div class="main-fon">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Комплексное рекламное обслуживание</p>
                <!-- <p class="p-2">от 3000р</p> -->
                <div class="popup-form">
                    <div >
                        <button id="openPopup">Написать нам</button>
                        <div id="popupForm" class="popup">
                            <img src="/img/Vector.png" id="closePopup">
                            <form action="/site/mail8">
                                <label for="name">Имя</label>
                                <input type="text" id="name" name="name" required>
                                <label for="number">Телефон</label>
                                <input type="number" id="number" name="number" required>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                                <button id="otpr" type="submit">Отправить</button>
                            </form>
                        </div>
                    </div>
                    <p class="p2-1">*Для получения стоимости необходимо связаться с нами любым удобным для вас способом*</p>
                </div>
            </div>
            <img class="img-i" src="/img/visual.png" alt="" width="470px">
        </div>
    </div>
    <div class="info-fon">
        <div class="info-text container">
            <p>
                Добро пожаловать на страницу комплексного обслуживания в области рекламного производства!Наша компания предлагает широкий спектр услуг для удовлетворения всех ваших потребностей всоздании и производстве рекламных материалов. Мы предоставляем интегрированный подход,высокое качество и индивидуальные решения, чтобы помочь вам достичь ваших рекламныхцелей.Что мы предлагаем:Концепция и разработка: Мы поможем вам разработать уникальную и привлекательнуюконцепцию для ваших рекламных материалов. Наша команда опытных дизайнеров имаркетологов работает в тесном сотрудничестве с вами, чтобы понять ваши цели и целевуюаудиторию, и создать рекламные материалы, которые будут максимально эффективными.Производство рекламных материалов: Мы обладаем собственным производством и используем передовое оборудование, чтобы произвести высококачественные рекламные материалы. Мы можем создать широкий спектр продуктов, включая вывески, билборды, баннеры, плакаты,стенды, наклейки и многое другое.Широкий выбор материалов и технологий.
            </p>
        </div>
    </div>
<!--    <div class="work container">-->
<!--        <p>примеры работ:</p>-->
<!--        <div class="ant-carousel">-->
<!--            <div class="ant-carousel-hider">-->
<!--                <ul class="ant-carousel-list">-->
<!--                    <li class="ant-carousel-element"><img class="img-1" src="/img/steeend.png" alt="0" width="250px">-->
<!--                    </li>-->
<!--                    <li class="ant-carousel-element"><img class="img-2" src="/img/jur.png" alt="1" width="220px">-->
<!--                    </li>-->
<!--                    <li class="ant-carousel-element"><img class="img-3" src="/img/visit.png" alt="2" width="220px">-->
<!--                    </li>-->
<!--                    <li class="ant-carousel-element"><img src="" alt="">-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="ant-carousel-arrow-left"></div>-->
<!--            <div class="ant-carousel-arrow-right"></div>-->
<!--            <div class="ant-carousel-dots"></div>-->
<!--        </div>-->
<!--    </div>-->

</div>
</body>
<script src="js.js"></script>
</html>
<?php
$this->registerJsFile(
    '@web/js/js.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
$this->registerJsFile(
    '@web/js/form.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>