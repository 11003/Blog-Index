<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\PHPTutorial\WWW\Blog1\public/../app/admin\view\login\login.html";i:1525690241;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>乘风波浪</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="username" required name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="********" name="password" required type="password">
                </div>
                <div class="loginbox-textbox">  
                    <input class="form-control" placeholder="code" name="code" style="width:80px;" required type="text">
                    <div class="code-img"><div><img src="<?php echo captcha_src(); ?>" style="cursor: pointer;" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()" alt=""></div>

                    </div>
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                <div class="logobox" >
                    <p class="text-center" style="line-height: 42px;">乘风波浪会有时</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="/static/admin/style/jquery.js"></script>
    <script src="/static/admin/style/bootstrap.js"></script>
    <script src="/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>