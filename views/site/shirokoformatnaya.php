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
                    <p>Баннер<br>
                        пленка</p>
                </div>
            </div>
            <form action="/site/mail10" method="post">
                <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>"/>
                <input type="hidden" name="price" id="price-input" value=""/>

                <div class="calc-but">
                    <div class="popup-form">
                        <div >
                            <button  id="openPopup">расчёт</button>
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
                            <input type="number" name="luvers" id="luvers" placeholder="шт">
                        </div>
                        <div>
                            <div class="prokleika-form">
                                <span data-toggle="tooltip" data-placement="top">Проклейка периметра</span>
                                <input type="checkbox" id="prokleika" name="prokleika">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calc-price">
                    <span>итог:</span> <span id="result"></span>
                </div>
            </div>
            </form>
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
<script>
    document.getElementById('kolvo')
        .addEventListener( 'blur',  function(e){
            calc_sh();
        } , false );
    document.getElementById('weight')
        .addEventListener( 'blur',  function(e){
            calc_sh();
        } , false );
    document.getElementById('height')
        .addEventListener( 'blur',  function(e){
            calc_sh();
        } , false );

    document.getElementById('material')
        .addEventListener( 'blur',  function(e){
            calc_sh();
        } , false );
    document.getElementById('luvers')
        .addEventListener( 'blur',  function(e){
            calc_sh();
        } , false );
    document.getElementById('prokleika')
        .addEventListener('change', function() {
            calc_sh();
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
