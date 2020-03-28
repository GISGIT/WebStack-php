<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/13 $
 */
namespace app\mobile\controller;

use app\common\controller\Base;
use app\common\logic\NewsLogic;
use app\common\logic\SeoLogic;

class News extends Base
{
    public function index()
    {
        $SeoLogic=new SeoLogic();
        $seo=$SeoLogic->seo('m_news');
        $NewsLogic=new NewsLogic();
        $getList=$NewsLogic->getList(true);
        $this->assign('seo',$seo);
        $this->assign('getList',$getList);
        return view();
    }
    public function detail()
    {
        $id=input('id');
        $NewsLogic=new NewsLogic();
        $find=$NewsLogic->find($id);
        if(!$find){
            $this->error('资讯不存在');
        }
        $this->assign('find',$find);
        return view();
    }
}