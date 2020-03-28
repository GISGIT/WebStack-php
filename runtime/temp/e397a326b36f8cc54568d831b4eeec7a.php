<?php /*a:2:{s:51:"D:\www\demo\application\admin\view\login\index.html";i:1540171470;s:51:"D:\www\demo\application\admin\view\common\head.html";i:1539595977;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/static/css/font.css">
    <link rel="stylesheet" href="/static/css/xadmin.css">
    <link rel="stylesheet" href="/static/vendor/layui/css/layui.css">
    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/vendor/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
<div class="login layui-anim layui-anim-up">
    <div class="message">后台管理登录</div>
    <div id="darkbannerwrap"></div>
    <form method="post" class="layui-form" >
        <input type="hidden" name="__token__" value="<?php echo htmlentities(app('request')->token()); ?>" />
        <input name="adminname" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
        <hr class="hr15">
        <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
        <hr class="hr15">
        <div class="layui-form-item">
            <input style="float:left;width: 60%;height: 50px;" name="captcha" lay-verify="required" placeholder="验证码"  type="text" class="layui-input"><img style="float:left;width: 40%;height: 50px;" src="<?php echo captcha_src(); ?>" alt="captcha" onClick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" />
        </div>
        <hr class="hr15">
        <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
        <hr class="hr20" >
    </form>
</div>
</body>
</html>