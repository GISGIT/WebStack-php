<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/15 $
 */
namespace app\admin\controller;

use think\Controller;

class Login extends Controller {
    public function index()
    {
        if(session('adminid') != ''){
            $this->error('您已登陆','/admin');
        }
        if(request()->isPost()){
            $validate = new \think\Validate;
            $validate->rule('age', 'number|between:1,120')
                ->rule([
                    'adminname'  => 'require|token',
                ]);
            if (!$validate->check(input('post.'))) {
                $this->error($validate->getError());
            }
            if(!captcha_check(input('captcha'))) {
                $this->error('验证码不正确');
            }
            $data=[
                'adminname'=>input('adminname'),
                'password'=>input('password'),
            ];
            $login=model('Admin')->login($data);
            if($login==1){
                $this->success('登陆成功','/admin');
            }else{
                $this->error('登陆失败');
            }
        }
        return view();
    }
    public function logout(){
        session(null);
        $this->success('退出成功','/admin/login');
    }
}