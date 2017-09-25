<?php
namespace backend\formatter;
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2017/9/25
 * Time: 10:57
 */
class Formatter extends \yii\i18n\Formatter{
    //重写asHtml方法
    public function asHtml($value, $config){
        return $value . 'aa';
    }
}