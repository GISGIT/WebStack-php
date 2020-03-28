<?php
namespace app\index\controller;

use app\common\controller\Base;
use app\common\logic\KuaixunLogic;
use app\common\logic\NewsLogic;
use app\common\logic\SeoLogic;
use app\common\logic\WebsiteLogic;

class Search extends Base
{
    public function index()
    {
        $q=input('q');
        $sysconfig=sysconfig();
        if(ismobile()){
            $this->redirect('//'.$sysconfig['murl'].'/search?q='.$q);
        }
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->search($q);
        $WebsiteLogic=new WebsiteLogic();
        $getList=$WebsiteLogic->search($q,false);
        $KuaixunLogic=new KuaixunLogic();
        $hotList=$KuaixunLogic->hotList(5);
        $count=$getList->total();
        $this->assign('seo',$seo);
        $this->assign('getList',$getList);
        $this->assign('hotList',$hotList);
        $this->assign('count',$count);
        return view();
    }
    public function kuaixun()
    {
        $q=input('q');
        $sysconfig=sysconfig();
        if(ismobile()){
            $this->redirect('//'.$sysconfig['murl'].'/search/kuaixun?q='.$q);
        }
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->kuaixun_search($q);
        $KuaixunLogic=new KuaixunLogic();
        $getList=$KuaixunLogic->search($q,false);
        $hotList=$KuaixunLogic->hotList(10);
        $this->assign('seo',$seo);
        $this->assign('getList',$getList);
        $this->assign('hotList',$hotList);
        return view('kuaixun/index');
    }
    public function news()
    {
        $q=input('q');
        $sysconfig=sysconfig();
        if(ismobile()){
            $this->redirect($sysconfig['murl'].'/search/news?q='.$q);
        }
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->news_search($q);
        $NewsLogic=new NewsLogic();
        $getList=$NewsLogic->search($q,false);
        $hotList=$NewsLogic->hotList();
        $this->assign('seo',$seo);
        $this->assign('getList',$getList);
        $this->assign('hotList',$hotList);
        return view('news/index');
    }

}
