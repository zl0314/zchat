<?php
namespace backend\assets;
use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/custom.css',
        'layui/css/layui.css'
    ];
    public $js = [
//        'js/datepicker/WdatePicker.js'
        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
