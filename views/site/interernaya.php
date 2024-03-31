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
    <link href="https://fonts.cdnfonts.com/css/walmart" rel="stylesheet">
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
                    <p>Баннер<br>
                        пленка <br>
                        бумага<br>
                        перфорированная пленка</p>
                </div>
            </div>
            <form action="/site/mail9" method="post">
                <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>"/>
                <input type="hidden" name="price" id="price-input" value=""/>
            <div class="forms">
                <div class="form">
                    <div>
                        <div class="form-item">
                            <label for="kolvo">Количество</label>
                            <input type="number" onchange="calc_int()" name="kolvo" id="kolvo" placeholder="шт">
                        </div>
                        <div class="form-item">
                            <label for="weight">Ширина</label>
                            <input type="number" onchange="calc_int()" name="weight" id="weight" placeholder="мм" value="">
                        </div>
                        <div class="form-item">
                            <label for="height">высота</label>
                            <input type="number" onchange="calc_int()" name="height" id="height" placeholder="мм" value="">
                        </div>

                        <div class="form-item">
                            <label for="material">Материал</label>
                            <select onchange="calc_int()" id="material" name="material">
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
                            <input onchange="calc_int()" type="number" name="luvers" id="luvers" placeholder="шт">
                        </div>
                        <div>
                            <div class="prokleika-form">
                                <input onchange="calc_int()" type="checkbox" id="prokleika" name="prokleika" >
                                <span data-toggle="tooltip" data-placement="top">Проклейка периметра</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="obrez-form">
                            <input onchange="calc_int()" type="checkbox" id="obrez" name="obrez">
                            <span data-toggle="tooltip" data-placement="top">Обрез</span>
                        </div>
                    </div>
                </div>
                <div class="calc-price">
                    <span id="price">итог:</span> <span id="result"></span>
                </div>
                <div class="calc-but">
<!--                    <button>рассчитать</button>-->
                    <div class="popup-form">
                        <div >
                            <button id="openPopup">расчёт</button>
                            <div id="popupForm" class="popup">
                                <img src="/img/Vector.png" id="closePopup">
                                <div id="form-h">
                                    <div class="inputs">
                                         <label for="name">Имя</label>
                                         <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="inputs">
                                        <label for="number">Телефон</label>
                                        <input type="number" id="number" name="number" required>
                                    </div>
                                    <div class="inputs">
                                         <label for="email">Email</label>
                                         <input type="email" id="email" name="email" required>
                                    </div>
                                    <button id="otpr" type="submit">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
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
<script>
    document.getElementById('weight')
        .addEventListener( 'blur',  function(e){
            calc_int();
        } , false );
    document.getElementById('height')
        .addEventListener( 'blur',  function(e){
            calc_int();
        } , false );
    document.getElementById('kolvo')
        .addEventListener( 'blur',  function(e){
            calc_int();
        } , false );
    document.getElementById('material')
        .addEventListener( 'blur',  function(e){
            calc_int();
        } , false );
    document.getElementById('luvers')
        .addEventListener( 'blur',  function(e){
            calc_int();
        } , false );
    document.getElementById('prokleika')
        .addEventListener('change', function() {
            calc_int();
        });
    document.getElementById('obrez')
        .addEventListener('change', function() {
            calc_int();
        });
    </script>
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
$this->registerJsFile(
    '@web/js/form.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>
