<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset')                            ;
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="fon">

        <?php if ((Yii::$app->controller->id == 'site') and (Yii::$app->controller->action->id !== 'index')): ?>

            <header>
                <div class="head">
                    <ul class="menu container">
                        <a href="/site/viveski"><li>Вывески</li></a>
                        <a href="/site/interernaya"><li>Интерьерная печать</li></a>
                        <a href="/site/shirokoformatnaya"><li>Широкоформатная печать</li></a>
                        <a href="/site/poligrafiya"><li>Полиграфия</li></a>
                        <a href="/site/tablichki"><li>Таблички</li></a>
                        <a  href="/site/nakleyki"><li>Наклейки</li></a>
                        <a href="/site/pechati"><li>Печати и штампы</li></a>
                        <a href="/site/uslugi-des"><li>Услуги дизайна</li></a>
                        <div class="dropdown">
                            <a onclick="myFunction()" class="dropbtn">ещё</a><img class="btn-img" src="/img/arrow.png" alt="">
                            <div id="myDropdown" class="dropdown-content">
                                <a href="/site/mobile-stends">Мобильные стенды и конструкции</a>
                                <a href="/site/suvenir">Сувенирная продукция</a>
                                <a href="/site/kompleks">Комплексное рекламное обслуживание</a>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="header container">
                    <div class="head-2 container">
                        <a href="/site/index">
                            <img src="/img/Logo.png" alt="">
                        </a>
                        <ul class="head-info">
                            <li>info@ultracolors.ru</li>
                            <li>+7 (963) 770-20-77</li>
                        </ul>
                        <div class="menu-2">
                            <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                            <label for="burger-checkbox" class="burger"></label>
                            <ul class="menu-list">
                                <a class="menu-item" href="/site/viveski"><li>Вывески</li></a>
                                <a class="menu-item" href="/site/interernaya"><li>Интерьерная печать</li></a>
                                <a  class="menu-item" href="/site/shirokoformatnaya"><li>Широкоформатная печать</li></a>
                                <a class="menu-item" href="/site/poligrafiya"><li>Полиграфия</li></a>
                                <a class="menu-item" href="/site/tablichki"><li>Таблички</li></a>
                                <a class="menu-item" href="/site/nakleyki"><li>Наклейки</li></a>
                                <a class="menu-item" href="/site/pechati"><li>Печати и штампы</li></a>
                                <a  class="menu-item" href="/site/uslugi-des"><li>Услуги дизайна</li></a>
                                <a class="menu-item" href="/site/mobile-stends">Мобильные стенды и конструкции</a>
                                <a class="menu-item" href="/site/suvenir">Сувенирная продукция</a>
                                <a class="menu-item" href="/site/kompleks">Комплексное рекламное обслуживание</a>
                            </ul>
                        </div>
                    </div>

                </div>
            </header>
        <?php else: ?>
            <header>
                <div class="header container">
                    <div class="head container">
                        <a href="/site/index">
                            <img src="/img/Logo.png" alt="">
                        </a>
                        <ul class="head-info">
                            <li>info@ultracolors.ru</li>
                            <li>+7 (963) 770-20-77</li>
                        </ul>
                    </div>
                </div>
            </header>
        <?php endif; ?>


        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>

        <footer class="footer-fon container">
            <div class="footer container">
                <div class="footer-about">
                    <img src="/img/Logo2.png" alt="" width="55px" height="61px">
                    <p>Мы принесем вам успех!</p>
                </div>
                <div class="inf-soc">
                    <div class="footer-info">
                        <p class="p-3">контакты:</p>
                        <p class="p-4">info@ultracolors.ru <br>
                            +7 (963) 770-20-77</p>
                    </div>
                    <div class="social">
                        <p>наши соцсети:</p>
                        <div>
                            <a href="https://vk.com/spark_colors"><img class="img-4" src="/img/vk.png" alt="" width="33px"></a>
                            <a href="https://api.whatsapp.com/send/?phone=79637702077&text&type=phone_number&app_absent=0"><img class="img-5" src="/img/whats.png" alt="" width="23px"></a>
                            <a href="https://t.me/thever3/"><img class="img-6" src="/img/tg.png" alt="" width="23px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
