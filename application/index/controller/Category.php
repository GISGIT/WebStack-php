<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 *
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/13 $
 */
namespace app\index\controller;

use app\common\controller\Base;
use app\common\logic\CategoryLogic;
use app\common\logic\WebsiteLogic;

class Category extends Base
{
    public function index()
    {
        $id=input('id');
        $sysconfig=sysconfig();
        if(ismobile()){
            $this->redirect('//'.$sysconfig['murl'].'/category/'.$id.'.html');
        }
        $CategoryLogic=new CategoryLogic();
        $find=$CategoryLogic->find($id);
        if(!$find){
            return $this->error('栏目不存在');
        }
        $topid=$find['id'];
        $WebsiteLogic=new WebsiteLogic();
        $getList=$WebsiteLogic->getList($id,false);
        $this->assign('topid',$topid);
        $this->assign('find',$find);
        $this->assign('getList',$getList);
        return view();
    }
}