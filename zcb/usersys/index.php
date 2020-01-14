<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>河南省人社厅返乡创业项目申报系统</title>
    <link type="text/css" rel="stylesheet" href="../css/common.css"/>
    <link type="text/css" rel="stylesheet" href="../css/main.css"/>
    
    <link rel="stylesheet" type="text/css" href="../r/cms/zcb/zcb/css/basic.css">
	<link rel="stylesheet" type="text/css" href="../r/cms/zcb/zcb/css/common.css">
	
    <meta charset="UTF-8">

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
         <li class="nav-item dropdown m-l-10"> <a href="stdt.html" class="nav-link dropdown-toggle"  data-hover="dropdown" aria-haspopup="true" aria-expanded="false"> 赛事动态</a> 
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
           
              <span>欢迎您:</span><a href="#" id="login" class="navlog"><font color="red"><?php echo $userinfo['username'];?></font></a>
              <!-- <span>|</span>
           
              <a href="selection.html" id="register" class="navreg">注册</a> -->
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

<div class="main cf">
    <div class="main-left">
        <ul class="nav-left">

            <li class="nav2"><a><i class="ismanage"></i>系统功能</a>
                <ul class="children" style="display:block;">
                        <li class="on"><a onclick="loadIframe('admin.php?do=main')">后台首页</a></li>
                    
                    <li><a onclick="loadIframe('admin.php?do=changePwd')">修改密码</a></li>
                    <li><a href="admin.php?do=logout">安全退出</a></li>
                </ul>
            </li>
            
                <li class="nav2"><a><i class="ipmanage"></i>创业申报管理</a>
                    <ul class="children">
                        <li><a id="signup-a" onclick="loadIframe('admin.php?do=view')">我的报名信息</a></li>
                       <!--  <li><a id="addmember" onclick="loadIframe('admin.php?do=getMemberList')">团队股东管理</a></li>
                         <li><a onclick="loadIframe('admin.php?do=getAttachmentList')">附件管理</a></li> -->
                    </ul>
                </li>
               <!--  <li class="nav2"><a><i class="ipmanage"></i>资格通过证明打印</a>
                    <ul class="children">
                        <li><a onclick="loadIframe('admin.php?do=teampass')">打印资格通过证明</a></li>
                    </ul>
                </li> -->
        </ul>
    </div>
    <div class="main-right">
    <!-- registration/team/mainmana.php" -->
            <iframe id="mainiframe" src="admin.php?do=main" frameborder="0" width="100%" height="100%" style="min-height: 500px;" scrolling="no"></iframe>
    </div>

    <script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../plugins/layer/layer.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>

<div class="print-cred">
	<img src="../img/warning.jpg">
</div>
<script type="text/javascript">
	$(function(){
		$('.print-cred').click(function() {
			$(this).hide();
		});
	});
</script>

</div>
<script type="text/javascript">
    
    $(function () {
        $('body').addClass('index');
        $('body').attr('style', 'background-color: #eee;');
        $('.nav-left .nav2 a').click(function () {
            if ($(this).parents('.children').size() == 0) {//不是叶子节点
                $(this).parents('.nav2').find('.children').slideDown();
                $(this).parents('.nav2').siblings().find('.children').slideUp();
            } else {
                $(this).parents('.nav2').find('.children').slideDown();
                $(this).parents('.nav2').siblings().find('.children').slideUp();
                $('.nav-left .nav2 .on').removeClass('on');
                $(this).parent().addClass('on');
            }
        });
        setWrapHeight();
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

	<div class="footer">版权所有：河南省人力资源和社会保障厅     技术支持：河南上博软件科技有限公司</div>
	
</body>
</html>