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

class Contact extends Base {
    public function index()
    {
        $getList=db('contact')->order('id desc')->paginate(10);

        $count = $getList->total();
        $this->assign('getList',$getList);
        $this->assign('count',$count);
        return view();
    }
    public function add(){
        if(request()->isPost()){
            $isshow=input('isshow');
            if ($isshow==''){
                $isshow=0;
            }
            $data=[
                'title'=>input('title'),
                'image'=>input('image'),
                'desc'=>input('desc'),
                'isshow'=>$isshow,
                'order'=>input('order'),
            ];
            $add=db('contact')->insert($data);
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
        $find=db('contact')->find($id);
        if(!$find){
            $this->error('联系方式不存在');
        }
        if(request()->isPost()){
            $isshow=input('isshow');
            if ($isshow==''){
                $isshow=0;
            }
            $data=[
                'title'=>input('title'),
                'image'=>input('image'),
                'desc'=>input('desc'),
                'isshow'=>$isshow,
                'order'=>input('order'),
            ];
            $edit=db('contact')->where('id',$id)->update($data);
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
        $delete=db('contact')->where('id','in',$id)->delete();
    }
    public function stop(){
        $id=input('id');
        $edit=db('contact')->where('id',$id)->update(['isshow'=>'0']);
    }
    public function start(){
        $id=input('id');
        $edit=db('contact')->where('id',$id)->update(['isshow'=>'1']);
    }
}