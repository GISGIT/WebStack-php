<?php /*a:3:{s:51:"D:\www\demo\application\index\view\index\index.html";i:1540130236;s:53:"D:\www\demo\application\index\view\common\header.html";i:1540169146;s:53:"D:\www\demo\application\index\view\common\footer.html";i:1539440739;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php echo htmlentities($seo['seo_title']); ?></title>
    <meta name="keywords" content="<?php echo htmlentities($seo['seo_keywords']); ?>" />
    <meta name="description" content="<?php echo htmlentities($seo['seo_desc']); ?>" />
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
        <div class="top">
            <form method="get" action="/search">
                <input type="text" name="q" placeholder="搜网站" />
                <input type="submit" value="" class="go" />
            </form>
            <h2><i class="ico-bar-vertical"></i>推荐导航</h2>
        </div>
        <div class="w3 clearfix">
            <div class="fl box">
                <div class="inner">
                    <h3><a href="/kuaixun" class="fr" target="_blank">+</a><i class="ico-t1"></i>最新快讯</h3>
                    <ul class="new" id="newList">
                        <?php if(is_array($kxList) || $kxList instanceof \think\Collection || $kxList instanceof \think\Paginator): $i = 0; $__LIST__ = $kxList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li> <span class="fr"><?php echo htmlentities(date("Y-m-d",!is_numeric($vo['pubtime'])? strtotime($vo['pubtime']) : $vo['pubtime'])); ?></span> <a href="/kuaixun/<?php echo htmlentities($vo['id']); ?>.html" target="_blank"> <i class="ico"></i><?php echo htmlentities($vo['title']); ?> </a> </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="fl box">
                <div class="inner">
                    <h3><a href="/news" target="_blank" class="fr">+</a><i class="ico-t3"></i>最新资讯</h3>
                    <ul class="new" id="zixunList">
                        <?php if(is_array($newsList) || $newsList instanceof \think\Collection || $newsList instanceof \think\Paginator): $i = 0; $__LIST__ = $newsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li> <span class="fr"><?php echo htmlentities(date("Y-m-d",!is_numeric($vo['pubtime'])? strtotime($vo['pubtime']) : $vo['pubtime'])); ?></span> <a href="/news/<?php echo htmlentities($vo['id']); ?>.html" target="_blank"> <i class="ico"></i><?php echo htmlentities($vo['title']); ?>  </a> </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="fl box last">
                <div class="inner">
                    <ul class="code">
                        <?php if(is_array($contact) || $contact instanceof \think\Collection || $contact instanceof \think\Paginator): $i = 0; $__LIST__ = $contact;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="clearfix <?php if($i == '1'): ?> first<?php endif; ?>">
                            <div class="fl"><img src="<?php echo htmlentities($vo['image']); ?>" width="82" height="82"></div>
                            <div class="fr">
                                <h4><?php echo htmlentities($vo['title']); ?></h4>
                                <p><?php echo htmlentities($vo['desc']); ?></p>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="items">
            <ul class="w4 clearfix">
                <?php if(is_array($recList) || $recList instanceof \think\Collection || $recList instanceof \think\Paginator): $i = 0; $__LIST__ = $recList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="fl box"> <a href="/detail/<?php echo htmlentities($vo['id']); ?>.html" class="inner" target="_blank">
                    <h3><i class="ico"></i><img src="<?php echo htmlentities($vo['image']); ?>" width=32 height=32  onerror="this.src='/static/images/default.png'"/><span><?php if($vo['color'] != ''): ?><font color="<?php echo htmlentities($vo['color']); ?>"><?php echo htmlentities($vo['name']); ?></font><?php else: ?><?php echo htmlentities($vo['name']); endif; ?></span></h3>
                    <p><?php echo htmlentities($vo['desc']); ?></p>
                </a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </section>
    <?php if(is_array($cWrap) || $cWrap instanceof \think\Collection || $cWrap instanceof \think\Paginator): $i = 0; $__LIST__ = $cWrap;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <section class="home" id='cate-<?php echo htmlentities($vo['id']); ?>'>
        <h2><i class="ico-bar-vertical"></i><?php echo htmlentities($vo['name']); ?></h2>
        <div class="items">
            <ul class="w4 clearfix">
                <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?>
                <li class="fl box"> <a href="/detail/<?php echo htmlentities($sub['id']); ?>.html" class="inner" target="_blank">
                    <h3><i class="ico"></i><img src="<?php echo htmlentities($sub['image']); ?>" width=32 height=32 onerror="this.src='/static/images/default.png'"/><span><?php if($sub['color'] != ''): ?><font color="<?php echo htmlentities($sub['color']); ?>"><?php echo htmlentities($sub['name']); ?></font><?php else: ?><?php echo htmlentities($sub['name']); endif; ?></span></h3>
                    <p><?php echo htmlentities($sub['desc']); ?></p>
                </a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="more"> <a href="/category/<?php echo htmlentities($vo['id']); ?>.html" target="_blank"><span>查看更多</span><i class="ico"></i></a> </div>
    </section>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <section class="home">
        <div class="flink">
            <h2><i class="ico-bar-vertical"></i>友情链接</h2>
            <p class="clearfix">
                <?php if(is_array($frList) || $frList instanceof \think\Collection || $frList instanceof \think\Paginator): $i = 0; $__LIST__ = $frList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo htmlentities($vo['url']); ?>" target="_blank"><?php echo htmlentities($vo['name']); ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </p>
        </div>
    </section>
</section>
<script src="/static/js/yii.js"></script>
<script src="/static/js/html5.js"></script>
<script src="/static/js/common.js?v=0417"></script>
</body>
</html>