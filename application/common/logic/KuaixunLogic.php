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

class KuaixunLogic extends Model
{
    public function getList($page){
        $getList=model('Kuaixun')->where('isshow','1')->order('id desc')->cache(true,3600)->paginate('8',$page);
        return $getList;
    }
    //后台快讯列表
    public function getAllList(){
        $getList=model('Kuaixun')->order('id desc')->paginate('10');
        return $getList;
    }
    public function newList(){
        $newList=model('Kuaixun')->where('isshow','1')->order('id desc')->limit(5)->cache(true,3600)->select();
        return $newList;
    }
    public function hotList($limit){
        $hotList=model('Kuaixun')->where('isshow','1')->where('isRec','1')->order('id desc')->limit($limit)->cache(true,3600)->select();
        return $hotList;
    }
    public function find($id){
        $find=model('Kuaixun')->cache(true,3600)->find($id);
        return $find;
    }
    public function adminfind($id){
        $find=model('Kuaixun')->find($id);
        return $find;
    }
    public function search($q,$page){
        $getList=model('Kuaixun')->where('title','like','%'.$q.'%')->where('isshow','1')->order('id desc')->cache(true,3600)->paginate(18,$page,['query'=>['q'=>$q]]);
        return $getList;
    }
    public function dataarr($post){
        $data=[
            'title'=>$post['title'],
            'keywords'=>$post['keywords'],
            'info'=>$post['info'],
            'isRec'=>$post['isRec'],
            'isshow'=>$post['isshow'],
            'pubtime'=>time(),
        ];
        return $data;
    }
    public function add($data){
        $add=model('Kuaixun')->insert($data);
        return $add;
    }
    public function edit($id,$data){
        $edit=model('Kuaixun')->where('id',$id)->update($data);
        return $edit;
    }
    public function del($id){
        $delete=db('Kuaixun')->where('id','in',$id)->delete();
        return $delete;
    }
}