<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/16 $
 */
namespace app\admin\model;

use think\Model;

class Admin extends Model {
    public function login($data){
        $find=db('admin')->where('adminname',$data['adminname'])->find();
        if(!$find){
            return -1;
        }
        if($find['password']==md5(md5($data['password']).$find['salt'])){
            session('adminid',$find['id']);
            session('adminname',$find['adminname']);
            return 1;
        }else{
            return -1;
        }
    }
    public function revise($data){
        $aid=session('adminid');
        $admin=db('admin')->where('id',$aid)->find();
        $password=md5(md5($data['password']).$admin['salt']);
        if($admin){
            if($password == $admin['password']){
                if($data['npassword'] == ''){
                    $revise=db('admin')->where('id',$aid)->update(['adminname'=>$data['adminname']]);
                    if($revise){
                        return 1;
                    }else{
                        return -3;
                    }
                }else{
                    $salt=rand(100000,999999);
                    $npassword=md5(md5($data['npassword']).$salt);
                    $revise=db('admin')->where('id',$aid)->update(['adminname'=>$data['adminname'],'salt'=>$salt,'password'=>$npassword]);
                    if($revise){
                        return 1;
                    }else{
                        return -4;
                    }
                }
            }else{
                return -2;
            }
        }else{
            return -1;
        }
    }
}