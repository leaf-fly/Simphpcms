<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>后台登陆</title>
    <meta name="author" content="叶子飞"/>
    <style type="text/css">
        body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,code,form,input,button,textarea,p,th,td { margin:0; padding:0; outline:none; }
        html,body { width: 100%; height: 100%; overflow: hidden; position: relative; }
        li { list-style: none; }
        .login-wrap { width: 100%; height: 260px; background: #f6f6f6; position: absolute; top: 38.2%; }
        .login-show { position: absolute; right: 61.8%; top: 38.2%; }
        .login { position: absolute; left: 61.8%; padding-top: 45px; }
        .input-text input { width: 210px; height: 30px; margin-bottom: 10px; border: 3px solid #e6e6e6; border-radius: 4px; font-size: 16px; font-family: "Microsoft yahei",Tahoma,Arial,"Helvetica Neue","Hiragino Sans GB",Simsun,sans-self; text-indent: 18px; color: #333; overflow: hidden; }
        .input-text input:hover,.input-text input:focus { border-color: #66afe9; }
        .input-text input.error { border-color: #843534; }
        .input-captcha input { width: 100px; float: left; }
        .input-captcha .captcha-img { float: right; }
        #login { width: 216px; height: 40px; border: none; cursor: pointer; font-size: 16px; font-family: "Microsoft yahei",Tahoma,Arial,"Helvetica Neue","Hiragino Sans GB",Simsun,sans-self; color: #666; border-radius: 4px; background: #e6e6e6; letter-spacing: 2px; }
        #login:hover,#login:focus { background: #66afe9; color: #fff; }
    </style>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>

<body onload="javascript:document.myform.username.focus();">
<div id="login_bg" class="login_box">
    <div class="login-wrap">
        <div class="login-show">
            <img src="<?php echo IMG_PATH?>simleaf/img/logo.png">
        </div>
        <div class="login">
        	<form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
	            <ul>
	                <li class="input-text">
	                    <label for="account"></label>
	                    <input type="text" name="username" id="account" placeholder="账号">
	                </li>
	                <li class="input-text">
	                    <label for="password"></label>
	                    <input type="password" name="password" id="password" placeholder="密码">
	                </li>
	                <li class="input-text input-captcha">
	                    <label for="captcha"></label>
	                    <input type="text" name="code" id="captcha" placeholder="验证码">
	                    <div class="captcha-img">
	                        <?php echo form::checkcode('code_img')?>
                    		<a href="javascript:document.getElementById('code_img').src='<?php echo SITE_PROTOCOL.SITE_URL.WEB_PATH;?>api.php?op=checkcode&m=admin&c=index&a=checkcode&time='+Math.random();void(0);"></a>
	                    </div>
	                </li>
	                <li>
	                	<input type="submit" name="dosubmit" class="sub" id="login" value="登陆" />
	                </li>
	            </ul>
            </form> 
        </div>
    </div>
</div>
</body>
</html>