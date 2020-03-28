<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/13 $
 */
namespace app\admin\controller;

use app\admin\controller\Base;

class Index extends Base {
    public function index()
    {
        return view();
    }
    public function welcome(){
        $websitecount=db('website')->count();
        $catecount=db('category')->count();
        $kuaixuncount=db('kuaixun')->count();
        $newscount=db('news')->count();
        $contactcount=db('contact')->count();
        $frcount=db('friendlinks')->count();
        $mysql = db('sysconfig')->query("select VERSION() as mysql");
        $data=[
            'websitecount'=>$websitecount,
            'catecount'=>$catecount,
            'kuaixuncount'=>$kuaixuncount,
            'newscount'=>$newscount,
            'contactcount'=>$contactcount,
            'frcount'=>$frcount,
        ];
        $this->assign('data',$data);
        $this->assign('mysql',$mysql[0]['mysql']);
        return view();
    }
}