<?php
$this->registerCssFile("@web/css/nakleyki.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наклейки</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
</head>
<body>
<div class="menu-fon">
    <div class="main-fon">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Наклейки</p>
            </div>
            <img src="/img/sticker.png" alt="" width="400px">
        </div>
    </div>

    <div class="about container">
        <div class="about-work">
            <div class="work">
                <div class="ant-carousel">
                    <div class="ant-carousel-hider">
                        <ul class="ant-carousel-list">
                            <li class="ant-carousel-element"><img class="img-1" src="/img/car.png" alt="0" width="200px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-2" src="/img/dver.png" alt="1" width="70px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-3" src="/img/nout.png" alt="2" width="170px">
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
            <div class="forms">
                <form class="form" enctype="multipart/form-data" method="post"  action="/site/mail2">
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>"/>
                    <input type="hidden" name="price" id="price-input" value=""/>
                    <div class="two-b">
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
                            <label for="nakleyka">Печать</label>
                            <select id="nakleyka" name="material">
                                <option data-value="" value="1300">наклейка</option>
                            </select>
                        </div>
                        <div class="pec-form"style="margin-top: 30px ">
                            <input type="checkbox" id="obrezka" name="prokleika" value="no" checked>
                            <span id="obrezka-s" data-toggle="tooltip" data-placement="top">обрезка</span>
                        </div>

                        <div class="calc-price">
                            <span id="price" >итог:</span> <span id="result"></span>
                        </div>
                    </div>
                    <div id="additional-form">
                        <div class="kontur-form">
                            <span data-toggle="tooltip" id="rezka" data-placement="top">контурная резка</span>
                            <input type="checkbox" onclick="showField()" id="kontur" name="prokleika" value=""/>
                            <div id="form" style="display: none;">
                                <div class="form-item">
                                    <label for="name">Ваше имя</label>
                                    <input type="text" name="name" id="name" placeholder="" value="">
                                </div>
                                <div class="form-item">
                                    <label for="phone">Ваш номер</label>
                                    <input type="number" name="number" id="phone" placeholder="" value="">
                                </div>
                                <div class="file-form">
                                    <p>файл</p>
                                    <label class="input-file">
                                        <input type="file" id="file" name="file">
                                        <span>Выберите файл</span>
                                    </label>
                                </div>
                                <div class="select_wrapper">
                                    <input type="submit" value="Оcтавить заявку">
                                </div>
                                <p class="call">менеджер свяжется с вами в ближайшее время</p>
                            </div>
                        </div>
                    </div>
                </form>
<!--                <div class="calc-but">-->
<!--                   <button>рассчитать</button>-->
<!--                    <div class="popup-form">-->
<!--                        <div >-->
<!--                            <button id="openPopup">расчёт</button>-->
<!--                            <div id="popupForm" class="popup">-->
<!--                                <img src="/img/Vector.png" id="closePopup">-->
<!--                                <form action="#" method="post">-->
<!--                                    <label for="name">Имя</label>-->
<!--                                    <input type="text" id="name" name="name" required>-->
<!--                                    <label for="number">Телефон</label>-->
<!--                                    <input type="number" id="number" name="number" required>-->
<!--                                    <label for="email">Email</label>-->
<!--                                    <input type="email" id="email" name="email" required>-->
<!--                                    <button id="otpr" type="submit">Отправить</button>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <div>
    </div>
    <div class="info-fon">
        <div class="info-text container">
            <p>Наклейки – это великолепный способ выделиться и привлечь внимание к своему продукту, бренду или услуге. Они могут быть использованы во всех областях жизни – от автомобильных наклеек до наклеек на упаковку продуктов. Мы предлагаем вам качественные и уникальные наклейки, которые гарантируют выделить ваш продукт среди других.</p>
        </div>
    </div>
</div>
</body>
</html>
    <script>
        document.getElementById('kolvo')
            .addEventListener( 'blur',  function(e){
                calc_nakl();
            } , false );
        document.getElementById('weight')
            .addEventListener( 'blur',  function(e){
                calc_nakl();
            } , false );
        document.getElementById('height')
            .addEventListener( 'blur',  function(e){
                calc_nakl();
            } , false );
        document.getElementById('nakleyka')
            .addEventListener( 'blur',  function(e){
                calc_nakl();
            } , false );
        document.getElementById('obrezka')
            .addEventListener('change', function() {
                calc_nakl();
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