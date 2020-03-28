<?php /*a:3:{s:54:"D:\www\demo\application\index\view\category\index.html";i:1540086787;s:53:"D:\www\demo\application\index\view\common\header.html";i:1540169146;s:53:"D:\www\demo\application\index\view\common\footer.html";i:1539440739;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php echo htmlentities($find['seo_title']); ?> _ <?php echo htmlentities($sys['webname']); ?></title>
    <meta name="keywords" content="<?php echo htmlentities($find['seo_keywords']); ?>" />
    <meta name="description" content="<?php echo htmlentities($find['seo_desc']); ?>" />
    <link href="/static/css/common.css" rel="stylesheet">
    <script src="/static/js/jquery.js"></script>
</head>
<body>
<div class="header-top">
    <h1 class="logo"> <a href="//<?php echo htmlentities($sys['weburl']); ?>"><img src="<?php echo htmlentities($sys['logourl']); ?>" alt="<?php echo htmlentities($sys['webname']); ?>" /></a> </h1>
    <p class="hinfo"><?php echo htmlentities($sys['web_sort']); ?></p>
</div>
<aside id="navBox" class="navbox fl" style="overflow:hidden;">
    <div id="gdt" style="overflow: auto;width: 230px;height: 100%;">
    <nav>
        <ul class="navmain" id="navMenu">
            <li <?php if(app('request')->param('id') == ''): ?>class="active"<?php endif; ?>><a href="/"><span>网站首页</span></a></li>
            <?php if(is_array($cateList) || $cateList instanceof \think\Collection || $cateList instanceof \think\Paginator): $i = 0; $__LIST__ = $cateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li <?php if($vo['id'] == $topid): ?>class="active"<?php endif; ?>><a href="/category/<?php echo htmlentities($vo['id']); ?>.html"><span><?php echo htmlentities($vo['name']); ?></span></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </nav>
    </div>
</aside>
<section class="main">
    <section class="home">
        <h2><i class="ico-bar-vertical"></i><?php echo htmlentities($find['name']); ?></h2>
        <div class="items">
            <ul class="w4 clearfix">
                <?php if(is_array($getList) || $getList instanceof \think\Collection || $getList instanceof \think\Paginator): $i = 0; $__LIST__ = $getList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="fl box"> <a href="/detail/<?php echo htmlentities($vo['id']); ?>.html" class="inner">
                    <h3><i class="ico"></i><img src="<?php echo htmlentities($vo['image']); ?>" width="32" height="32"  onerror="this.src='/static/images/default.png'"/><span><?php if($vo['color'] != ''): ?><font color="<?php echo htmlentities($vo['color']); ?>"><?php echo htmlentities($vo['name']); ?></font><?php else: ?><?php echo htmlentities($vo['name']); endif; ?></span></h3>
                    <p><?php echo htmlentities($vo['desc']); ?></p>
                </a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="page">
            <?php echo $getList; ?>
        </div>
    </section>
</section>
<script src="/static/js/yii.js"></script>
<script src="/static/js/html5.js"></script>
<script src="/static/js/common.js?v=0417"></script>
</body>
</html>