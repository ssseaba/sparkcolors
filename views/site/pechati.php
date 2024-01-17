<?php
$this->registerCssFile("@web/css/pechati.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Печати и штампы</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
</head>
<body>
<div class="menu-fon">
    <div class="main-fon">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">печати и штампы</p>
                <p class="p-2">от 2500р</p>
            </div>
            <img src="/img/gl.png" alt="" width="400px">
        </div>
    </div>
    <div class="work container">
        <p>примеры работ:</p>
        <div class="ant-carousel">
            <div class="ant-carousel-hider">
                <ul class="ant-carousel-list">
                    <li class="ant-carousel-element"><img class="img-1" src="/img/pec2.png" alt="0" width="200px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-2" src="/img/sh.png" alt="1" width="200px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-3" src="/img/pec.png" alt="2" width="180px">
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
            <p>Изготовление печатей: Мы предлагаем изготовление печатей различных типов и размеров,включая печати с логотипом, адресными данными, фирменными цветами и другимииндивидуальными требованиями. Мы используем только высококачественные материалы исовременное оборудование, чтобы обеспечить четкую и долговечную печать.
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