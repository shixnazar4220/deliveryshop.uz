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

    <div class="row">
        <div class="col-md-4">
            <div class="form-group field-category-parent_id has-success">
                <label class="control-label" for="category-parent_id">Родительская категория</label>
                <select id="category-parent_id" class="form-control" name="Category[parent_id]">
                    <option value="0">Bosh kategoriya</option>
                    <?= \common\components\CategoryWidget::widget(['tpl' => 'select','model'=>$model])?>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <b>Rasm</b>
            <div class="input-group">
                <span class="input-group-btn btn-default" style="background-color: #BBB">
                    <a type="button"  class=" fancybox btn btn-flat" href="<?= Url::to([
                        '/roxymce/default',
                        'type'   => 'image',
                        'input'  => 'selectimage',
                        'dialog' => 'fancybox',
                    ]) ?>" data-fancybox-type="iframe" ><i class="fa fa-image"></i>
                    </a>
                </span>

                <?= $form->field($model, 'image')->textInput(['id'=>'selectimage', 'class'=>'form-control','placeholder'=>'Rasm'])->label('')?>
            </div>
        </div>
    </div>


    <?php
    echo \navatech\roxymce\widgets\RoxyMceWidget::widget([
        'model'     => $model,
        'attribute' => 'description',
    ]);
    ?>



    <?= $form->field($model, 'created_time')->hiddenInput(['value'=>strtotime("now")])->label(false) ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value'=>Yii::$app->user->identity->getId()])->label(false) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $('.fancybox').fancybox();
</script>
