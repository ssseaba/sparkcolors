<?php
    $this->registerCssFile("@web/css/viveski.css", [
]);
?>
    <div class="main-fon container">
        <div class="title container">
            <div class="title-info">
                <p class="p-1">Вывески</p>
                <p class="p-2">от 1300р</p>
                    <div class="popup-form">
                        <div >
                            <button id="openPopup">Написать нам</button>
                            <div id="popupForm" class="popup">
                                <img src="/img/Vector.png" id="closePopup">
                                <form action="/site/mail3">
                                    <label for="name">Имя</label>
                                    <input type="text" id="name" name="name">
                                    <label for="number">Телефон</label>
                                    <input type="number" id="number" name="number">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email">
                                    <button id="otpr" type="submit">Отправить</button>
                                </form>
                            </div>
                        </div>
                        <p class="p2-1">*Для получения стоимости необходимо связаться с нами любым удобным для вас способом*</p>
                    </div>
                </div>
            <img class="v-img"  src="/img/sticker.png" alt="" width="400px">
        </div>

    </div>
    <div class="work container">
        <p>примеры работ:</p>
        <div class="ant-carousel">
            <div class="ant-carousel-hider">
                <ul class="ant-carousel-list">
                    <li class="ant-carousel-element"><img class="img-1" src="/img/aa.png" alt="0" width="200px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-2" src="/img/zz.png" alt="1" width="170px">
                    </li>
                    <li class="ant-carousel-element"><img class="img-3" src="/img/vv.png" alt="2" width="200px">
                    </li>
                    <li class="ant-carousel-element"><img src="" alt="">
                </ul>
            </div>
            <div class="ant-carousel-arrow-left"></div>
            <div class="ant-carousel-arrow-right"></div>
            <div class="ant-carousel-dots"></div>
        </div>
    </div>
    <div class="info-fon">
        <div class="info-text container">
            <p>Наклейки – это великолепный способ выделиться и привлечь внимание к своему продукту, бренду или услуге. Они могут быть использованы во всех областях жизни – от автомобильных наклеек до наклеек на упаковку продуктов. Мы предлагаем вам качественные и уникальные наклейки, которые гарантируют выделить ваш продукт среди других.</p>
        </div>
    </div>
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