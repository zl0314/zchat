<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
AppAsset::register($this);
$this->beginPage();
?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>管理后台</title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody()?>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">layui 后台布局</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">商品管理</a></li>
            <li class="layui-nav-item"><a href="">用户</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
<!--                    --><?//=Yii::$app->user->identity->nickname?>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
<?php
      echo          Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->nickname . ')',
                ['class' => 'btn layui-btn']
                )
                . Html::endForm()

                    ?>
            </li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">

                <li class="layui-nav-item">
                    <a  <?=Yii::$app->controller->id?> class="<?php if(Yii::$app->controller->id == 'site'):?>active-menu <?php endif;?>"   href="<?=Url::to('/admin')?>">  控制台</a>
                </li>

                <li class="layui-nav-item">
                    <a class="<?php if(Yii::$app->controller->id == 'menu'):?>active-menu <?php endif;?>"    href="<?=Url::to('/admin/Rbac/menu')?>">  菜单管理</a>
                </li>

                <li class="layui-nav-item">
                    <a class="<?php if(Yii::$app->controller->id == 'setting'):?>active-menu <?php endif;?>"     href="<?=Url::to('/admin/setting');?>"> 系统设置</a>
                </li>


                <li class="layui-nav-item layui-nav-itemed">
                    <a class="<?php if(in_array(Yii::$app->controller->id , ['ma', 'mp','mv','mt'])):?>active-menu <?php endif;?>"  href="javascript:;">素材管理</a>
                    <dl class="layui-nav-child">
                        <dd><a class="<?php if(Yii::$app->request->get('type') == 1):?>active-menu <?php endif;?>" href="<?=Url::to('/admin/ma?type=1');?>">文章素材</a></dd>
                        <dd><a class="<?php if(Yii::$app->request->get('type') == 2):?>active-menu <?php endif;?>" href="<?=Url::to('/admin/ma?type=2');?>">图片素材</a></dd>
                        <dd><a class="<?php if(Yii::$app->request->get('type') == 3):?>active-menu <?php endif;?>" href="<?=Url::to('/admin/ma?type=3');?>">语音素材</a></dd>
                        <dd><a class="<?php if(Yii::$app->request->get('type') == 4):?>active-menu <?php endif;?>" href="<?=Url::to('/admin/ma?type=4');?>">文字素材</a></dd>
                    </dl>
                </li>

                <li class="layui-nav-item">
                    <a  class="<?php if(Yii::$app->controller->id == 'keyword'):?>active-menu <?php endif;?>"    href="<?=Url::to('/admin/keyword');?>"> 关键字管理</a>
                </li>

            </ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            <?php if(Yii::$app->session->getFlash('alert_msg')):?>
            <blockquote class="layui-elem-quote ">
                <?=Yii::$app->session->getFlash('alert_msg')?>
            </blockquote>
            <?php endif;?>
            <?=$content?>
        </div>
    </div>
    <div class="layui-footer">

    </div>
</div>
<?php $this->endBody();?>
</body>

<script>

    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
<?php $this->endPage();?>

