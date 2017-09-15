<?php

namespace backend\modules\models;

use Yii;

/**
 * This is the model class for table "{{%menu}}".
 *
 * @property string $menu_id
 * @property string $menu_name
 * @property integer $menu_parent
 * @property string $create_at
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()  {
        return '{{%menu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['menu_name', 'create_at','menu_controller', 'menu_action'], 'required'],
            [['menu_parent'], 'integer'],
            [['create_at'], 'safe'],
            [['menu_name','menu_controller','menu_action'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()  {
        return [
            'menu_id' => 'ID',
            'menu_name' => '菜单名称',
            'menu_controller' => '控制器',
            'menu_action' => '动作',
            'menu_parent' => '父级菜单',
            'create_at' => '创建时间',
        ];
    }

    //得到所有一级菜单
    public static function getTopMenu($where = [])
    {
        $menus = self::find($where)->orderBy('menu_id asc')->select('menu_id,menu_name')->all();
        $menu_lists = ['0' => '无'];
        if(!empty($menus)){
            foreach ($menus as $k => $r){
                $menu_lists[$r['menu_id']] = $r->menu_name;
            }
        }
        return $menu_lists;
    }

    //得到父给菜单名称
    public static function getParentMenuName($id){
        $parent = self::findOne($id);
        return $parent;
    }

    //得到所有菜单的级别关系
    public static function getMenuTree(){
        $menus = self::find()->orderBy('menu_id asc')->asArray()->all();
        $results = [];
        foreach($menus as $k => $r){
            if($r['menu_parent']){
                $results[$r['menu_parent']]['submenu'] = self::getSubMenu($menus, $r['menu_parent']);
            }else{
                $results[$r['menu_id']] = $r;
            }
        }
        return $results;
    }

    //得到子菜单
    private static function getSubMenu($menus, $parent){
        $subMenus = [];
        foreach($menus as $k => $menu){
            if(!$menu['menu_parent']){
                continue;
            }
            echo $parent;
            if($menu['menu_parent'] == $parent){
                $subMenus[] = $menu;
            }
        }
        return $subMenus;
    }
}
