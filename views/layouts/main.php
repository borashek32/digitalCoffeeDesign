<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

    <div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Мои проекты', 'url' => ['/site/projects']],
            ['label' => 'Обо мне', 'url' => ['/site/about']],
            ['label' => 'Блог', 'url' => ['/site/blog']],
            ['label' => 'Отзывы', 'url' => ['/site/review']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
    ?>

            <?= $content ?>

            <div class="alert">
                <?= Alert::widget() ?>
            </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="col-3">
            <div>
                <img src=".././img/logoWhite.png" width="40px">
            </div>
            <p class="pull-left textFooter">&copy; Digital coffee design <?= date('Y') ?></p>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
