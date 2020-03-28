<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/15 $
 */
namespace app\admin\controller;

use app\admin\controller\Base;
use app\common\logic\NewsLogic;

class News extends Base {
    public function index()
    {
        $NewsLogic=new NewsLogic();
        $getList=$NewsLogic->getAllList();
        $count = $getList->total();
        $this->assign('getList',$getList);
        $this->assign('count',$count);
        return view();
    }
    public function add(){
        $NewsLogic=new NewsLogic();
        if(request()->isPost()){
            $data=$NewsLogic->dataarr(input('post.'));
            $add=$NewsLogic->add($data);
            if($add){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        return view();
    }
    public function edit(){
        $id=input('id');
        $NewsLogic=new NewsLogic();
        $find=$NewsLogic->adminfind($id);
        if(!$find){
            $this->error('快讯不存在');
        }
        if(request()->isPost()){
            $data=$NewsLogic->dataarr(input('post.'));
            $edit=$NewsLogic->edit($id,$data);
            if($edit){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        $this->assign('find',$find);
        return view();
    }
    public function delete(){
        $id=input('id');
        $NewsLogic=new NewsLogic();
        $NewsLogic->del($id);
    }
    public function stop(){
        $id=input('id');
        $NewsLogic=new NewsLogic();
        $NewsLogic->edit($id,['isshow'=>'0']);
    }
    public function start(){
        $id=input('id');
        $NewsLogic=new NewsLogic();
        $NewsLogic->edit($id,['isshow'=>'1']);
    }
}