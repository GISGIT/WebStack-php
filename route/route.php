<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


Route::get('category/:id', 'index/Category/index',['ext'=>'html']);
Route::get('detail/:id', 'index/Detail/index',['ext'=>'html']);
Route::get('kuaixun/:id', 'index/Kuaixun/detail',['ext'=>'html']);
Route::get('kuaixun', 'index/Kuaixun/index');
Route::get('news/:id', 'index/News/detail',['ext'=>'html']);
Route::get('news', 'index/News/index');
Route::get('search/kuaixun', 'index/Search/kuaixun');
Route::get('search/news', 'index/Search/news');
Route::get('search', 'index/Search/index');


