<!DOCTYPE html>
<html>
<head lang="en">
    <base href="#">
    <meta charset="UTF-8">
    <title>豫创天下大赛-登录</title>
    <link type="text/css" rel="stylesheet" href="../css/common.css"/>
    <link type="text/css" rel="stylesheet" href="../css/main.css"/>
    
    <link rel="stylesheet" type="text/css" href="../r/cms/zcb/zcb/css/basic.css">
	<link rel="stylesheet" type="text/css" href="../r/cms/zcb/zcb/css/common.css">
    
    <meta charset="UTF-8">
    
    <link type="text/css" rel="stylesheet" href="../plugins/validateform/style.css"/>
    <script type="text/javascript">
        if (window.top != window.self) parent.location.reload();
    </script>

</head>
<body>

<header class="ey-head"> 
   <nav class="navbar navbar-default box-shadow-none ey-nav"> 
    <div class="container"> 
     <div class="row">  
      <div class="navbar-header pull-xs-left"> 
       <a href="index.html" class="navbar-logo vertical-align block pull-xs-left" title="豫创天下"> 
        <div class="vertical-align-middle"> 
         <img src="../r/cms/zcb/zcb/img/yctxlogo.png" alt="豫创天下" /> 
        </div> </a> 
      </div>
     
    
      <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id="ey-nav-collapse"> 
       <ul class="nav navbar-nav navlist"> 
        <li class="nav-item"> <a href="index.html"  class="nav-link active">首页</a> </li> 
        
        <li class="nav-item dropdown m-l-10"> <a href="dsjs.html" class="nav-link dropdown-toggle"  data-hover="dropdown" aria-haspopup="true" aria-expanded="false"> 大赛介绍</a> 
        </li> 
         <li class="nav-item dropdown m-l-10"> <a href="ssdt.html" class="nav-link dropdown-toggle"  data-hover="dropdown" aria-haspopup="true" aria-expanded="false"> 赛事动态</a> 
        </li>
         <li class="nav-item dropdown m-l-10"> <a href="zcds.html" class="nav-link dropdown-toggle"  data-hover="dropdown" aria-haspopup="true" aria-expanded="false"> 众创导师</a> 
        </li>
         <li class="nav-item dropdown m-l-10"> <a href="wjhg.html" class="nav-link dropdown-toggle"  data-hover="dropdown" aria-haspopup="true" aria-expanded="false"> 往届回顾</a> 
        </li>
         <li class="nav-item dropdown m-l-10"> <a href="hzzy.html" class="nav-link dropdown-toggle"  data-hover="dropdown" aria-haspopup="true" aria-expanded="false"> 合作资源</a> 
        </li>
         <li class="nav-item dropdown m-l-10"> <a href="zczc.html" class="nav-link dropdown-toggle"  data-hover="dropdown" aria-haspopup="true" aria-expanded="false"> 政策支持</a> 
        </li>
          <li class="nav-item m-l-10 ey-login">
           
              <a href="login.php" id="login" class="navlog">登录</a><span>|</span>
           
              <a href="selection.html" id="register" class="navreg">注册</a>
          </li>
       </ul> 
      </div> 
     </div> 
    </div> 
   </nav> 
  </header> 

<div class="banner">
    <img src="../img/logo-bg-text.png">
    <a href="login.php" class="signup">立即报名</a>
</div>


