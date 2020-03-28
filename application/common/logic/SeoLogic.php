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

class SeoLogic extends Model
{
    public function seo($mark){
        $seo=model('Seo')->where('mark',$mark)->cache(true,3600)->find();
        return $seo;
    }
    public function adminseo($mark){
        $seo=model('Seo')->where('mark',$mark)->find();
        return $seo;
    }
    public function dataarr($post){
        $data=[
            'seo_title'=>$post['seo_title'],
            'seo_keywords'=>$post['seo_keywords'],
            'seo_desc'=>$post['seo_desc'],
        ];
        return $data;
    }
    public function edit($mark,$data){
        $edit=model('seo')->where('mark',$mark)->update($data);
        return $edit;
    }
    public function search($q){
        $seo=[
            'seo_title'=>'网址'.$q.'的搜索结果',
            'seo_keywords'=>'网址'.$q.'的搜索结果',
            'seo_desc'=>'网址'.$q.'的搜索结果',
        ];
        return $seo;
    }
    public function kuaixun_search($q){
        $seo=[
            'seo_title'=>'快讯'.$q.'的搜索结果',
            'seo_keywords'=>'快讯'.$q.'的搜索结果',
            'seo_desc'=>'快讯'.$q.'的搜索结果',
        ];
        return $seo;
    }
    public function news_search($q){
        $seo=[
            'seo_title'=>'新闻'.$q.'的搜索结果',
            'seo_keywords'=>'新闻'.$q.'的搜索结果',
            'seo_desc'=>'新闻'.$q.'的搜索结果',
        ];
        return $seo;
    }
}