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

    default:
        $url =\yii\helpers\Url::to(['page/'.$category['slug'], 'language'=>Yii::$app->language]);
        break;

}

$title = $category['title'];
?>
<?php if(isset($category['childs']) && $category['parent_id']!=0){ ?>
    <?php if( isset($category['childs'])){?>
        <li >
        <a style="<?= $style?>" href="<?= $url;?>" > <?= $tab.$title?>  </a>
        <ul >
    <?php } ?>
    <?php if( isset($category['childs']) ) { ?>
        <?= $this->getMenuHtml($category['childs'], $tab, $style='margin-left:'.$mr.'px;')?>
        </ul>
        </li>
    <?php } ?>
<?php }
else if(isset($category['childs']) && $category['parent_id']==0){ ?>
    <?php if( isset($category['childs'])){?>
        <li>
        <a href="<?= $url;?>" style="<?= $style?>" >
            <?= $tab.$title?> </a>
        <ul >
    <?php } ?>
    <?php if( isset($category['childs']) ) { ?>
        <?= $this->getMenuHtml($category['childs'],$tab . '-',$style='margin-left:'.$mr.'px;')?>
        </ul>
        </li>
    <?php } ?>
<?php } ?>
<?php if(!isset($category['childs']) ){?>
    <li>
        <a href="<?= $url;?>" style="<?= $style?>" ><?= $tab.$title?></a>
    </li>
<?php } ?>
