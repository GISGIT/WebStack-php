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
use app\common\logic\CategoryLogic;
use app\common\logic\WebsiteLogic;

class Website extends Base {
    public function index()
    {
        $getList=db('website')->order('id desc')->paginate(10);
        $count = $getList->total();
        $this->assign('getList',$getList);
        $this->assign('count',$count);
        return view();
    }
    public function add(){
        $WebsiteLogic=new WebsiteLogic();
        if(request()->isPost()){
            $data=$WebsiteLogic->dataarr(input('post.'));
            $add=$WebsiteLogic->add($data);
            if($add){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }
        $cate= new CategoryLogic();
        $cateList=$cate->cateAll();
        $this->assign('cateList',$cateList);
        return view();
    }
    public function edit(){
        $id=input('id');
        $WebsiteLogic=new WebsiteLogic();
        $find=$WebsiteLogic->find($id);
        if(!$find){
            $this->error('链接不存在');
        }
        if(request()->isPost()){
            $data=$WebsiteLogic->dataarr(input('post.'));
            $edit=$WebsiteLogic->edit($id,$data);
            if($edit){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        $parameter=unserialize($find['parameter']);
        if($parameter==''){
            $countp=0;
        }else{
            $countp=count($parameter);
        }
        $cate= new CategoryLogic();
        $cateList=$cate->cateAll();
        $this->assign('find',$find);
        $this->assign('parameter',$parameter);
        $this->assign('countp',$countp);
        $this->assign('cateList',$cateList);
        return view();
    }
    public function delete(){
        $id=input('id');
        $WebsiteLogic=new WebsiteLogic();
        $WebsiteLogic->del($id);
    }
    public function stop(){
        $id=input('id');
        $WebsiteLogic=new WebsiteLogic();
        $WebsiteLogic->edit($id,['isshow'=>'0']);
    }
    public function start(){
        $id=input('id');
        $WebsiteLogic=new WebsiteLogic();
        $WebsiteLogic->edit($id,['isshow'=>'1']);
    }
    public function search(){
        $WebsiteLogic=new WebsiteLogic();
        $getList=$WebsiteLogic->adminsearch(input('get.'));
        $count = $getList->total();
        $this->assign('getList',$getList);
        $this->assign('count',$count);
        return view('index');
    }
}