<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "zchat_material_article".
 *
 * @property string $id
 * @property string $title
 * @property string $keyword
 * @property integer $material_id
 * @property string $pic
 * @property string $intro
 * @property string $content
 * @property string $addtime
 */
class Ma extends \yii\db\ActiveRecord
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
            [['title', 'addtime'], 'required'],
            [['type'], 'integer'],
            [['type'], 'in', 'range' => [1,2,3,4]],
            [['content'], 'string'],
            [['addtime'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['keyword'], 'string', 'max' => 20],
            [['pic', 'intro'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '素材标题',
            'keyword' => '回复关键字',
            'pic' => '封面图',
            'intro' => '简短介绍',
            'content' => '素材内容',
            'addtime' => '发布时间',
            'status' => '状态'
        ];
    }
    //得到文章的状态
    public static function getArticleStatus(){
        return [
            '1' => '正常',
            '0' => '关闭'
        ];
    }

    //素材类型
    public static function getMaterialType(){
        return [
            1 => '文章素材',
            2 => '图片素材',
            3 => '语音素材',
            4 => '文字素材',
        ];
    }
}
