<?php
namespace app\mobile\controller;

use app\common\controller\Base;
use app\common\logic\CategoryLogic;
use app\common\logic\SeoLogic;
use app\common\logic\WebsiteLogic;

class Index extends Base
{
    public function index()
    {
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->seo('m_index');
        $WebsiteLogic=new WebsiteLogic();
        $recList=$WebsiteLogic->recList(6);
        $CategoryLogic=new CategoryLogic();
        $cWrap=$CategoryLogic->cWrap('6');
        $this->assign('seo',$seo);
        $this->assign('recList',$recList);
        $this->assign('cWrap',$cWrap);
        return view();
    }
}
