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
class MaterialArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zchat_material_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'pic', 'intro', 'content', 'addtime'], 'required'],
            [['material_id'], 'integer'],
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
            'title' => '文章标题',
            'keyword' => '回复关键字',
            'material_id' => '素材类型',
            'pic' => '封面图',
            'intro' => '简短介绍',
            'content' => '文章内容',
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
}
