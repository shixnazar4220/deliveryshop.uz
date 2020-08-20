<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'category_id',
            'description:ntext',
            'images:ntext',
            //'created_time:datetime',
            //'hits',
            //'amount',
            //'amount_format',
            //'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
