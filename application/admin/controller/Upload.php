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

class Upload extends Base
{
    public function image()
    {
        $sys=db('sysconfig')->where('varname','imagesurl')->find();
        $file = request()->file('file');
        if(empty($file)) {
            $this->error('请选择上传文件');
        }
        $info = $file->move($_SERVER['DOCUMENT_ROOT'].'/upload');
        $filename = $info->getSaveName();
        $filename = str_replace('\\', '/', $filename);
        $imgurl=$sys['value'].$filename;
        if($filename){
            $arr = array(
                'state'=> '1',
                'imgurl'=> $imgurl,
            );
            return json($arr);
        }else{
            $this->error($file->getError());
        }
    }
}