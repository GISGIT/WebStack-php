<?php
/**
 * * 版权所有 2018-2038 大连爱筑站网络科技有限公司，并保留所有权利。
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能获得商业授权的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * $Author: 随心 2018/10/16 $
 */
Route::domain('#MURL#','mobile');

Route::domain('#MURL#', function(){
    Route::get('category/:id', 'mobile/Category/index',['ext'=>'html']);
    Route::get('detail/:id', 'mobile/Detail/index',['ext'=>'html']);
    Route::get('news/:id', 'mobile/News/detail',['ext'=>'html']);
    Route::get('news', 'mobile/News/index');
    Route::get('kuaixun/:id', 'mobile/Kuaixun/detail',['ext'=>'html']);
    Route::get('kuaixun', 'mobile/Kuaixun/index');
    Route::get('search/news', 'mobile/Search/news');
    Route::get('search/kuaixun', 'mobile/Search/kuaixun');
    Route::get('search', 'mobile/Search/index');
});