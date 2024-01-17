<?php
$this->registerCssFile("@web/css/shirokoformatnaya.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Широкоформатная печать</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
</head>
<body>
<div class="menu-fon">
    <div class="main-fon">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Широкоформатная печать</p>
            </div>
            <img src="/img/shirok.png" alt="" width="500px">
        </div>
    </div>

    <div class="about container">
        <div class="about-work">
            <div class="work">
                <div class="ant-carousel">
                    <div class="ant-carousel-hider">
                        <ul class="ant-carousel-list">
                            <li class="ant-carousel-element"><img class="img-1" src="/img/sss.png" alt="0" width="90px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-2" src="/img/nout.png" alt="1" width="230px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-3" src="/img/stt.png" alt="2" width="150px">
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
                    <p>Баннер - 600р м/кв<br>
                        пленка - 600р м/кв</p>
                </div>
                <div class="calc-but">
                    <button onclick="calc_sh()" >рассчитать</button>
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
                                <option data-value="" value="500">БАННЕР</option>
                                <option data-value="" value="500">САМОКЛЕЮЩАЯСЯ ПЛЕНКА</option>
                            </select>
                        </div>
                    </div>
                    <div class="additional-form">
                        <div class="luvers-form">
                            <label for="luvers">Кол-во люверсов</label>
                            <input type="number" name="" id="luvers" placeholder="от 1шт">
                        </div>
                        <div>
                            <div class="prokleika-form">
                                <span data-toggle="tooltip" data-placement="top">Проклейка периметра</span>
                                <input type="checkbox" id="prokleika" name="prokleika" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calc-price">
                    <span>итог:</span> <span id="result"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="info-fon">

        <div class="info-text container">
            <p>Широкоформатная печать идеально подходит для вывешивания больших рекламных баннеров, наружной установки визиток, календарей, плакатов и т.д. Ее уникальность в том, что она позволяет создавать графические материалы с высокой резкостью и яркостью, что повышает визуальный импакт и привлекает внимание потенциальных клиентов.</p>
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
