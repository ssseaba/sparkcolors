<?php
$this->registerCssFile("@web/css/contacts.css", [
    'depends' => [yii\bootstrap5\BootstrapAsset::class],
]);
?>
<main class="main-fon">
    <div class="about-con container">
        <div>
            <h2>Контакты</h2>
            <div class="contact">
                 <p>+7 (963) 770-20-77</p>
                 <p>Ногинск, Комсомольская, д. 10</p>
            </div>
        </div>
        <div class="carta">
<!--             <script  type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7350c6101e35c7e8b0c3bdb1a63cc87c407c5bf0a09b7612970ae6f05aab97ab&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>-->
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7350c6101e35c7e8b0c3bdb1a63cc87c407c5bf0a09b7612970ae6f05aab97ab&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
        </div>
    </div>
</main>
<?php
$this->registerJsFile(
    '@web/js/js.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>
