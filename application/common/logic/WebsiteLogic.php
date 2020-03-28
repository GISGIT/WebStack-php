<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/17 $
 */
namespace app\common\logic;

use think\Model;

class WebsiteLogic extends Model
{
    //前台分类页
    public function getList($id,$page){
        $getList=model('Website')->where('cid',$id)->where('isshow','1')->order('order desc,id desc')->cache(true,3600)->paginate(24,$page);
        return $getList;
    }
    //前台推荐
    public function recList($limit){
        $recList=model('Website')->where('isshow','1')->where('isRec','1')->order('order desc,id desc')->limit($limit)->cache(true,3600)->select();
        return $recList;
    }
    //前台详情 | 后台网址编辑
    public function find($id){
        $find=model('Website')->cache(true,3600)->find($id);
        return $find;
    }
    //前台搜索
    public function search($q,$page){
        $getList=model('Website')->where('name','like','%'.$q.'%')->where('isshow','1')->order('order desc,id desc')->cache(true,3600)->paginate(18,$page,['query'=>['q'=>$q]]);
        return $getList;
    }
    public function dataarr($post){
        $ptitle=$post['ptitle'];
        $pname=$post['pname'];
        $purl=$post['purl'];
        $parr=array();
        foreach($ptitle as $key => $value){
            $parr[$key]['ptitle']=$value;
            foreach($pname as $k => $v){
                if($key == $k){
                    $parr[$key]['pname']=$v;
                }
            }
            foreach($purl as $k => $v){
                if($key == $k){
                    $parr[$key]['purl']=$v;
                }
            }
        }
        $parr=serialize($parr);
        if(empty($post['info'])){
            $info='';
        }else{
            $info=$post['info'];
        }
        $data=[
            'name'=>$post['name'],
            'color'=>$post['color'],
            'cid'=>$post['cid'],
            'image'=>$post['image'],
            'bgimg'=>$post['bgimg'],
            'parameter'=>$parr,
            'keywords'=>$post['keywords'],
            'desc'=>$post['desc'],
            'info'=>$info,
            'isshow'=>$post['isshow'],
            'isRec'=>$post['isRec'],
            'order'=>$post['order'],
            'pubtime'=>time(),
        ];
        return $data;
    }
    public function add($data){
        $add=db('website')->insert($data);
        return $add;
    }
    public function edit($id,$data){
        $edit=db('website')->where('id',$id)->update($data);
        return $edit;
    }
    public function del($id){
        $delete=db('website')->where('id','in',$id)->delete();
        return $delete;
    }
    public function adminsearch($post){
        $starttime=strtotime($post['start']);
        if($starttime==''){
            $starttime=0;
        }
        $endtime=$post['end'];
        $endtime=strtotime($endtime.' 23:59');
        if($endtime==''){
            $endtime=9999999999;
        }
        $name=$post['name'];
        $getList=db('website')->where('pubtime','>',$starttime)->where('pubtime','<',$endtime)->where('name','like','%'.$name.'%')->order('id desc')->paginate(10);
        return $getList;
    }
}