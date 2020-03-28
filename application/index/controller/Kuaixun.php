<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/13 $
 */
namespace app\index\controller;

use app\common\controller\Base;
use app\common\logic\KuaixunLogic;
use app\common\logic\SeoLogic;

class Kuaixun extends Base
{
    public function index()
    {
        $sysconfig=sysconfig();
        if(ismobile()){
            $this->redirect('//'.$sysconfig['murl'].'/kuaixun');
        }
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->seo('pc_kuaixun');
        $Kuaixun= new KuaixunLogic();
        $getList=$Kuaixun->getList(false);
        $hotList=$Kuaixun->hotList(10);
        $this->assign('seo',$seo);
        $this->assign('getList',$getList);
        $this->assign('hotList',$hotList);
        return view();
    }
    public function detail()
    {
        $id=input('id');
        $sysconfig=sysconfig();
        if(ismobile()){
            $this->redirect('//'.$sysconfig['murl'].'/kuaixun/'.$id.'.html');
        }
        $Kuaixun= new KuaixunLogic();
        $find=$Kuaixun->find($id);
        $hotList=$Kuaixun->hotList(10);
        if(!$find){
            $this->error('快讯不存在');
        }
        $this->assign('find',$find);
        $this->assign('hotList',$hotList);
        return view();
    }
}