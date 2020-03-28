<?php
namespace app\index\controller;

use app\common\controller\Base;
use app\common\logic\CategoryLogic;
use app\common\logic\KuaixunLogic;
use app\common\logic\NewsLogic;
use app\common\logic\SeoLogic;
use app\common\logic\WebsiteLogic;
use think\facade\Cache;

class Index extends Base
{
    public function index()
    {
        $sysconfig=sysconfig();
        if(ismobile()){
            $this->redirect('//'.$sysconfig['murl']);
        }
        $topid='';
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->seo('pc_index');
        $KuaixunLogic=new KuaixunLogic();
        $kxList=$KuaixunLogic->newList();
        $NewsLogic=new NewsLogic();
        $newsList=$NewsLogic->newList();
        $WebsiteLogic=new WebsiteLogic();
        $recList=$WebsiteLogic->recList(12);
        $CategoryLogic=new CategoryLogic();
        $cWrap=$CategoryLogic->cWrap('8');
        $contact=db('contact')->where('isshow','1')->order('order desc,id desc')->limit(2)->cache(true,3600)->select();
        $frList=db('friendlinks')->where('isshow','1')->order('order desc,id desc')->cache(true,3600)->select();
        $this->assign('topid',$topid);
        $this->assign('seo',$seo);
        $this->assign('kxList',$kxList);
        $this->assign('newsList',$newsList);
        $this->assign('contact',$contact);
        $this->assign('recList',$recList);
        $this->assign('cWrap',$cWrap);
        $this->assign('frList',$frList);
        return view();
    }
}
