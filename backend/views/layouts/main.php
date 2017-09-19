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
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
<!--                <li class="layui-nav-item layui-nav-itemed">-->
<!--                    <a class="" href="javascript:;">所有商品</a>-->
<!--                    <dl class="layui-nav-child">-->
<!--                        <dd><a href="javascript:;">列表一</a></dd>-->
<!--                        <dd><a href="javascript:;">列表二</a></dd>-->
<!--                        <dd><a href="javascript:;">列表三</a></dd>-->
<!--                        <dd><a href="">超链接</a></dd>-->
<!--                    </dl>-->
<!--                </li>-->
<!--                <li class="layui-nav-item">-->
<!--                    <a href="javascript:;">解决方案</a>-->
<!--                    <dl class="layui-nav-child">-->
<!--                        <dd><a href="javascript:;">列表一</a></dd>-->
<!--                        <dd><a href="javascript:;">列表二</a></dd>-->
<!--                        <dd><a href="">超链接</a></dd>-->
<!--                    </dl>-->
<!--                </li>-->
                <li class="layui-nav-item">
                    <a class="<?php if(Yii::$app->controller->id == 'site'):?>active-menu <?php endif;?>"   href="<?=Url::to('/admin')?>">  控制台</a>
                </li>

                <li class="layui-nav-item">
                    <a class="<?php if(Yii::$app->controller->id == 'menu'):?>active-menu <?php endif;?>"    href="<?=Url::to('/admin/Rbac/menu')?>">  菜单管理</a>
                </li>

                <li class="layui-nav-item">
                    <a class="<?php if(Yii::$app->controller->id == 'setting'):?>active-menu <?php endif;?>"     href="<?=Url::to('/admin/setting');?>"> 系统设置</a>
                </li>

                <li class="layui-nav-item">
                    <a  class="<?php if(Yii::$app->controller->id == 'material'):?>active-menu <?php endif;?>"    href="<?=Url::to('/admin/material');?>"> 素材管理</a>
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
<?php $this->endPage();?>

<script>
    layui.use('form', function(){var form = layui.form;});
</script>
