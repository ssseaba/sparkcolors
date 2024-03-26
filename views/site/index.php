<?php

$this->registerCssFile("https://fonts.cdnfonts.com/css/furore", [
    'depends' => [yii\bootstrap5\BootstrapAsset::class],
]);
$this->registerCssFile("https://fonts.cdnfonts.com/css/noto-sans-jp", [
    'depends' => [yii\bootstrap5\BootstrapAsset::class],
]);

$this->registerCssFile("@web/css/glavnaya.css", [
    'depends' => [yii\bootstrap5\BootstrapAsset::class],
]);
?>
<div class="container">
    <div class="main-fon">
        <div class="main">
            <div class="menu">
                <a href="/site/viveski">Вывески</a>
                <a href="/site/interernaya">Интерьерная печать</a>
                <a href="/site/shirokoformatnaya">Широкоформатная печать</a>
                <a href="/site/poligrafiya">Полиграфия</a>
                <a href="/site/tablichki">Таблички</a>
                <a href="/site/nakleyki">Наклейки</a>
                <a href="/site/pechati">Печати и штампы</a>
                <a href="/site/uslugi-des">Услуги дизайна</a>
                <a href="/site/kompleks">Комплексное рекламное обслуживание</a>
                <a href="/site/suvenir">Сувенирная продукция</a>
                <a href="/site/mobile-stends">Мобильные конструкции и стенды</a>
                <a class="menu-item" href="/site/contact">Контакты</a>
            </div>
            <div class="menu-img">
                <img class="main-image" src="/img/мужик.png" alt="" width="690px">
                <img class="card animated image-2" src="/img/image-2.png" alt="" width="165px">
                <img class="card animated image-3" src="/img/image-3.png" alt="" width="150px">
                <img class="card animated image-4" src="/img/image-4.png" alt="" width="140px">
                <img class="card animated image-5" src="/img/imagee.png" alt="" width="320px">
                <img class="card animated image-6" src="/img/image-6.png" alt="" width="150px">
                <img class="card animated image-7" src="/img/image-7.png" alt="" width="230px">
                <img class="card animated image-8" src="/img/image-8.png" alt="" width="162px">
            </div>
            <div class="photo">
                <img src="/img/main-photo.png" alt="">
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJsFile(
    '@web/js/anim.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>
