<?php
$this->registerCssFile("@web/css/tablichki.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблички</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
</head>
<body>
<div class="menu-fon">
    <div class="main-fon container">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Таблички</p>
            </div>
            <img src="/img/tablichka.png" alt="" width="460px">
        </div>
    </div>

    <div class="about container">
        <div class="about-work">
            <div class="work">
                <div class="ant-carousel">
                    <div class="ant-carousel-hider">
                        <ul class="ant-carousel-list">
                            <li class="ant-carousel-element"><img class="img-1" src="/img/табличка-торт.png" alt="0" width="170px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-2" src="/img/таблички.png" alt="1" width="170px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-3" src="/img/хангер.png" alt="2" width="170px">
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
            <form action="/site/mail11" method="post">
                <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>"/>
                <input type="hidden" name="price" id="price-input" value=""/>
                <div class="calc-but">
<!--                    <button>рассчитать</button>-->
                    <div class="popup-form">
                        <div >
                            <button id="openPopup">расчёт</button>
                            <div id="popupForm" class="popup">
                                <img src="/img/Vector.png" id="closePopup">
                                <div action="#" method="post">
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
                <div class="forms">
                <div class="form">
                    <div>
                        <div class="form-item">
                            <label for="kolvo">Количество</label>
                            <input type="number" name="kolvo" id="kolvo" placeholder="шт">
                        </div>
                        <div class="form-item">
                            <label for="weight">Ширина</label>
                            <input type="number" name="weight" id="weight" placeholder="мм" value="">
                        </div>
                        <div class="form-item">
                            <label for="height">высота</label>
                            <input type="number" name="height" id="height" placeholder="мм" value="">
                        </div>

                    </div>
                    <div class="additional-form">
                        <div class="form-item">
                            <label for="material">Материал</label>
                            <select id="material" class="material" name="material">
                                <option data-value="" value="600">ПВХ 1</option>
                                <option data-value="" value="1100">ПВХ 2</option>
                                <option data-value="" value="1500">ПВХ 3</option>
                                <option data-value="" value="2000">ПВХ 4</option>
                                <option data-value="" value="2400">ПВХ 5</option>
                                <option data-value="" value="2900">ПВХ 6</option>
                                <option data-value="" value="4100">ПВХ 8</option>
                                <option data-value="" value="5000">ПВХ 10</option>
                            </select>
                        </div>
                        <div class="luvers-form">
                            <label for="cvet">цветность</label>
                            <select id="cvet" class="material" name="cvet">
                                <option value="1">односторонние</option>
                                <option value="2">двусторонние</option>
                            </select>
                        </div>
                        <div>
                            <div class="prokleika-form">
                                <input type="checkbox" id="lamina" class="custom-checkbox" name="prokleika">
                                <span data-toggle="tooltip" data-placement="top">Ламинация</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calc-price">
                    <span >итог:</span> <span id="result"></span>
                </div>
            </div>
            </form>
        </div>
    </div>


    <div class="info-fon">
        <div class="info-text container">
            <p>Рекламные таблички помогают узнать потенциальному клиенту о вашей организации, просто проходя мимо офиса. Изготовление рекламных табличек на столбы и двери организаций является наиболее распространенным рекламным способом, ориентированным на большую аудиторию. Обратившись к нам, Вы можете заказать изготовление рекламных табличек, указателей и другие элементы наружной рекламы. Мы даём гарантию, что Ваша работа будет сделана качественно и в срок.</p>
        </div>
    </div>
</div>
</body>
</html>
    <script>
        document.getElementById('kolvo')
            .addEventListener( 'blur',  function(e){
                calc_tabl();
            } , false );
        document.getElementById('weight')
            .addEventListener( 'blur',  function(e){
                calc_tabl();
            } , false );
        document.getElementById('height')
            .addEventListener( 'blur',  function(e){
                calc_tabl();
            } , false );
        document.getElementById('material')
            .addEventListener( 'blur',  function(e){
                calc_tabl();
            } , false );
        document.getElementById('cvet')
            .addEventListener( 'blur',  function(e){
                calc_tabl();
            } , false );
        document.getElementById('lamina')
            .addEventListener('change', function() {
                calc_tabl();
            });
    </script>
<?php
$this->registerJsFile(
    '@web/js/js.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>
<?php
$this->registerJsFile(
    '@web/js/calc.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
$this->registerJsFile(
    '@web/js/form.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>