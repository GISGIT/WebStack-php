<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/14 $
 */
namespace app\common\logic;

use think\Model;

class CategoryLogic extends Model
{
    //前台栏目页 | 后台编辑栏目
    public function find($id){
        $find=model('Category')->where('id',$id)->cache(true,3600)->find();
        return $find;
    }
    //前台首页大循环
    public function cWrap($limit){
        $cWrap=model('Category')->where('isshow','1')->order('order desc,id desc')->cache(true,3600)->select();
        foreach ($cWrap as $k => $v){
            $cWrap[$k]['sub']=model('Website')->where('cid',$v['id'])->where('isshow','1')->order('order desc,id desc')->limit($limit)->cache(true,3600)->select();
        }
        return $cWrap;
    }
    //后台添加修改网址获取分类
    public function cateAll(){
        $cate=model('Category')->order('id desc')->select();
        return $cate;
    }
    //后台分类列表
    public function getList(){
        $getList=model('Category')->order('id desc')->paginate('10');
        return $getList;
    }
    //后台添加修改分类$data数组
    public function dataarr($post){
        $isshow=$post['isshow'];
        if ($isshow==''){
            $isshow=0;
        }
        $name=$post['name'];
        $seo_title=$post['seo_title'];
        if ($seo_title==''){
            $seo_title=$name;
        }
        $data=[
            'name'=>$name,
            'seo_title'=>$seo_title,
            'seo_keywords'=>$post['seo_keywords'],
            'seo_desc'=>$post['seo_desc'],
            'isshow'=>$isshow,
            'order'=>$post['order'],
        ];
        return $data;
    }
    public function add($data){
        $add=model('Category')->insert($data);
        return $add;
    }
    public function edit($id,$data){
        $edit=model('Category')->where('id',$id)->update($data);
        return $edit;
    }
    public function del($id){
        $delete=db('category')->where('id','in',$id)->delete();
        db('website')->where('cid','in',$id)->delete();
        return $delete;
    }
}