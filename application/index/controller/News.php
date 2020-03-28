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
use app\common\logic\NewsLogic;
use app\common\logic\SeoLogic;

class News extends Base
{
    public function index()
    {
        $sysconfig=sysconfig();
        if(ismobile()){
            $this->redirect('//'.$sysconfig['murl'].'/news');
        }
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->seo('pc_news');
        $NewsLogic=new NewsLogic();
        $getList=$NewsLogic->getList(false);
        $hotList=$NewsLogic->hotList();
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
            $this->redirect('//'.$sysconfig['murl'].'/news/'.$id.'.html');
        }
        $NewsLogic=new NewsLogic();
        $find=$NewsLogic->find($id);
        if(!$find){
            $this->error('资讯不存在');
        }
        $hotList=$NewsLogic->hotList();
        $this->assign('find',$find);
        $this->assign('hotList',$hotList);
        return view();
    }
}