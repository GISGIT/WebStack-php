<?php
namespace app\mobile\controller;

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
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->search($q);
        $WebsiteLogic=new WebsiteLogic();
        $getList=$WebsiteLogic->search($q,'misshow',true);
        $this->assign('seo',$seo);
        $this->assign('getList',$getList);
        return view();
    }
    public function kuaixun()
    {
        $q=input('q');
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->kuaixun_search($q);
        $KuaixunLogic=new KuaixunLogic();
        $getList=$KuaixunLogic->search($q,true);
        $this->assign('seo',$seo);
        $this->assign('getList',$getList);
        return view('kuaixun/index');
    }
    public function news()
    {
        $q=input('q');
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->news_search($q);
        $NewsLogic=new NewsLogic();
        $getList=$NewsLogic->search($q,true);
        $this->assign('seo',$seo);
        $this->assign('getList',$getList);
        return view('news/index');
    }

}
