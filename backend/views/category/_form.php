<?php
use navatech\roxymce\assets\BootstrapTreeviewAsset;
use navatech\roxymce\assets\FancyBoxAsset;
use navatech\roxymce\assets\FontAwesomeAsset;
use navatech\roxymce\assets\LazyLoadAsset;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

FontAwesomeAsset::register($this);
LazyLoadAsset::register($this);
FancyBoxAsset::register($this);
BootstrapTreeviewAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>


    <input type="text" id="fieldID">

    <a class="fancybox" data-fancybox-type="iframe" href="<?= Url::to([
        '/roxymce/default',
        'type'   => 'image',
        'input'  => 'fieldID',
        'dialog' => 'fancybox',
    ]) ?>">Click to show Roxy Filemanager</a>


    <?php
    echo \navatech\roxymce\widgets\RoxyMceWidget::widget([
        'name' => 'Category[description]'
    ]);
    ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $('.fancybox').fancybox();
</script>
