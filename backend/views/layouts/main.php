<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <div class="row">

            <?php $cname = Yii::$app->controller->id;?>
            <div class="col-md-3">
                <div class="list-group">
                    <a href="<?= \yii\helpers\Url::to(['site/index'])?>" class="list-group-item <?= ($cname=='site')?'active':''?>">Bosh sahifa</a>
                    <a href="<?= \yii\helpers\Url::to(['user/index'])?>" class="list-group-item <?= ($cname=='user')?'active':''?>">Administratorlar</a>
                    <a href="<?= \yii\helpers\Url::to(['menu/index'])?>" class="list-group-item <?= ($cname=='menu')?'active':''?>">Menu</a>
                    <a href="<?= \yii\helpers\Url::to(['category/index'])?>" class="list-group-item <?= ($cname=='category')?'active':''?>">Categoriya</a>
                    <a href="<?= \yii\helpers\Url::to(['product/index'])?>" class="list-group-item <?= ($cname=='product')?'active':''?>">Maxsulotlar</a>
                    <a href="<?= \yii\helpers\Url::to(['cart/index'])?>" class="list-group-item <?= ($cname=='cart')?'active':''?>">Korzina</a>
                </div>
            </div>

            <div class="col-md-9">
                <?= $content ?>
            </div>
        </div>

    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
