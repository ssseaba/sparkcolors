<?php
$this->registerCssFile("@web/css/suvenir.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сувенирная продукция</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
    <link rel="stylesheet" href="suvenir.css">
</head>
<body>
<div class="menu-fon">
    <div class="main-fon">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Сувенирная продукция</p>
                <p class="p-2">от 2500р</p>
                <div class="popup-form">
                    <div >
                        <button id="openPopup">Написать нам</button>
                        <div id="popupForm" class="popup">
                            <img src="/img/Vector.png" id="closePopup">
                            <form action="/site/mail7" method="post">
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
            <img class="img-i"  src="/img/suvenir.png" alt="" width="500px">
        </div>
    </div>
    <div class="work container">
        <p>примеры работ:</p>
        <div class="ant-carousel">
            <div class="ant-carousel-hider">
                <ul class="ant-carousel-list">
                    <li class="ant-carousel-element"><img class="img-1" src="/img/kalendar.png" alt="0" width="250px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-2" src="/img/stakan.png" alt="1" width="200px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-3" src="/img/ruchka.png" alt="2" width="120px">
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
                Ваш бизнес в поиске инновационных идей для продвижения и привлечения клиентов? Почему быне воспользоваться потенциалом сувенирной продукции? Изготовление сувениров – это прекрасный способ повысить узнаваемость вашей марки и придать ей личность. В нашейкомпании, Спарк Колорс, мы предлагаем широкий выбор высококачественных сувениров,которые можно нанести логотип вашей компании или уникальный дизайн. От классическихфутболок и чехлов для телефонов до элегантных подарочных коробок и полиграфическихпродуктов.
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