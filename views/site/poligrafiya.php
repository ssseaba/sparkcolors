<?php
$this->registerCssFile("@web/css/poligrafiya.css", [
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Полиграфия</title>
    <link href="https://fonts.cdnfonts.com/css/furore" rel="stylesheet">
</head>
<body>
<div class="menu-fon">
    <div class="main-fon">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Полиграфия</p>
            </div>
            <img src="/img/pol.png" alt="" width="560px">
        </div>
    </div>
    <div class="about container">
        <div class="about-work">
            <div class="work">
                <div class="ant-carousel">
                    <div class="ant-carousel-hider">
                        <ul class="ant-carousel-list">
                            <li class="ant-carousel-element"><img class="img-1" src="/img/paket.png" alt="0" width="170px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-2" src="/img/str.png" alt="1" width="130px">
                            </li>
                            <li class="ant-carousel-element"><img class="img-3" src="/img/visitka.png" alt="2" width="170px">
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
            <form id="form">
                <section id="apiprint">
                    <div class="selector_wrapper">
                        <div class="select_wrapper">
                            <h3>Тип продукции</h3>
                            <select name="part">
                                <option value="leaflets">Листовки</option>
                                <option value="cards">Визитки</option>
                                <option value="booklets">Буклеты</option>
                            </select>
                        </div>
                        <div class="select_wrapper">
                            <h3>Плотность бумаги</h3>
                            <select name="density">
                                <option value="1">130 гр/м2</option>
                                <option value="2">170 гр/м2</option>
                                <option value="3">Картон</option>
                            </select>
                        </div>
                    </div>
                    <div class="selector_wrapper">
                        <div class="select_wrapper">
                            <h3>Формат продукции</h3>
                            <select name="format">
                                <option value="74-105">A7, 74*105 мм</option>
                                <option value="105-148">A6, 105*148 мм</option>
                                <option value="148-210">A5, 148*210 мм</option>
                                <option value="210-297">A4, 210*297 мм</option>
                                <option value="297-420">A3, 297*420 мм</option>
                                <option value="210-98">210*98 мм</option>
                                <option value="150-70">150*70 мм</option>
                                <option value="100-70">100*70 мм</option>
                            </select>
                        </div>
                        <div class="select_wrapper">
                            <h3>Тираж в шт.</h3>
                            <select name="circulation">
                                <option value="100">100 шт.</option>
                                <option value="200">200 шт.</option>
                                <option value="300">300 шт.</option>
                                <option value="400">400 шт.</option>
                                <option value="500">500 шт.</option>
                                <option value="600">600 шт.</option>
                                <option value="700">700 шт.</option>
                                <option value="800">800 шт.</option>
                                <option value="900">900 шт.</option>
                                <option value="1000">1000 шт.</option>
                                <option value="2000">2000 шт.</option>
                                <option value="3000">3000 шт.</option>
                                <option value="4000">4000 шт.</option>
                                <option value="5000">5000 шт.</option>
                            </select>
                        </div>
                    </div>
                    <div class="selector_wrapper">
                        <div class="select_wrapper">
                            <h3>Формат печати</h3>
                            <select name="color">
                                <option value="4+0">Односторонняя</option>
                                <option value="4+4">Двусторонняя</option>
                            </select>
                        </div>
                        <div class="select_wrapper">
                            <h3>Сверление</h3>
                            <select name="postprint_drilling">
                                <option value="0">Без сверления</option>
                                <option value="1">1 сверление</option>
                                <option value="2">2 сверления</option>
                            </select>
                        </div>
                    </div>
                    <div class="selector_wrapper">
                        <div class="select_wrapper">
                            <h3>Скругление углов</h3>
                            <select name="postprint_skr_corn">
                                <option value="0">Без скругления</option>
                                <option value="1">Со скруглением</option>
                            </select>
                        </div>
                        <div class="select_wrapper">
                            <h3>Двусторонняя ламинация</h3>
                            <select name="postprint_lam_11">
                                <option value="0">Без ламинации</option>
                                <option value="1">С двусторонней ламинацией</option>
                            </select>
                        </div>
                    </div>
                    <div class="selector_wrapper">
                        <div class="select_wrapper">
                            <h3>Перфорация</h3>
                            <select name="postprint_perf">
                                <option value="0">Без перфорации</option>
                                <option value="1">С перфорацией</option>
                            </select>
                        </div>
                        <div class="select_wrapper">
                            <h3>Автоматическая фальцовка</h3>
                            <select name="postprint_falc_auto">
                                <option value="0">Без фальцовки</option>
                                <option value="1">1 фальц</option>
                                <option value="2">2 фальца</option>
                                <option value="3">3 фальца</option>
                                <option value="4">4 фальца</option>
                                <option value="5">5 фальцев</option>
                                <option value="6">6 фальцев</option>
                            </select>
                        </div>
                    </div>
                    <div class="selector_wrapper">
                        <div class="select_wrapper">
                            <h3>Биговка</h3>
                            <select name="postprint_big_hand">
                                <option value="0">Без биговки</option>
                                <option value="1">1 биг</option>
                                <option value="2">2 бига</option>
                                <option value="3">3 бига</option>
                                <option value="4">4 бига</option>
                                <option value="5">5 бигов</option>
                                <option value="6">6 бигов</option>
                            </select>
                        </div>
                    </div>
                    <div class="price_wrapper">
                        <h3 id="price">Итог:.</h3>
                    </div>
                    <div class="zav">
                        <div class="selector_wrapper">
                            <div class="select_wrapper">
                                <h3>Имя</h3>
                                <input id="name" type="text" name="person_name" min="2" max="12" required="">
                            </div>
                            <div class="select_wrapper">
                                <h3>Телефон</h3>
                                <input type="text" id="phone" name="person_nuumber" min="2" max="12" required="">
                            </div>
                        </div>
                    </div>
                    <div class="selector_wrapper">
                        <div class="select_wrapper">
                            <input type="submit" value="Оформить">
                        </div>
                    </div>
                </section>
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
<?php
$this->registerJsFile(
    '@web/js/poilgraf.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>
<?php
$this->registerJsFile(
    '@web/js/js.js',
    ['depends' => [yii\web\JqueryAsset::class]]
);
?>

