<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%material}}".
 *
 * @property string $id
 * @property string $type
 * @property string $pic
 * @property string $intro
 * @property integer $admin_id
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%material}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pic', 'intro', 'admin_id', 'title', 'type'], 'required'],
            [['pic', 'intro', 'admin_id', 'title', 'type'], 'trim'],
            [['admin_id'], 'integer'],
            [['type','title', 'pic', 'intro'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => '素材类型',
            'title' => '素材标题',
            'pic' => '封面图片',
            'intro' => '介绍',
        ];
    }

    //获取素材类型
    public static function getTypes()
    {
        return [
            1 => '单图文',
            2 => '多图文',
            3 => '图片',
            4 => '语音'
        ];
        
    }
}
