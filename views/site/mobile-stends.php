<?php
$this->registerCssFile("@web/css/mobile_stends.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мобильные стенды и конструкции</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
</head>
<body>
<div class="menu-fon">
    <div class="main-fon">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Мобильные стенды и конструкции</p>
                <p class="p-2">от 3000р</p>
                <div class="popup-form">
                    <div >
                        <button id="openPopup">Написать нам</button>
                        <div id="popupForm" class="popup">
                            <img src="/img/Vector.png" id="closePopup">
                            <form action="/site/mail6" method="post">
                                <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>"/>
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
            <img class="img-i"  src="/img/stend.png" alt="" width="400px">
        </div>
    </div>
    <div class="work container">
        <p>примеры работ:</p>
        <div class="ant-carousel">
            <div class="ant-carousel-hider">
                <ul class="ant-carousel-list">
                    <li class="ant-carousel-element"><img class="img-1" src="/img/штендер.png" alt="0" width="200px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-2" src="/img/стойка.png" alt="1" width="150px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-3" src="/img/стенд-информация.png" alt="2" width="180px">
                    </li>
                    <li class="ant-carousel-element"><img src="" alt="">
                    </li>
                </ul>
            </div>
            <div class="ant-carousel-arrow-left"></div>
            <div class="ant-carousel-arrow-right"></div>
            <div class="ant-carousel-dots"></div>
        </div>
    </div>
    <div class="info-fon">
        <div class="info-text container">
            <p>
                Все виды стендов – это неотъемлемая часть любого выставочного проекта. Они представляютсобой информационные точки, которые привлекают внимание зрителей и выделяют Ваш брендсреди конкурентов. В Спарк Колорс мы специализируемся на изготовлении всех видов стендов –от мобильных подиумных стендов до ротанговых систем.Наши профессионалы используют новейшие технологии и качественные материалы, чтобысоздать стенды, которые не только выглядят привлекательно, но и выдерживают тест времени.Мы знаем, что успех выставки зависит от того, как представлен Ваш бренд, поэтому мы делаемвсе возможное, чтобы Ваш стенд выглядел идеально.
            </p>
        </div>
    </div>
</div>
</body>
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
