<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/13 $
 */
namespace app\mobile\controller;

use app\common\controller\Base;
use app\common\logic\WebsiteLogic;

class Detail extends Base
{
    public function index()
    {
        $id=input('id');
        $WebsiteLogic=new WebsiteLogic();
        $find=$WebsiteLogic->find($id);
        if(!$find){
            return $this->error('资源不存在');
        }
        $parameter=unserialize($find['parameter']);
        $this->assign('find',$find);
        $this->assign('parameter',$parameter);
        return view();
    }
}