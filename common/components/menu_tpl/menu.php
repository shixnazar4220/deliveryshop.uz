
<?php
$url ="";

switch ($category['menu_type']){
    case 'externalurl':  if($category['url']==""){
        $url ="javascript:void(0);";
    }
    else{
        $url = $category['url'];
    }
        break;

    case 'jismoniy_murojat':
        $url =\yii\helpers\Url::to(['page/jismoniy', 'language'=>Yii::$app->language]);
        break;

    case 'yuridik_murojat':
        $url =\yii\helpers\Url::to(['page/yuridik', 'language'=>Yii::$app->language]);
        break;


    case 'corporate':
        $url =\yii\helpers\Url::to(['page/korxonalar', 'language'=>Yii::$app->language]);
        break;


    case 'calculator':
        $url =\yii\helpers\Url::to(['page/calculator', 'language'=>Yii::$app->language]);
        break;

    case 'poweroff':
        $url =\yii\helpers\Url::to(['page/poweroff', 'language'=>Yii::$app->language]);
        break;

    case 'videos':
        $url =\yii\helpers\Url::to(['page/video', 'language'=>Yii::$app->language]);
        break;

    case 'photos':
        $url =\yii\helpers\Url::to(['page/photo', 'language'=>Yii::$app->language]);
        break;


    default:
        $url =\yii\helpers\Url::to(['page/'.$category['slug'], 'language'=>Yii::$app->language]);
        break;

}

$title = $category['title'];
?>
<li class="<?= (!isset($category['childs'])&&$category['parent_id']==0)?'nosub':''?>">
    <a href="<?= $url ?>" ><?= $title?></a>
    <?php if( isset($category['childs']) ): ?>
        <div class="wrap-popup column1">
            <div class="popup">
                <ul class="nav">
                    <?= $this->getMenuHtml($category['childs'])?>
                </ul>
            </div>
        </div>
    <?php endif;?>
</li>