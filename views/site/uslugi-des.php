<?php
$this->registerCssFile("@web/css/uslugi_des.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги дизайна</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
</head>
<body>
<div class="menu-fon">
    <div class="main-fon">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Услуги дизайна</p>
                <p class="p-2">от 500р</p>
            </div>
            <img src="/img/des.png" alt="" width="470px">
        </div>
    </div>
    <div class="work container">
        <p>примеры работ</p>
        <div class="ant-carousel">
            <div class="ant-carousel-hider">
                <ul class="ant-carousel-list">
                    <li class="ant-carousel-element"><img class="img-1" src="/img/usl1.png" alt="0" width="200px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-2" src="/img/usl2.png" alt="1" width="230px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-3" src="/img/usl3.png" alt="2" width="280px">
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
                В нашей компании мы уделяем особое внимание дизайну. Наши дизайнеры – это профессионалысвоего дела, имеющие большой опыт работы в своей области. Они смогут реализовать любыеваши идеи и помочь вам выбрать наилучший вариант. Мы предлагаем полный спектр услугдизайна – от дизайна логотипов и визиток до создания полноценных брендбуков. Доверьте намсвой дизайн – и мы поможем вам выделиться из толпы и сделать ваш бизнес незабываемым.»
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
?>