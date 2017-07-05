<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use phpDocumentor\Reflection\Types\Array_;
use app\common\ExtJs;

class AccountController extends Controller
{
   
    
    public function actionUserinfo()
    {
        return ExtJs::WriteObject(true,null,null,null,array(
            'UserInfo'=> array('UserName'=>'admin', 'Roles'=>'系统管理员'),
            'Menu'=> $this->getMenu()
        ));
    }
    
    private function getMenu(){
        return array(
            0=>array( 'text'=>'文章管理', 'iconCls'=>'x-fa fa-file-text-o', 'rowCls'=>'nav-tree-badge', 'viewType'=>'articleView', 'routeId'=>'articleView', 'leaf'=>'true'),
            1=>array( 'text'=>'媒体管理', 'iconCls'=>'x-fa fa-file-image-o', 'rowCls'=>'nav-tree-badge', 'viewType'=>'mediaView', 'routeId'=>'mediaView', 'leaf'=>'true'),
            2=>array( 'text'=>'用户管理', 'iconCls'=>'x-fa fa-user', 'rowCls'=>'nav-tree-badge', 'viewType'=>'userView', 'routeId'=>'userView', 'leaf'=>'true')
        );
    }
    
}

