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
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">管理后台</a>
        </div>
        <div >

<?php
echo  Html::beginForm(['site/logout'], 'post', ['class' => 'logoutForm']);
echo  Html::submitButton(
        'Logout (' . Yii::$app->user->identity->nickname . ')',
        ['class' => 'btn btn-link logout']
    );
echo  Html::endForm();
?>

        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="/admin/images/find_user.png" class="user-image img-responsive"/>
                </li>


                <li>
                    <a class="active-menu"  href="<?=Url::to('/admin')?>"><i class="fa fa-dashboard fa-3x"></i> 控制台</a>
                </li>

                <li>
                    <a href="<?=Url::to('/admin/Rbac/menu')?>"><i class="fa fa-dashboard fa-3x"></i> 菜单管理</a>
                </li>

                <li>
                    <a   href="<?=Url::to('/admin/setting');?>"><i class="fa fa-desktop fa-3x"></i>系统设置</a>
                </li>
<!--
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>
                -->

            </ul>

        </div>
    </nav>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <?=$content?>
        </div>
    </div>
</div>
<?php $this->endBody();?>

</body>

<?php $this->endPage();?>