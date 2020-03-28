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
use Think\Db;
use think\facade\Cache;

class Set extends Base {
    public function sysconfig()
    {
        if(request()->isPost()){
            $murl=input('murl');
            $data=[
                'webname'=>input('webname'),
                'web_sort'=>input('web_sort'),
                'murl'=>$murl,
                'weburl'=>input('weburl'),
                'adminurl'=>input('adminurl'),
                'mbanquan'=>input('mbanquan'),
                'logourl'=>input('logourl'),
                'mlogourl'=>input('mlogourl'),
                'hotkey'=>input('hotkey'),
            ];
            foreach($data as $k => $v){
                db('sysconfig')->where('varname',$k)->update(['value'=>$v]);
            }
            $strConfig = file_get_contents($_SERVER["DOCUMENT_ROOT"]. '/application/route_set.php');
            $strConfig = str_replace('#MURL#', $murl, $strConfig);
            @chmod($_SERVER["DOCUMENT_ROOT"]. '/route/mobile.php',0777);
            @file_put_contents($_SERVER["DOCUMENT_ROOT"]. '/route/mobile.php', $strConfig);
            $this->success('修改成功');
        }
        return view();
    }
    public function admin(){
        if(Request()->isPost()){
            $npassword=input('npassword');
            $rnpassword=input('rnpassword');
            if($npassword != $rnpassword){
                $this->error('确认密码与新密码不符');
                die;
            }
            $data=[
                'adminname'=>input('adminname'),
                'password'=>input('password'),
                'npassword'=>$npassword,
            ];
            $update=model('Admin')->revise($data);
            if($update==1){
                $this->success('修改成功');
            }elseif($update==-1){
                $this->error('该用户不存在');
            }elseif($update==-2){
                $this->error('原始密码错误');
            }elseif($update==-3 || $update==-4){
                $this->error('未修改任何项目');
            }
        }
        $admin=db('admin')->where('id',session('adminid'))->find();
        $this->assign('admin',$admin);
        return view();
    }
    public function sql(){
        if(request()->isPost()){
            Db::execute(input('sql')) or die(mysql_error());
//            $result = Db::execute(input('sql'));
//            if($result==0){
//                $this->success('执行成功');
//            }else{
//                $this->error('执行失败');
//            }
        }
        return view();
    }
    public function cacheclear(){
        if(request()->isPost()){
            Cache::clear();
            $this->success('缓存清除成功');
        }
        return view();
    }
}