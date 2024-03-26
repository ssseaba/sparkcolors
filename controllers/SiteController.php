<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGlavnaya()
    {
        return $this->render('glavnaya');
    }
    public function actionInterernaya()
    {
        return $this->render('interernaya');
    }
    public function actionKompleks()
    {
        return $this->render('kompleks');
    }
    public function actionMobileStends()
    {
        return $this->render('mobile-stends');
    }
    public function actionNakleyki()
    {
        return $this->render('nakleyki');
    }
    public function actionPechati()
    {
        return $this->render('pechati');
    }
    public function actionPoligrafiya()
    {
        return $this->render('poligrafiya');
    }
    public function actionShirokoformatnaya()
    {
        return $this->render('shirokoformatnaya');
    }
    public function actionSuvenir()
    {
        return $this->render('suvenir');
    }
    public function actionTablichki()
    {
        return $this->render('tablichki');
    }
    public function actionUslugiDes()
    {
        return $this->render('uslugi-des');
    }
    public function actionViveski()
    {
        return $this->render('viveski');
    }
    public function actionPrivacy()
    {
        return $this->render('privacy');
    }
    public function actionContacts()
    {
        return $this->render('contact');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionMail(){
        $part = Yii::$app->request->post('part');
        $density = Yii::$app->request->post('density');
        $format = Yii::$app->request->post('format');
        $circulation = Yii::$app->request->post('circulation');
        $color = Yii::$app->request->post('color');
        $postprint_drilling = Yii::$app->request->post('postprint_drilling');
        $postprint_skr_corn = Yii::$app->request->post('postprint_skr_corn');
        $postprint_lam_11 = Yii::$app->request->post('postprint_lam_11');
        $postprint_perf = Yii::$app->request->post('postprint_perf');
        $postprint_falc_auto = Yii::$app->request->post('postprint_falc_auto');
        $postprint_big_hand = Yii::$app->request->post('postprint_big_hand');
        $person_name = Yii::$app->request->post('person_name');
        $person_nuumber = Yii::$app->request->post('person_nuumber');
        $price = Yii::$app->request->post('price');
        $html = '<table border="1">';
        $html .= '<tr><td>имя</td><td>'. $person_name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $person_nuumber.'</td>';
        $html .= '<tr><td>тип продукции</td><td>'. $part.'</td>';
        $html .= '<tr><td>Плотность бумаги</td><td>'. $density.'</td>';
        $html .= '<tr><td>Формат продукции</td><td>'. $format.'</td>';
        $html .= '<tr><td>Тираж в шт.</td><td>'. $circulation.'</td>';
        $html .= '<tr><td>Формат печати</td><td>'. $color.'</td>';
        $html .= '<tr><td>Сверление</td><td>'. $postprint_drilling.'</td>';
        $html .= '<tr><td>Скругление углов</td><td>'. $postprint_skr_corn.'</td>';
        $html .= '<tr><td>Двусторонняя ламинация</td><td>'. $postprint_lam_11.'</td>';
        $html .= '<tr><td>Перфорация</td><td>'. $postprint_perf.'</td>';
        $html .= '<tr><td>Автоматическая фальцовка</td><td>'. $postprint_falc_auto.'</td>';
        $html .= '<tr><td>Биговка</td><td>'. $postprint_big_hand.'</td>';
        $html .= '<tr><td>Цена</td><td>'. $price.'</td>';
        $html .= '</table>';
        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem'])
            ->setTo('info@ultracolors.ru')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();

    }

    public function actionMail2(){
        $weight = Yii::$app->request->post('weight');
        $height = Yii::$app->request->post('height');
        $kolvo = Yii::$app->request->post('kolvo');
        $material = Yii::$app->request->post('material');
        $prokleika = Yii::$app->request->post('prokleika');
        $name = Yii::$app->request->post('name');
        $number = Yii::$app->request->post('number');
        $file = Yii::$app->request->post('file');
        $price = Yii::$app->request->post('price');
        $html = '<table border="1">';
        $html .= '<tr><td>ширина</td><td>'. $weight.'</td>';
        $html .= '<tr><td>высота</td><td>'. $height.'</td>';
        $html .= '<tr><td>количество</td><td>'. $kolvo.'</td>';
        $html .= '<tr><td>материал</td><td>'. $material.'</td>';
        $html .= '<tr><td>обрезка</td><td>'. $prokleika.'</td>';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>файл</td><td>'. $file.'</td>';
        $html .= '<tr><td>цена</td><td>'. $price.'</td>';
        $html .= '</table>';
        $mail = Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem'])
            ->setTo('sabdullaevaa545@gmail.com')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html);


            foreach ($_FILES as $file) {
                if (!$file["tmp_name"]) continue;
                $content_file = file_get_contents($file["tmp_name"]);

                $mail->attachContent($content_file, [
                    'fileName' => $file["name"],
                    'contentType' => $file["type"]]);
            }

        $mail->send();
        return $this->redirect(['site/nakleyki']);
    }


    public function actionMail3(){
        $name = Yii::$app->request->get('name');
        $number = Yii::$app->request->get('number');
        $email = Yii::$app->request->get('email');
        $html = '<table border="1">';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>email</td><td>'. $email.'</td>';
        $html .= '</table>';
        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem/вывески'])
            ->setTo('info@ultracolors.ru')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();
        return $this->redirect(['site/viveski']);
    }
    public function actionMail4(){
        $name = Yii::$app->request->get('name');
        $number = Yii::$app->request->get('number');
        $email = Yii::$app->request->get('email');
        $html = '<table border="1">';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>email</td><td>'. $email.'</td>';
        $html .= '</table>';
        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem/печати и штапмы'])
            ->setTo('info@ultracolors.ru')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();
        return $this->redirect(['site/pechati']);
    }
    public function actionMail5(){
        $name = Yii::$app->request->get('name');
        $number = Yii::$app->request->get('number');
        $email = Yii::$app->request->get('email');
        $html = '<table border="1">';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>email</td><td>'. $email.'</td>';
        $html .= '</table>';
        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem/услуги дизайна'])
            ->setTo('info@ultracolors.ru')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();
        return $this->redirect(['site/uslugi-des']);
    }
    public function actionMail6(){
        $name = Yii::$app->request->get('name');
        $number = Yii::$app->request->get('number');
        $email = Yii::$app->request->get('email');
        $html = '<table border="1">';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>email</td><td>'. $email.'</td>';
        $html .= '</table>';
        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem/мобильные стенды и конструкции'])
            ->setTo('info@ultracolors.ru')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();
        return $this->redirect(['site/mobile-stends']);
    }
    public function actionMail7(){
        $name = Yii::$app->request->get('name');
        $number = Yii::$app->request->get('number');
        $email = Yii::$app->request->get('email');
        $html = '<table border="1">';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>email</td><td>'. $email.'</td>';
        $html .= '</table>';
        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem/сувенирная продукция'])
            ->setTo('sabdullaevaa545@gmail.com')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();
        return $this->redirect(['site/suvenir']);
    }
    public function actionMail8(){
        $name = Yii::$app->request->get('name');
        $number = Yii::$app->request->get('number');
        $email = Yii::$app->request->get('email');
        $html = '<table border="1">';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>email</td><td>'. $email.'</td>';
        $html .= '</table>';
        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem/комплексное рекламное обслуживание'])
            ->setTo('info@ultracolors.ru')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();
        return $this->redirect(['site/kompleks']);
    }

    public function actionMail9(){
        $kolvo = yii::$app->request->get('kolvo');
        $weight = Yii::$app->request->get('weight');
        $height = Yii::$app->request->get('height');
        $material = Yii::$app->request->get('material');
        $luvers = Yii::$app->request->get('luvers');
        $prokleika = Yii::$app->request->get('prokleika');
        $obrez = Yii::$app->request->get('obrez');
        $name = Yii::$app->request->get('name');
        $number = Yii::$app->request->get('number');
        $email = Yii::$app->request->get('email');
        $result = Yii::$app->request->get('result');
        $html = '<table border="1">';
        $html .= '<tr><td>количество</td><td>'. $kolvo.'</td>';
        $html .= '<tr><td>ширина</td><td>'. $weight.'</td>';
        $html .= '<tr><td>высота</td><td>'. $height.'</td>';
        $html .= '<tr><td>материал</td><td>'. $material.'</td>';
        $html .= '<tr><td>люверсы</td><td>'. $luvers.'</td>';
        $html .= '<tr><td>проклейка</td><td>'. $prokleika.'</td>';
        $html .= '<tr><td>обрезка</td><td>'. $obrez.'</td>';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>email</td><td>'. $email.'</td>';
        $html .= '<tr><td>цена</td><td>'. $result.'</td>';
        $html .= '</table>';
        if ($prokleika -> checked) {
            $to = 'info@ultracolors.ru';
            $subject = 'Данные о проклейке периметра';
            $message = 'Проклейка периметра была выбрана в форме.';
            mail($to, $subject, $message);
        }
        if ($obrez -> checked) {
            $to = 'info@ultracolors.ru';
            $subject = 'Данные о обрезе';
            $message = 'Обрез был выбран в форме.';
            mail($to, $subject, $message);
        }

        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem'])
            ->setTo('info@ultracolors.ru')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();
        return $this->redirect(['site/interernaya']);
    }
    public function actionMail10(){
        $kolvo = yii::$app->request->get('kolvo');
        $weight = Yii::$app->request->get('weight');
        $height = Yii::$app->request->get('height');
        $material = Yii::$app->request->get('material');
        $luvers = Yii::$app->request->get('luvers');
        $prokleika = Yii::$app->request->get('prokleika');
        $name = Yii::$app->request->get('name');
        $number = Yii::$app->request->get('number');
        $email = Yii::$app->request->get('email');
        $result = Yii::$app->request->get('result');
        $html = '<table border="1">';
        $html .= '<tr><td>количество</td><td>'. $kolvo.'</td>';
        $html .= '<tr><td>ширина</td><td>'. $weight.'</td>';
        $html .= '<tr><td>высота</td><td>'. $height.'</td>';
        $html .= '<tr><td>материал</td><td>'. $material.'</td>';
        $html .= '<tr><td>люверсы</td><td>'. $luvers.'</td>';
        $html .= '<tr><td>проклейка</td><td>'. $prokleika.'</td>';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>email</td><td>'. $email.'</td>';
        $html .= '<tr><td>цена</td><td>'. $result.'</td>';
        $html .= '</table>';
        if ($prokleika -> checked) {
            $to = 'info@ultracolors.ru';
            $subject = 'Данные о проклейке периметра';
            $message = 'Проклейка периметра была выбрана в форме.';
            mail($to, $subject, $message);
        }

        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem'])
            ->setTo('info@ultracolors.ru')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();
        return $this->redirect(['site/shirokoformatnaya']);
    }
    public function actionMail11(){
        $kolvo = yii::$app->request->get('kolvo');
        $weight = Yii::$app->request->get('weight');
        $height = Yii::$app->request->get('height');
        $material = Yii::$app->request->get('material');
        $cvet = Yii::$app->request->get('cvet');
        $prokleika  = Yii::$app->request->get('prokleika');
        $name = Yii::$app->request->get('name');
        $number = Yii::$app->request->get('number');
        $email = Yii::$app->request->get('email');
        $result = Yii::$app->request->get('result');
        $html = '<table border="1">';
        $html .= '<tr><td>количество</td><td>'. $kolvo.'</td>';
        $html .= '<tr><td>ширина</td><td>'. $weight.'</td>';
        $html .= '<tr><td>высота</td><td>'. $height.'</td>';
        $html .= '<tr><td>материал</td><td>'. $material.'</td>';
        $html .= '<tr><td>цветность</td><td>'. $cvet.'</td>';
        $html .= '<tr><td>ламинация</td><td>'. $prokleika.'</td>';
        $html .= '<tr><td>имя</td><td>'. $name.'</td>';
        $html .= '<tr><td>телефон</td><td>'. $number.'</td>';
        $html .= '<tr><td>email</td><td>'. $email.'</td>';
        $html .= '<tr><td>цена</td><td>'. $result.'</td>';
        $html .= '</table>';
        if ($prokleika -> checked) {
            $to = 'info@ultracolors.ru';
            $subject = 'Данные о проклейке периметра';
            $message = 'Проклейка периметра была выбрана в форме.';
            mail($to, $subject, $message);
        }


        Yii::$app->mailer->compose()
            ->setFrom(['dev@ateplykh.ru' => 'Новая заявка с сайта pestsystem/таблички'])
            ->setTo('info@ultracolors.ru')
            ->setSubject("Новая заявка с сайта")
            ->setHtmlBody($html)
            ->send();
        return $this->redirect(['site/tablichki']);
    }

}
