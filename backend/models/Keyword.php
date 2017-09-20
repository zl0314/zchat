<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2017/9/19
 * Time: 18:19
 */

namespace backend\models;


use yii\db\ActiveRecord;
use common\models\Material;

class Keyword extends ActiveRecord
{
    public static function tableName(){
        return '{{%keyword}}';
    }

    public function rules(){
        return [
            ['keyword', 'required'],
            ['type', 'in', 'range' =>[Material::MATERIAL_SINGLE,Material::MATERIAL_MORE,Material::MATERIAL_PIC,Material::MATERIAL_VOICE]]
        ];
    }

    public function attributeLabels(){
        return [
            'keyword' => '关键字',
            'type' => '回复类型'
        ];
    }
}