<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2017/6/5
 * Time: 19:46
 */
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class Setting extends ActiveRecord {
    //表名
   public static function tableName(){
        return '{{%setting}}';
   }

   //得到系统设置
   public static function getSetting(){
        //得到设置项
       $setting = self::findOne(1);
       $setting = unserialize($setting['setting']);
       $setting['id'] = 1;
       return $setting;
   }

}