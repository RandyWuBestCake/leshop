<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>乐视商城会员登录界面</title>
    <link rel="stylesheet" type="text/css" href="/object/Public/homelogin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/object/Public/homelogin/css/body.css"/>
</head>
<body>
<div class="container">
    <section id="content">
        <img src="/object/Public/homelogin/images/logo.jpg" alt="	"/>

        <form action="<?php echo U('Login/login'); echo ($u); ?>" method="post">

            <h1>会员登录</h1>

            <div>
                <input type="text" placeholder="用户名" required="" id="username" name="username"/>
            </div>
            <div>
                <input type="password" placeholder="密码" required="" id="password" name="password"/>
            </div>
            <div>
                <input type="text" placeholder="请输入验证码" id="code" name="code">
            </div>


            <div class="">
                <span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span></div>
            <div>

                <input type="submit" value="登录" class="btn btn-primary" id="js-btn-login"/>
                <img src="<?php echo U('Login/createVcode');?>" alt="" onclick="this.src=this.src+'?a=1'" style="cursor:pointer"
                     title='看不清?点我换一张'>
                <a href="#" style="text-decoration:none">忘记密码?</a>

            </div>
        </form>
        <div class="button">
            <span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span>
            <a href="#">亲，登录有惊喜哟。</a>
        </div>
    </section>
</div>


<br><br><br><br>

<div style="text-align:center;">

</div>
</body>
</html>