<div class="wrap wrap-login" style="height: 0px;">
    <div class="content-header">
        <div class="title">
            <div class="name">用户登录</div>
        </div>
    </div>
    <form class="login-form" name="login" id="loginForm" method="post" action="loginmana.php">
    	<input type="hidden" name="dosubmit" value="yes" />
        <table>
            <caption style="caption-side: inherit; ">
                <div class="verify-error" >
                    	<?php  if(isset($errorinfo)){echo $errorinfo; }?>
                </div>
            </caption>

            <tbody>
            <tr>
                <td class="tr" width="20%">用户名</td>
                <td width="80%"><input type="text" class="input" datatype="*" name="username" nullmsg="用户名不能为空" ></td>
            </tr>
            <tr>
                <td class="tr">密&nbsp;&nbsp;&nbsp;码</td>
                <td><input id="input-password" type="password" datatype="*" class="input" name="password" nullmsg="密码不能为空" autocomplete="off"></td>
            </tr>
            <tr>
                <td class="tr"></td>
                <td>
                    <button type="submit" class="btn login">登录</button>
                </td>
            </tr>
            <tr>
                <td class="tr"></td>
                <td class="other">
                    <a href="selection.html" target="_blank" class="register fr">注册账号</a>
                   
                    <a href="" target="_blank" class="register fr" style="margin-right:10px;">帐号找回</a>
                    <a href="" target="_blank" class="register fr" style="margin-right:10px;">忘记密码</a>
                </td>
            </tr>
            <tr>
                <td class="tr" width="20%"><span style="color:red;">注意：</span></td>
               <td width="80%" class="other"><!--  <span style="color:red;">大学生启航赛的请到如下地址登录：</span><a href="http://cyds.job168.com/index.jsp"><span
                        style="color:red;">http://cyds.job168.com/index.jsp</span></a> -->
                        <span style="color:red;">建议浏览器使用火狐、谷歌或者360浏览器切换成极速模式进行报名</span>
               </td>
               
            </tr>
            </tbody>
        </table>
       <img src="../img/login-line.png" class="login-cutoff"/>
        <div class="form-right">
            <div style="text-align:center;">
                <img style="margin: auto;" src="../img/login-hn-app.png"/>
                <p>河南豫创天下公众号二维码</p>
            </div>
            <!-- <p>河南人社APP为您提供实时的众创杯报名资格审核信息，<br/> 敬请关注！</p>  -->
        </div>
    </form>
</div>


<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="../plugins/validateform/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="../js/Barrett.js"></script>
<script type="text/javascript" src="../js/BigInt.js"></script>
<script type="text/javascript" src="../js/RSA.js"></script>
<script type="text/javascript">
    function initKey() {
        if (key == null) {
            setMaxDigits(130);
            key = new RSAKeyPair("10001", "", "8180f9a21034d9e7874605e1c3dbe6f677eff90d141a09c5270007ac0f0abb8a47e2c549adb38680262131ee7139815be0c562a9d7aa10b99966545241f631cc6b46204f243a0f3e299ee77c18247427d64d841d1671e591ca70e739b658876b5c43e78ff554f22f7fed3447637fbf88abe3677f8c7a9cd6898cc34aed8f5191");
        }
    }
    $(function () {
        $('body').attr('style', 'background-color: #eee;');
        setWrapHeight();
        $("#loginForm").Validform({
            tiptype: function (msg, o, cssctl) {
                if (!o.obj.is('form')) {
                    if (o.type != 2) {
                        if (o.obj.parent().find('.Validform_checktip').length == 0) {
                            o.obj.parent().append('<span class="Validform_checktip"></span>')
                        }
                        var objtip = o.obj.parent().find('.Validform_checktip');
                        cssctl(objtip, o.type);
                        objtip.text(msg);
                    } else if (o.type == 2) {
                        o.obj.parent().find('.Validform_checktip').remove();
                    }
                }
            },
//             beforeSubmit: function () {
//                 initKey();
//                 var pwd = encryptedString(key, encodeURI($('#input-password').val()));
//                 $('#input-password').val(pwd);
//             }
        });
        $(window).resize(function () {
            setWrapHeight();
        });

    });

    function setWrapHeight() {
        var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        var other = $('.header').height() + $('.banner').height() + $('.footer').height();
        $('.wrap').height(h - other - 90);
    }
</script>


	<div class="footer">版权所有：河南省人力资源和社会保障厅    技术支持：河南上博软件科技有限公司</div>
	
</body>
</html>