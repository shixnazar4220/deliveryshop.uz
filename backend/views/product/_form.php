<?php
use navatech\roxymce\assets\BootstrapTreeviewAsset;
use navatech\roxymce\assets\FancyBoxAsset;
use navatech\roxymce\assets\FontAwesomeAsset;
use navatech\roxymce\assets\LazyLoadAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
FontAwesomeAsset::register($this);
LazyLoadAsset::register($this);
FancyBoxAsset::register($this);
BootstrapTreeviewAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
$modelcat = new \common\models\Category();

$amountformat=array(
    'So\'m'=>'So\'m',
    '$'=>'$',
);
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group field-category-parent_id has-success">
                <label class="control-label" for="category-parent_id">Kategoriyani tanlang</label>
                <select id="category-parent_id" class="form-control" name="Product[category_id]">

                    <?= \common\components\CategoryWidget::widget(['tpl' => 'select','model'=>$modelcat])?>
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
                        <a type="button"  class=" fancybox btn btn-flat" href="<?=Url::to([
                            '/roxymce/default',
                            'type'   => 'image',
                            'input'  => 'selectimage',
                            'dialog' => 'fancybox',
                            'multiple'  => true,
                        ]) ?>" data-fancybox-type="iframe" ><i class="fa fa-image"></i>
                        </a>
                    </span>

                <?= $form->field($model, 'images')->textInput(['id'=>'selectimage', 'class'=>'form-control','placeholder'=>'Rasm'])->label('')?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'amount')->textInput() ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'old_amount')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'amount_format')->dropDownList($amountformat,['prompt'=>'Valyutani tanlang']) ?>

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'newproduct')->checkbox(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php
            echo \navatech\roxymce\widgets\RoxyMceWidget::widget([
                'model'     => $model,
                'attribute' => 'description',
            ]);
            ?>
        </div>
    </div>



    <?= $form->field($model, 'user_id')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $('.fancybox').fancybox();
</script>