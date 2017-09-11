<?php
namespace backend\assets;
use yii\web\AssetBundle;


/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2017/9/11
 * Time: 17:39
 * 登录页面资源加载
 */


class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}