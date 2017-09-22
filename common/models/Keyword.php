<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2017/9/19
 * Time: 18:19
 */

namespace common\models;


use yii\db\ActiveRecord;
use common\models\Ma;

class Keyword extends ActiveRecord
{
    public static function tableName(){
        return '{{%keyword}}';
    }

    public function rules(){
        return [
            ['keyword', 'required'],
            ['type', 'in', 'range' =>[Ma::MATERIAL_SINGLE,Ma::MATERIAL_MORE,Ma::MATERIAL_PIC,Ma::MATERIAL_VOICE]]
        ];
    }

    public function attributeLabels(){
        return [
            'keyword' => '关键字',
            'type' => '回复类型'
        ];
    }
}