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
use app\common\logic\SeoLogic;

class Seo extends Base {
    public function index()
    {
        $mark=input('mark');
        $SeoLogic=new SeoLogic();
        $find=$SeoLogic->adminseo($mark);
        if(!$find){
            $this->error('异常错误');
        }
        if (request()->isPost()){
            $data=$SeoLogic->dataarr(input('post.'));
            $edit=$SeoLogic->edit($mark,$data);
            if($edit){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }
        $this->assign('find',$find);
        return view();
    }
}