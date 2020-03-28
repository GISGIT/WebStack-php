<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/13 $
 */
namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    public function initialize()
    {
        if(session('adminid')==''){
            $this->error('请先登陆','/admin/login');
        }
        $this->config();
    }
    public function config(){
        $sysconfig=db('sysconfig')->select();
        foreach ($sysconfig as $k => $v){
            $sys[$v['varname']]=$v['value'];
        }
        $this->assign('sys',$sys);
    }
}