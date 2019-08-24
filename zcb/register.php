


<!DOCTYPE html>
<html>
<head lang="en">
    <base href="#">
    <meta charset="UTF-8">
    <title>豫创天下-注册</title>
    <link type="text/css" rel="stylesheet" href="../css/common.css"/>
    <link type="text/css" rel="stylesheet" href="../css/main.css"/>
    
    <link rel="stylesheet" type="text/css" href="../r/cms/zcb/zcb/css/basic.css">
	<link rel="stylesheet" type="text/css" href="../r/cms/zcb/zcb/css/common.css">
    
<meta charset="UTF-8">

<link type="text/css" rel="stylesheet" href="../plugins/validateform/style.css" />

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

	<div class="wrap">
		<div class="table-hd cf">
				<span class="title"><em class="itable"></em><?php echo $titlename; ?></span>
				<span class="fr">打 <i class="red">*</i> 号为必填项
				</span>
			
		</div>
		<form name="register" id="register-form" action="registermana.php?do=submit" onsubmit="return false;">
			<input type="hidden" name="usertype" value="<?php echo $usertype;?>">
			<table>
				<caption>
					<div class="verify-error"></div>
				</caption>
				<tr>
					<td class="tr" width="23%"><i class="red">*</i>用户名</td>
					<td width="77%"><input type="text" name="username" class="input" nullmsg="请输入用户名"  datatype="*"/><label class="Validform_checktip">只能包含字母、数字、下划线</label></td>
				</tr>
				<tr>
					<td class="tr"><i class="red">*</i>密码</td>
					<td><input type="password" class="input" name="password" datatype="*"/><label class="Validform_checktip">密码必须为6-16位字母跟数字混合</label></td>
				</tr>
				<tr>
					<td class="tr"><i class="red">*</i>确认密码</td>
					<td><input type="password" class="input" name="repassword" recheck="password" errormsg="两次输入密码不一致"/><label class="Validform_checktip">重复输入登录密码</label></td>
				</tr>
				<tr>
					<td class="tr" width="23%"><i class="red">*</i>姓名</td>
					<td width="77%"><input type="text" name="name" class="input" nullmsg="请输入姓名" datatype="*"/><label class="Validform_checktip">	注册人员真实姓名，应与有效身份证件一致</label></td>
				</tr>
				<tr>
					<td class="tr" width="23%"><i class="red">*</i>手机号码</td>
					<td width="77%"><input type="text" name="tel" class="input" datatype="*" nullmsg="请输入手机号码" errormsg="手机号格式不正确"/><label class="Validform_checktip">手机号码可用于找回密码或用户名，请填写真实有效的手机号码</label></td>
				</tr>
				<tr>
					<td class="tr" width="23%"><i class="red">*</i>国家/地区</td>
					<td width="77%">
						<select name="district" class="input">
                            <option value="CHN" selected="selected">中国</option>
                            <option value="HKG">中国香港</option>
                            <option value="MAC">中国澳门</option>
                            <option value="TWN">中国台湾</option>
                            <option value="ABW">阿鲁巴岛</option>
                            <option value="AFG">阿富汗</option>
                            <option value="AGO">安哥拉</option>
                            <option value="AIA">安圭拉</option>
                            <option value="ALA">奥兰群岛</option>
                            <option value="ALB">阿尔巴尼亚</option>
                            <option value="AND">安道尔</option>
                            <option value="ANT">荷属安地列斯群岛</option>
                            <option value="ARE">阿拉伯联合酋长国</option>
                            <option value="ARG">阿根廷</option>
                            <option value="ARM">亚美尼亚</option>
                            <option value="ASM">美属萨摩亚</option>
                            <option value="ATA">南极洲</option>
                            <option value="ATF">法属南部领地</option><option value="ATG">安提瓜岛与巴布达岛</option><option value="AUS">澳大利亚</option><option value="AUT">奥地利</option><option value="AZE">阿塞拜疆</option><option value="BDI">布隆迪</option><option value="BEL">比利时</option><option value="BEN">贝宁</option><option value="BFA">布基纳法索</option><option value="BGD">孟加拉国</option><option value="BGR">保加利亚</option><option value="BHR">巴林群岛</option><option value="BHS">巴哈马群岛</option><option value="BIH">波斯尼亚与黑塞哥维那</option><option value="BLR">白俄罗斯</option><option value="BLZ">伯利兹</option><option value="BMU">百慕大群岛</option><option value="BOL">玻利维亚</option><option value="BRA">巴西</option><option value="BRB">巴巴多斯岛</option><option value="BRN">文莱</option><option value="BTN">不丹</option><option value="BVT">博维特岛</option><option value="BWA">博茨瓦纳</option><option value="CAF">中非共和国</option><option value="CAN">加拿大</option><option value="CCK">科科斯群岛</option><option value="CHE">瑞士</option><option value="CHL">智利</option><option value="CIV">科特迪瓦</option><option value="CMR">喀麦隆</option><option value="COD">刚果（金）</option><option value="COG">刚果</option><option value="COK">库克群岛</option><option value="COL">哥伦比亚</option><option value="COM">科摩罗</option><option value="CPV">佛得角</option><option value="CRI">哥斯达黎加</option><option value="CUB">古巴</option><option value="CXR">圣诞岛</option><option value="CYM">开曼群岛</option><option value="CYP">塞浦路斯</option><option value="CZE">捷克共和国</option><option value="DEU">德国</option><option value="DJI">吉布提</option><option value="DMA">多米尼加</option><option value="DNK">丹麦</option><option value="DOM">多米尼加共和国</option><option value="DZA">阿尔及尔</option><option value="ECU">厄瓜多尔</option><option value="EGY">埃及</option><option value="ERI">厄立特里亚</option><option value="ESH">西撒哈拉</option><option value="ESP">西班牙</option><option value="EST">爱沙尼亚</option><option value="ETH">埃塞俄比亚</option><option value="FIN">芬兰</option><option value="FJI">斐济</option><option value="FRA">法国</option><option value="FRO">法罗群岛</option><option value="FSM">密克罗尼西亚</option><option value="GAB">加蓬</option><option value="GBR">英国</option><option value="GEO">乔治亚州</option><option value="GGY">格恩西岛</option><option value="GHA">加纳</option><option value="GIB">直布罗陀</option><option value="GIN">几内亚</option><option value="GLP">瓜德罗普岛</option><option value="GMB">冈比亚</option><option value="GNB">几内亚比绍</option><option value="GNQ">赤道几内亚</option><option value="GRC">希腊</option><option value="GRD">格林纳达</option><option value="GRL">格陵兰</option><option value="GTM">危地马拉</option><option value="GUF">法属圭亚那</option><option value="GUM">关岛</option><option value="GUY">圭亚那</option><option value="HMD">赫德和麦克唐纳群岛</option><option value="HND">洪都拉斯</option><option value="HRV">克罗地亚</option><option value="HTI">海地</option><option value="HUN">匈牙利</option><option value="IDN">印度尼西亚</option><option value="IMN">曼恩岛</option><option value="IND">印度</option><option value="IOT">英属印度洋领地</option><option value="IRL">爱尔兰</option><option value="IRN">伊朗</option><option value="IRQ">伊拉克</option><option value="ISL">冰岛</option><option value="ISR">以色列</option><option value="ITA">意大利</option><option value="JAM">牙买加</option><option value="JEY">泽西岛</option><option value="JOR">约旦</option><option value="JPN">日本</option><option value="KAZ">哈萨克斯坦</option><option value="KEN">肯尼亚</option><option value="KGZ">吉尔吉斯斯坦</option><option value="KHM">柬埔寨</option><option value="KIR">基里巴斯</option><option value="KLK">福克兰群岛</option><option value="KNA">圣基茨和尼维斯</option><option value="KOR">韩国</option><option value="KWT">科威特</option><option value="LAO">老挝</option><option value="LBN">黎巴嫩</option><option value="LBR">利比里亚</option><option value="LBY">利比亚</option><option value="LCA">圣卢西亚岛</option><option value="LIE">列支敦士登</option><option value="LKA">斯里兰卡</option><option value="LSO">莱索托</option><option value="LTU">立陶宛</option><option value="LUX">卢森堡</option><option value="LVA">拉脱维亚</option><option value="MAR">摩洛哥</option><option value="MCO">摩纳哥</option><option value="MDA">摩尔多瓦</option><option value="MDG">马达加斯加岛</option><option value="MDV">马尔代夫</option><option value="MEX">墨西哥</option><option value="MHL">马绍尔群岛</option><option value="MKD">马其顿</option><option value="MLI">马里</option><option value="MLT">马耳他</option><option value="MMR">缅甸</option><option value="MNE">黑山</option><option value="MNG">蒙古</option><option value="MNP">北马里亚纳群岛自由联邦</option><option value="MOZ">莫桑比克</option><option value="MRT">毛利塔尼亚</option><option value="MSR">蒙特塞拉特岛</option><option value="MTQ">马提尼克岛</option><option value="MUS">毛里求斯</option><option value="MWI">马拉维</option><option value="MYS">马来西亚</option><option value="MYT">马约特岛</option><option value="NAM">纳米比亚</option><option value="NCL">新喀里多尼亚</option><option value="NER">尼日尔</option><option value="NFK">诺福克岛</option><option value="NGA">尼日利亚</option><option value="NIC">尼加拉瓜</option><option value="NIU">纽埃岛</option><option value="NLD">荷兰</option><option value="NOR">挪威</option><option value="NPL">尼泊尔</option><option value="NRU">瑙鲁</option><option value="NZL">新西兰</option><option value="OMN">阿曼</option><option value="PAK">巴基斯坦</option><option value="PAN">巴拿马</option><option value="PCN">皮特克恩岛</option><option value="PER">秘鲁</option><option value="PHL">菲律宾</option><option value="PLW">帕劳岛</option><option value="PNG">巴布亚新几内亚</option><option value="POL">波兰</option><option value="PRI">波多黎各</option><option value="PRK">朝鲜</option><option value="PRT">葡萄牙</option><option value="PRY">巴拉圭</option><option value="PSE">巴勒斯坦</option><option value="PYF">法属波利尼西亚</option><option value="QAT">卡塔尔</option><option value="REU">留尼旺岛</option><option value="ROU">罗马尼亚</option><option value="RUS">俄国</option><option value="RWA">卢旺达</option><option value="SAU">沙特阿拉伯</option><option value="SDN">苏丹</option><option value="SEN">塞内加尔</option><option value="SGP">新加坡</option><option value="SGS">南乔治亚岛和南桑威奇群岛</option><option value="SHN">圣赫勒拿岛</option><option value="SJM">斯瓦尔巴岛和扬马延岛</option><option value="SLB">所罗门群岛</option><option value="SLE">塞拉利昂</option><option value="SLV">萨尔瓦多</option><option value="SMR">圣马力诺</option><option value="SOM">索马里</option><option value="SPM">圣皮埃尔和密克隆岛</option><option value="SRB">塞尔维亚和黑山</option><option value="STP">圣多美和普林西比</option><option value="SUR">苏里南</option><option value="SVK">斯洛伐克</option><option value="SVN">斯洛文尼亚</option><option value="SWE">瑞典</option><option value="SWZ">斯威士兰</option><option value="SYC">塞舌尔</option><option value="SYR">叙利亚</option><option value="TCA">特克斯和凯科斯群岛</option><option value="TCD">乍得</option><option value="TGO">多哥</option><option value="THA">泰国</option><option value="TJK">塔吉克斯坦</option><option value="TKL">托克劳群岛</option><option value="TKM">土库曼斯坦</option><option value="TLS">东帝汶</option><option value="TON">汤加</option><option value="TTO">特立尼达和多巴哥</option><option value="TUN">突尼斯</option><option value="TUR">土耳其</option><option value="TUV">图瓦卢</option><option value="TZA">坦桑尼亚</option><option value="UGA">乌干达</option><option value="UKR">乌克兰</option><option value="UMI">美属萨摩亚</option><option value="URY">乌拉圭</option><option value="USA">美国</option><option value="UZB">乌兹别克斯坦</option><option value="VAT">梵蒂冈</option><option value="VCT">圣文森特和格林纳丁斯群岛</option><option value="VEN">委内瑞拉</option><option value="VGB">维尔京群岛（英属）</option><option value="VIR">维尔京群岛（美属）</option><option value="VNM">越南</option><option value="VUT">瓦努阿图</option><option value="WLF">瓦利斯群岛和富图纳群岛</option><option value="WSM">萨摩亚群岛</option><option value="YEM">也门</option><option value="ZAF">南非</option><option value="ZMB">赞比亚</option><option value="ZWE">津巴布韦</option>
                        </select>
                        <label class="Validform_checktip">国家/地区注册后不可修改，请谨慎填写</label>
					</td>
				</tr>
				<tr>
					<td class="tr" width="23%"><i class="red">*</i>证件类型</td>
					<td width="77%">
						<select name="type" class="input">
                            <option value="01">居民身份证（户口簿）</option><option value="04">香港特区护照/港澳居民来往内地通行证</option><option value="05">澳门特区护照/港澳居民来往内地通行证</option><option value="06">台湾居民来往大陆通行证</option><option value="07">外国人永久居留证</option><option value="08">外国人护照</option><option value="80">香港居民身份证</option><option value="81">澳门居民身份证</option>
                        </select>
                        <label class="Validform_checktip">证件类型注册后不可修改，请谨慎填写</label>
					</td>
				</tr>
				<tr>
					<td class="tr" width="23%"><i class="red">*</i>证件号码</td>
					<td width="77%"><input type="text" name="identity" class="input" nullmsg="请输入证件号码" datatype="*"/><label class="Validform_checktip">请输入证件类型对应的证件号码，注册完成后不可修改</label></td>
				</tr>
				<tr>
					<td class="tr" width="23%">邮箱</td>
					<td width="77%"><input type="text" name="email" class="input"/><label class="Validform_checktip">本人常用邮箱</label></td>
				</tr>
				<tr>
					<td class="tr"></td>
					<td class="tc">
						<button class="btn login" onclick="registers();">注册</button>
					</td>
				</tr>
			</table>
		</form>
	</div>

	<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="../plugins/validateform/Validform_v5.3.2_min.js"></script>
	<script type="text/javascript">
		function registers() {
			$("#register-form").Validform({
				tiptype : function(msg, o, cssctl) {
					var objtip=o.obj.siblings(".Validform_checktip");
					cssctl(objtip,o.type);
					objtip.text(msg);
				},
				ajaxPost : true,
				callback : function(r) {
					if (typeof r === 'string')
						r = JSON.parse(r);
					if (r.success) {
						alert(r.message);
                        location.href = "login.php";
					} else {
						alert(r.message);
					}
				}
			});
		}
		$(function(){
	        setWrapHeight();
	        $(window).resize(function() {
	            setWrapHeight();
	        });
	    });

	    function setWrapHeight(){
	        var h=window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
	        var topother=$('.wrap form').offset().top;
	        var formheight=$('.wrap form').height();
	        var bottomother=$('.footer').height();
	        if((topother+formheight+bottomother)>h){
	        	 $('.wrap').height(formheight+50);
	        }else{
	        	 $('.wrap').height(h-topother-bottomother);
	        }
	       
	    }
	</script>


	<div class="footer">版权所有：河南省人力资源和社会保障厅     技术支持：河南上博软件科技有限公司</div>
	
</body>
</html>