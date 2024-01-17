<?php
$this->registerCssFile("@web/css/interernaya.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерьерная печать</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
</head>

<body>
<div class="menu-fon">
    <div class="main-fon container">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Интерьерная печать</p>
            </div>
            <img src="/img/interier.png" alt="" width="500px">
        </div>
    </div>

    <div class="about container">
        <div class="about-work">
            <div class="work">
                <div class="ant-carousel">
                    <div class="ant-carousel-hider">
                        <ul class="ant-carousel-list">
                            <li class="ant-carousel-element"><img class="img-1" src="/img/roll.png" alt="0" width="120px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-2" src="/img/poster.png" alt="1" width="120px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-3" src="/img/banner.png" alt="2" width="150px">
                            </li>
                            <li class="ant-carousel-element"><img src="" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="ant-carousel-arrow-left"></div>
                    <div class="ant-carousel-arrow-right"></div>
                    <div class="ant-carousel-dots"></div>
                </div>
                <div class="price">
                    <p>Баннер - 700р м/кв<br>
                        пленка - 750р м/кв<br>
                        бумага - 850р м/кв<br>
                        перфор. пленка - 1300р м/кв</p>
                </div>
            </div>
            <div class="forms">
                <div class="form">
                    <div>
                        <div class="form-item">
                            <label for="weight">Ширина</label>
                            <input type="number" name="" id="weight" placeholder="от 300мм" value="">
                        </div>
                        <div class="form-item">
                            <label for="height">высота</label>
                            <input type="number" name="" id="height" placeholder="от 300мм" value="">
                        </div>
                        <div class="form-item">
                            <label for="kolvo">Количество</label>
                            <input type="number" name="" id="kolvo" placeholder="от 1шт">
                        </div>
                        <div class="form-item">
                            <label for="material">Материал</label>
                            <select id="material" name="material">
                                <option data-id = "1" value="700">БАННЕР</option>
                                <option data-value="" value="750">БЭКЛИТ</option>
                                <option data-value="" value="750">САМОКЛЕЮЩАЯСЯ ПЛЕНКА</option>
                                <option data-value="" value="900">ХОЛСТ</option>
                                <option data-value="" value="700">БУМАГА ПОСТЕРНАЯ</option>
                            </select>
                        </div>
                    </div>
                    <div id="additional-form">
                        <div class="luvers-form">
                            <label for="luvers">Кол-во люверсов</label>
                            <input type="number" name="" id="luvers" placeholder="от 1шт">
                        </div>
                        <div>
                            <div class="prokleika-form">
                                <input type="checkbox" id="prokleika" name="prokleika" value=""/>
                                <span data-toggle="tooltip" data-placement="top">Проклейка периметра</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="obrez-form">
                            <input type="checkbox" id="obrez" name="prokleika" value=""/>
                            <span data-toggle="tooltip" data-placement="top">Обрез</span>
                        </div>
                    </div>
                </div>
                <div class="calc-price">
                    <span>итог:</span> <span id="result"></span>
                </div>
                <div class="calc-but">
                    <button onclick="calc_int()">рассчитать</button>
                </div>
            </div>
        </div>
    </div>
    <div class="info-fon">
        <div class="info-text container">
            <p>Интерьерная печать – это отличный способ придать вашему помещению индивидуальный характер и сделать его более уютным и комфортным. Наша компания предлагает вам изготовление интерьерной печати, которая может быть выполнена на различных материалах, таких как холст, фотобумага, пленка или самый популярный вариант – винил.</p>
        </div>
    </div>
</div>
</body>
</html>
<?php
$this->registerJsFile(
    '@web/js/calc.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>
<?php
$this->registerJsFile(
    '@web/js/js.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>
