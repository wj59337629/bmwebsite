<!DOCTYPE html>
<html>
<head>
    <base href="/bmwebsite/">
    <meta charset="UTF-8">
    <title>团队报名详情</title>
    <link type="text/css" rel="stylesheet" href="plugins/validateform/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/common.css"/>
    <link type="text/css" rel="stylesheet" href="css/main.css"/>
    <link type="text/css" rel="stylesheet" href="css/form.css"/>

    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-easyui-1.3.2/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="plugins/validateform/Validform_v5.3.2_min.js"></script>
    <script type="text/javascript" src="plugins/layer/layer.js"></script>
    <script type="text/javascript" src="plugins/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/iframe.js"></script>
    <script type="text/javascript" src="js/city.js?v=<?php echo time()?>"></script>
    <script type="text/javascript" src="js/function/loading.js"></script>
</head>
<body>
<form id="saveproject-form" action="zcb/admin.php?do=bmsave" method="post" enctype="multipart/form-data" >

    <div class="form-hd cf">
        <span><i class="ieditinfo"></i>修改报名信息</span>
        <div class="fr fixright">
            <a onclick="submitInfo();"><i class="icon icon10"></i>保存</a> 
            <a href="zcb/admin.php?do=view"><i class="icon icon11"></i>取消</a>
        </div>
    </div>
    <div class="form-bd">
        <div class="tab">
            <ul class="tab-hd">
                <li class="on">基本资料</li><li>创业项目基本信息</li><li>商业计划书（可行性分析报告）</li>
            </ul>
            
<div class="tab-bd">
    <div class="tab-content" style="display: block">
        <div class="box">
            <div class="box-hd">（一）团队负责人信息</div>
            <div class="box-bd">
                <table class="table-two-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i>姓名：</label> 
                                <input class="input" type="text" name="leader" maxlength="35" value="<?php echo $xminfo['teampsnname']?>" placeholder="请输入负责人姓名"/>
                                <input type="hidden" name="status" id="status">
                                <input type="hidden" name="version" value="1"/>
                                <input type="hidden" name="id" value="<?php echo $xminfo['id']?>"> 
                                <input type="hidden" id="validatestatus" value="<?php echo $xminfo['ispass']?>">
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i>性别：</label> 
                                <input type="radio" name="gender" value="1" <?php if($xminfo['gender'] == 1){?> checked <?php }?>/>&nbsp;男
                                &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="2" <?php if($xminfo['gender'] == 2){?>checked <?php }?>/>&nbsp;女
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i>出生日期：</label> 
                                <input class="input Wdate" onClick="WdatePicker()" readonly type="text" name="birthday"  value="<?php echo $xminfo['birthday']?>"/>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 学历：</label> <select class="input" name="degree">
                                <option value="1" <?php if($xminfo['degree'] == 1){?>selected="selected"<?php }?>>博士</option>
                                <option value="2" <?php if($xminfo['degree'] == 2){?>selected="selected"<?php }?>>硕士</option>
                                <option value="3" <?php if($xminfo['degree'] == 3){?>selected="selected"<?php }?>>本科</option>
                                <option value="4" <?php if($xminfo['degree'] == 4){?>selected="selected"<?php }?>>大专</option>
                                <option value="5" <?php if($xminfo['degree'] == 5){?>selected="selected"<?php }?>>中专</option>
                                <option value="7" <?php if($xminfo['degree'] == 7){?>selected="selected"<?php }?>>中技</option>
                                <option value="8" <?php if($xminfo['degree'] == 8){?>selected="selected"<?php }?>>高技</option>
                                <option value="6" <?php if($xminfo['degree'] == 6){?>selected="selected"<?php }?>>其他</option>
                            </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i>证件类型：</label>
                                <select name="id_cart_type" class="input">
                                    <option value="01" <?php if($xminfo['id_card_type'] == '01'){?>selected="selected"<?php }?>>居民身份证（户口簿）</option>
                                    <option value="04" <?php if($xminfo['id_card_type'] == '04'){?>selected="selected"<?php }?>>香港特区护照/港澳居民来往内地通行证</option>
                                    <option value="05" <?php if($xminfo['id_card_type'] == '05'){?>selected="selected"<?php }?>>澳门特区护照/港澳居民来往内地通行证</option>
                                    <option value="06" <?php if($xminfo['id_card_type'] == '06'){?>selected="selected"<?php }?>>台湾居民来往大陆通行证</option>
                                    <option value="07" <?php if($xminfo['id_card_type'] == '07'){?>selected="selected"<?php }?>>外国人永久居留证</option>
                                    <option value="08" <?php if($xminfo['id_card_type'] == '08'){?>selected="selected"<?php }?>>外国人护照</option>
                                    <option value="80" <?php if($xminfo['id_card_type'] == '80'){?>selected="selected"<?php }?>>香港居民身份证</option>
                                    <option value="81" <?php if($xminfo['id_card_type'] == '81'){?>selected="selected"<?php }?>>澳门居民身份证</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 证件号码：</label> 
                                <input class="input" type="text" placeholder="请输入证件号码" maxlength="20" name="id_card_no"  value="<?php echo $xminfo['idcard']?>"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 毕业/就读学校：</label> 
                                <input class="input" type="text" name="college" placeholder="请输入毕业/就读学校" maxlength="40" value="<?php echo $xminfo['graduation']?>"/>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i>毕业时间：</label> 
                                <input class="input Wdate" onfocus="WdatePicker()" readonly type="text" name="bydate"  value="<?php echo $xminfo['bydate']?>"/>
                            </div>
                        </td>
                    </tr>
                   <!-- <tr>
                        <td>
                            <div class="group">
                                <label>入学日期：</label> 
                                <input class="input Wdate" onfocus="WdatePicker()" readonly type="text" name="enrol_year" value=""/>
                            </div>
                        </td>
                        
                    </tr> --> 
                    <tr>
                      <td>
                            <div class="group">
                                <label>所读专业：</label> 
                                <input class="input" type="text" placeholder="请输入所读专业" maxlength="40" name="field" value="<?php echo $xminfo['zhuanye']?>"/>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 电子邮箱：</label> 
                                <input class="input" type="text" name="email" placeholder="请输入电子邮箱" value="<?php echo $xminfo['email']?>" ignore="ignore"  maxlength="30" datatype="Email" errormsg="电子邮箱格式错误"/>
                            </div>
                        </td>
                    </tr>
                   <!--  <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 是否有推荐单位：</label> 
                                <input type="radio" name="isTj" value="1" checked / onclick="$('#tjdwi-tr').show();">&nbsp;是 &nbsp;&nbsp;&nbsp;<input type="radio" name="isTj" value="2"  onclick="$('#tjdwi-tr').hide();"/>&nbsp;否
                            </div>
                        </td>
                        <td id="tjdwi-tr" >
                            <div class="group">
                                <label><i class="red">*</i> 推荐单位：</label> 
                                <input class="input" type="text" name="presenter" placeholder="请输入推荐单位" maxlength="40"  value=""/>
                            </div>
                        </td>
                    </tr> -->
                    <tr>
                        <!-- <td>
                            <div class="group">
                                <label><i class="red">*</i> 证件扫描件：</label> <input type="text" readonly placeholder="图片大小不能超过500K" class="input file_input"/> <a class="file">
                                <i class="icon4 icon-update"></i>上传图片 <input type="file" name="icon" value="text"> </a>
                            </div>
                        </td> -->
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 手机号码：</label> 
                                <input class="input" type="text" name="tel" maxlength="35" placeholder="请输入手机号码" value="<?php echo $xminfo['tel']?>"  ignore="ignore" datatype="phone" errormsg="手机号码格式错误"/>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 团队名称：</label> <input class="input" type="text" name="team_name" placeholder="请输入团队名称" maxlength="50"
                                                                                 value="<?php echo $xminfo['gsname']?>"/>
                            </div>
                        </td>
<!--                          <td> -->
<!--                             <div class="group"> 
                                <label>QQ号码：</label> <input class="input" type="text" name="qq" maxlength="30" placeholder="请输入qq" value="<?php echo $xminfo['qq']?>"/>
<!--                             </div> -->
<!--                         </td> -->
                    </tr>
                    <tr>
                    	<td>
                    		<div class="group">
                                <label>团队人数：</label> 
                                <input class="input" type="text" name="teampeoplenum" maxlength="35" placeholder="请输入团队人数" value="<?php echo $xminfo['teampeoplenum']?>" />
                            </div>
                    	</td>
                    	<td> 
                            <div class="group"> 
                                <label>团队注册资金(万)：</label> <input class="input" type="text" name="zcmny" maxlength="30" placeholder="请输入注册资金" value="<?php echo $xminfo['zcmny']?>"/>
                           </div> 
                        </td>
                    </tr>
                   <!--  <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 所属群体：</label> <select class="input" name="group_type">
                                <option value="9" >在校大学生</option>
                                <option value="1" >具有中级及以上职称的专业技术人员</option>
                                <option value="2" >具有技师及以上职业资格的技能人才</option>
                                <option value="3" >具有研究生学历或硕士及以上学位的人员</option>
                                <option value="4" >在高校、科研院所及其他企事业单位从事科学研究、技术开发等工作的人员</option>
                                <option value="5" >留学归国人员</option>
                                <option value="6" >各级政府部门认定的高层次人才</option>
                                <option value="7" >拥有自主知识产权的人员</option>
                                <option value="8" >其他</option>
                            </select>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 所属群体证明：</label> <input type="text" readonly placeholder="图片大小不能超过500K" class="input file_input"/> <a
                                    class="file"> <i class="icon4 icon-update"></i>上传图片 <input type="file" name="identifications">
                            </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 国籍：</label>
                                <select name="nationality" class="input">
                                    <option value="CHN" selected="selected">中国</option><option value="HKG">中国香港</option><option value="MAC">中国澳门</option><option value="TWN">中国台湾</option><option value="ABW">阿鲁巴岛</option><option value="AFG">阿富汗</option><option value="AGO">安哥拉</option><option value="AIA">安圭拉</option><option value="ALA">奥兰群岛</option><option value="ALB">阿尔巴尼亚</option><option value="AND">安道尔</option><option value="ANT">荷属安地列斯群岛</option><option value="ARE">阿拉伯联合酋长国</option><option value="ARG">阿根廷</option><option value="ARM">亚美尼亚</option><option value="ASM">美属萨摩亚</option><option value="ATA">南极洲</option><option value="ATF">法属南部领地</option><option value="ATG">安提瓜岛与巴布达岛</option><option value="AUS">澳大利亚</option><option value="AUT">奥地利</option><option value="AZE">阿塞拜疆</option><option value="BDI">布隆迪</option><option value="BEL">比利时</option><option value="BEN">贝宁</option><option value="BFA">布基纳法索</option><option value="BGD">孟加拉国</option><option value="BGR">保加利亚</option><option value="BHR">巴林群岛</option><option value="BHS">巴哈马群岛</option><option value="BIH">波斯尼亚与黑塞哥维那</option><option value="BLR">白俄罗斯</option><option value="BLZ">伯利兹</option><option value="BMU">百慕大群岛</option><option value="BOL">玻利维亚</option><option value="BRA">巴西</option><option value="BRB">巴巴多斯岛</option><option value="BRN">文莱</option><option value="BTN">不丹</option><option value="BVT">博维特岛</option><option value="BWA">博茨瓦纳</option><option value="CAF">中非共和国</option><option value="CAN">加拿大</option><option value="CCK">科科斯群岛</option><option value="CHE">瑞士</option><option value="CHL">智利</option><option value="CIV">科特迪瓦</option><option value="CMR">喀麦隆</option><option value="COD">刚果（金）</option><option value="COG">刚果</option><option value="COK">库克群岛</option><option value="COL">哥伦比亚</option><option value="COM">科摩罗</option><option value="CPV">佛得角</option><option value="CRI">哥斯达黎加</option><option value="CUB">古巴</option><option value="CXR">圣诞岛</option><option value="CYM">开曼群岛</option><option value="CYP">塞浦路斯</option><option value="CZE">捷克共和国</option><option value="DEU">德国</option><option value="DJI">吉布提</option><option value="DMA">多米尼加</option><option value="DNK">丹麦</option><option value="DOM">多米尼加共和国</option><option value="DZA">阿尔及尔</option><option value="ECU">厄瓜多尔</option><option value="EGY">埃及</option><option value="ERI">厄立特里亚</option><option value="ESH">西撒哈拉</option><option value="ESP">西班牙</option><option value="EST">爱沙尼亚</option><option value="ETH">埃塞俄比亚</option><option value="FIN">芬兰</option><option value="FJI">斐济</option><option value="FRA">法国</option><option value="FRO">法罗群岛</option><option value="FSM">密克罗尼西亚</option><option value="GAB">加蓬</option><option value="GBR">英国</option><option value="GEO">乔治亚州</option><option value="GGY">格恩西岛</option><option value="GHA">加纳</option><option value="GIB">直布罗陀</option><option value="GIN">几内亚</option><option value="GLP">瓜德罗普岛</option><option value="GMB">冈比亚</option><option value="GNB">几内亚比绍</option><option value="GNQ">赤道几内亚</option><option value="GRC">希腊</option><option value="GRD">格林纳达</option><option value="GRL">格陵兰</option><option value="GTM">危地马拉</option><option value="GUF">法属圭亚那</option><option value="GUM">关岛</option><option value="GUY">圭亚那</option><option value="HMD">赫德和麦克唐纳群岛</option><option value="HND">洪都拉斯</option><option value="HRV">克罗地亚</option><option value="HTI">海地</option><option value="HUN">匈牙利</option><option value="IDN">印度尼西亚</option><option value="IMN">曼恩岛</option><option value="IND">印度</option><option value="IOT">英属印度洋领地</option><option value="IRL">爱尔兰</option><option value="IRN">伊朗</option><option value="IRQ">伊拉克</option><option value="ISL">冰岛</option><option value="ISR">以色列</option><option value="ITA">意大利</option><option value="JAM">牙买加</option><option value="JEY">泽西岛</option><option value="JOR">约旦</option><option value="JPN">日本</option><option value="KAZ">哈萨克斯坦</option><option value="KEN">肯尼亚</option><option value="KGZ">吉尔吉斯斯坦</option><option value="KHM">柬埔寨</option><option value="KIR">基里巴斯</option><option value="KLK">福克兰群岛</option><option value="KNA">圣基茨和尼维斯</option><option value="KOR">韩国</option><option value="KWT">科威特</option><option value="LAO">老挝</option><option value="LBN">黎巴嫩</option><option value="LBR">利比里亚</option><option value="LBY">利比亚</option><option value="LCA">圣卢西亚岛</option><option value="LIE">列支敦士登</option><option value="LKA">斯里兰卡</option><option value="LSO">莱索托</option><option value="LTU">立陶宛</option><option value="LUX">卢森堡</option><option value="LVA">拉脱维亚</option><option value="MAR">摩洛哥</option><option value="MCO">摩纳哥</option><option value="MDA">摩尔多瓦</option><option value="MDG">马达加斯加岛</option><option value="MDV">马尔代夫</option><option value="MEX">墨西哥</option><option value="MHL">马绍尔群岛</option><option value="MKD">马其顿</option><option value="MLI">马里</option><option value="MLT">马耳他</option><option value="MMR">缅甸</option><option value="MNE">黑山</option><option value="MNG">蒙古</option><option value="MNP">北马里亚纳群岛自由联邦</option><option value="MOZ">莫桑比克</option><option value="MRT">毛利塔尼亚</option><option value="MSR">蒙特塞拉特岛</option><option value="MTQ">马提尼克岛</option><option value="MUS">毛里求斯</option><option value="MWI">马拉维</option><option value="MYS">马来西亚</option><option value="MYT">马约特岛</option><option value="NAM">纳米比亚</option><option value="NCL">新喀里多尼亚</option><option value="NER">尼日尔</option><option value="NFK">诺福克岛</option><option value="NGA">尼日利亚</option><option value="NIC">尼加拉瓜</option><option value="NIU">纽埃岛</option><option value="NLD">荷兰</option><option value="NOR">挪威</option><option value="NPL">尼泊尔</option><option value="NRU">瑙鲁</option><option value="NZL">新西兰</option><option value="OMN">阿曼</option><option value="PAK">巴基斯坦</option><option value="PAN">巴拿马</option><option value="PCN">皮特克恩岛</option><option value="PER">秘鲁</option><option value="PHL">菲律宾</option><option value="PLW">帕劳岛</option><option value="PNG">巴布亚新几内亚</option><option value="POL">波兰</option><option value="PRI">波多黎各</option><option value="PRK">朝鲜</option><option value="PRT">葡萄牙</option><option value="PRY">巴拉圭</option><option value="PSE">巴勒斯坦</option><option value="PYF">法属波利尼西亚</option><option value="QAT">卡塔尔</option><option value="REU">留尼旺岛</option><option value="ROU">罗马尼亚</option><option value="RUS">俄国</option><option value="RWA">卢旺达</option><option value="SAU">沙特阿拉伯</option><option value="SDN">苏丹</option><option value="SEN">塞内加尔</option><option value="SGP">新加坡</option><option value="SGS">南乔治亚岛和南桑威奇群岛</option><option value="SHN">圣赫勒拿岛</option><option value="SJM">斯瓦尔巴岛和扬马延岛</option><option value="SLB">所罗门群岛</option><option value="SLE">塞拉利昂</option><option value="SLV">萨尔瓦多</option><option value="SMR">圣马力诺</option><option value="SOM">索马里</option><option value="SPM">圣皮埃尔和密克隆岛</option><option value="SRB">塞尔维亚和黑山</option><option value="STP">圣多美和普林西比</option><option value="SUR">苏里南</option><option value="SVK">斯洛伐克</option><option value="SVN">斯洛文尼亚</option><option value="SWE">瑞典</option><option value="SWZ">斯威士兰</option><option value="SYC">塞舌尔</option><option value="SYR">叙利亚</option><option value="TCA">特克斯和凯科斯群岛</option><option value="TCD">乍得</option><option value="TGO">多哥</option><option value="THA">泰国</option><option value="TJK">塔吉克斯坦</option><option value="TKL">托克劳群岛</option><option value="TKM">土库曼斯坦</option><option value="TLS">东帝汶</option><option value="TON">汤加</option><option value="TTO">特立尼达和多巴哥</option><option value="TUN">突尼斯</option><option value="TUR">土耳其</option><option value="TUV">图瓦卢</option><option value="TZA">坦桑尼亚</option><option value="UGA">乌干达</option><option value="UKR">乌克兰</option><option value="UMI">美属萨摩亚</option><option value="URY">乌拉圭</option><option value="USA">美国</option><option value="UZB">乌兹别克斯坦</option><option value="VAT">梵蒂冈</option><option value="VCT">圣文森特和格林纳丁斯群岛</option><option value="VEN">委内瑞拉</option><option value="VGB">维尔京群岛（英属）</option><option value="VIR">维尔京群岛（美属）</option><option value="VNM">越南</option><option value="VUT">瓦努阿图</option><option value="WLF">瓦利斯群岛和富图纳群岛</option><option value="WSM">萨摩亚群岛</option><option value="YEM">也门</option><option value="ZAF">南非</option><option value="ZMB">赞比亚</option><option value="ZWE">津巴布韦</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>QQ号码：</label> <input class="input" type="text" name="qq" maxlength="30" placeholder="请输入qq" value=""/>
                            </div>
                        </td>
                    </tr> -->
                </table>
                <div class="attention">
                    <div class="attention-title">注意事项：</div>
                    <p>1.具有中级及以上职称的专业技术人员，需提供专业技术资格证内页；</p>
                    <p>2.具有技师及以上职业资格的技能人员，需提供职业资格证书等级（等级页和内页）；</p>
                    <p>3.具有研究生学历或硕士及以上学位的人员，需提供学历学位证书（研究生或硕士以上）；</p>
                    <p>4.在高校、科研院所及其他企事业单位从事科学研究、技术开发等工作的人员，需提供由所在单位盖章的在职证明；</p>
                    <p>5.留学回国人员，需提供留学回国人员证明或国外学历学位认证书；</p>
                    <p>6.各级政府部门认定的高层次人才，需提供政府部门认定文件；</p>
                    <p>7.拥有自主知识产权的人员，需提供专利证书</p>
                </div>
                <div class="prodetailCont">
                    <span class="title">个人简历及主要成就（限制2000字以内）</span>
                    <textarea rows="6" class="input" name="achievement"><?php echo $xminfo['jlcontent']?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="box">
            <div class="box-bd">
                <table class="table-one-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>赛事名称：</label> 豫创天下大赛<input type="hidden" name="match_type" id="match_type" value="1">
                            </div>
                        </td>
                    </tr>
                  <!-- <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 所属赛区：</label>
                                <input type="hidden" id="saiqucity" value=""> 
                                <select id="saiqu" class="input two-select"  onchange="getMatch()">
                                <option value="">--请选择赛区--</option>
                                <option >第一赛区</option>

                            </select><select id="saiquchengshi" class="input two-select" name="match_area_id">
                                <option selected value>--请选择城市--</option>
                                <option></option>
                            </select>
                            </div>
                        </td> 
                    </tr> 
                  --> 
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 项目名称：</label> 
                                <input class="input" type="text" maxlength="70" placeholder="请输入项目名称" name="project_name"
                                                                                 value="<?php echo $xminfo['xmname']?>"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 行业：</label> <select class="input" name="industry">
                                <!-- <option value="01" >农林业</option>
                                <option value="02" >水利</option>
                                <option value="03" >煤炭</option>
                                <option value="04" >电力</option>
                                <option value="05" >新能源</option>
                                <option value="06" >核能</option>
                                <option value="07" >石油</option>
                                <option value="08" >天然气</option>
                                <option value="09" >钢铁</option>
                                <option value="10" >有色金属</option>
                                <option value="11" >黄金</option>
                                <option value="12" >石化化工</option>
                                <option value="13" >建材</option>
                                <option value="14" >医药</option>
                                <option value="15" >机械</option>
                                <option value="16" >城市轨道交通装备</option>
                                <option value="17" >汽车</option>
                                <option value="18" >船舶</option>
                                <option value="19" >航空航天</option>
                                <option value="20" >轻工</option>
                                <option value="21" >纺织</option>
                                <option value="22" >建筑</option>
                                <option value="23" >城市基础设施</option>
                                <option value="24" >铁路</option>
                                <option value="25" >公路及道路运输</option>
                                <option value="26" >水运</option>
                                <option value="27" >航空运输</option>
                                <option value="28" >信息产业</option>
                                <option value="29" >综合交通运输</option>
                                <option value="30" >现代物流业</option>
                                <option value="31" >金融服务业</option>
                                <option value="32" >科技服务业</option>
                                <option value="33" >商务服务业</option>
                                <option value="34" >商贸服务业</option>
                                <option value="35" >旅游业</option>
                                <option value="36" >邮政业</option>
                                <option value="37" >教育</option>
                                <option value="38" >文化</option>
                                <option value="39" >卫生</option>
                                <option value="40" >体育服务业</option>
                                <option value="41" >其他服务业</option>
                                <option value="42" >环境保护与资源节约综合利用</option>
                                <option value="43" >公共安全与应急产品</option>
                                <option value="44" >民爆产品</option>
                                <option value="45" >其他</option>
                                 -->
                                 <option value="新材料、新能源" <?php if($xminfo['xmtype'] == '新材料、新能源'){?> selected="selected"<?php }?>>新材料、新能源</option>
					              <option value="制造业" <?php if($xminfo['xmtype'] == '制造业'){?> selected="selected"<?php }?>>制造业</option>
					              <option value="互联网+IT技术" <?php if($xminfo['xmtype'] == '互联网+IT技术'){?> selected="selected"<?php }?>>互联网+IT技术</option>
					              <option value="物联网行业应用" <?php if($xminfo['xmtype'] == '物联网行业应用'){?> selected="selected"<?php }?>>物联网行业应用</option>
					              <option value="文化创意及现代服务业" <?php if($xminfo['xmtype'] == '文化创意及现代服务业'){?> selected="selected"<?php }?>>文化创意及现代服务业</option>
					              <option value="生物科技及医疗" <?php if($xminfo['xmtype'] == '生物科技及医疗'){?> selected="selected"<?php }?>>生物科技及医疗</option>
					              <option value="教育培训" <?php if($xminfo['xmtype'] == '教育培训'){?> selected="selected"<?php }?>>教育培训</option>
					              <option value="农业产业化" <?php if($xminfo['xmtype'] == '农业产业化'){?> selected="selected"<?php }?>>农业产业化</option>
					              <option value="商贸、零售及物流" <?php if($xminfo['xmtype'] == '商贸、零售及物流'){?> selected="selected"<?php }?>>商贸、零售及物流</option>
					              <option value="建筑地产" <?php if($xminfo['xmtype'] == '建筑地产'){?> selected="selected"<?php }?>>建筑地产</option>
					              <option value="其他" <?php if($xminfo['xmtype'] == '其他'){?> selected="selected"<?php }?>>其他</option>
                            </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 项目地址：</label> <input type="hidden" id="adizhiname" value=""><input type="hidden" id="ashenfenname"
                                                                                                                                                       value=""><select
                                    id="selid" name="selid" onchange="selCity('selid','subselid')" class="input two-select">
                                <?php if($xminfo['xmselid'] != ''){?>
                                	<option value="<?php echo $xminfo['xmselid']?>"><?php echo $xminfo['xmselid']?></option>
                                <?php }else{?>
                                	<option value="">----请选择省份----</option>
                                <?php }?>
                                
                                <option >北京市</option>
                                <option >天津市</option>
                                <option >上海市</option>
                                <option >重庆市</option>
                                <option >湖北省</option>
                                <option >河北省</option>
                                <option >河南省</option>
                                <option >福建省</option>
                                <option >广东省</option>
                                <option >海南省</option>
                                <option >台湾地区</option>
                                <option >四川省</option>
                                <option >湖南省</option>
                                <option >安徽省</option>
                                <option >江苏省</option>
                                <option >云南省</option>
                                <option >新疆维吾尔自治区</option>
                                <option >内蒙古自治区</option>
                                <option >甘肃省</option>
                                <option >广西壮族自治区</option>
                                <option >宁夏回族自治区</option>
                                <option >香港特别行政区</option>
                                <option >澳门特别行政区</option>
                                <option >浙江省</option>
                                <option >辽宁省</option>
                                <option >黑龙江省</option>
                                <option >山东省</option>
                                <option >江西省</option>
                                <option >山西省</option>
                                <option >陕西省</option>
                                <option >吉林省</option>
                                <option >贵州省</option>
                                <option >青海省</option>
                                <option >西藏自治区</option>
                            </select><select id="subselid" class="input two-select" name="proj_laction_id">
                                	<option selected value="<?php echo $xminfo['xmsubselid']?>"><?php echo $xminfo['xmsubselid']?></option>
                            </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 项目具体地址：</label> <input class="input" type="text" placeholder="请输入项目具体地址" name="address" maxlength="70"
                                                                                   value="<?php echo $xminfo['xmaddress']?>"/>
                            </div>
                        </td>
                    </tr>
                  <!--   <tr>
                        <td>
                            <div class="group">
                                <label>拟公司成立时间：</label> <input class="input Wdate" onfocus="WdatePicker()" readonly type="text" name="reg_date" value=""/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>拟注册登记处：</label><input type="hidden" id="ncityname" value=""><input type="hidden" id="nshenfenname"
                                                                                                                              value=""> <select id="selids"
                                                                                                                                                                                       onchange="selCity('selids','subselids')"
                                                                                                                                                                                       class="input two-select">
                                <option value="">----请选择城市----</option>
                                <option >北京市</option>
                                <option >天津市</option>
                                <option >上海市</option>
                                <option >重庆市</option>
                                <option >湖北省</option>
                                <option >河北省</option>
                                <option >河南省</option>
                                <option >福建省</option>
                                <option >广东省</option>
                                <option >海南省</option>
                                <option >台湾地区</option>
                                <option >四川省</option>
                                <option >湖南省</option>
                                <option >安徽省</option>
                                <option >江苏省</option>
                                <option >云南省</option>
                                <option >新疆维吾尔自治区</option>
                                <option >内蒙古自治区</option>
                                <option >甘肃省</option>
                                <option >广西壮族自治区</option>
                                <option >宁夏回族自治区</option>
                                <option >香港特别行政区</option>
                                <option >澳门特别行政区</option>
                                <option >浙江省</option>
                                <option >辽宁省</option>
                                <option >黑龙江省</option>
                                <option >山东省</option>
                                <option >江西省</option>
                                <option >山西省</option>
                                <option >陕西省</option>
                                <option >吉林省</option>
                                <option >贵州省</option>
                                <option >青海省</option>
                                <option >西藏自治区</option>
                            </select><select id="subselids" class="input two-select" name="city_id">
                                <option selected value>----请选择城市----</option>
                            </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>项目形象照：</label> <input type="text" placeholder="图片大小不能超过500K" readonly class="input file_input"/> <a class="file"> <i
                                    class="icon4 icon-update"></i>上传图片 <input type="file" name="appearances">
                            </a>
                            </div>
                        </td>
                    </tr> -->
                </table>

                <div class="prodetailCont">
                    <span class="title"><i class="red">*</i> 项目摘要（限制2000字以内）</span>
                    <textarea rows="6" class="input" name="digest"><?php echo $xminfo['xminstroduce']?></textarea>
                </div>
                <div class="prodetailCont">
                    <span class="title">获得国家专利/知识产权情况（限制1000字以内）</span>
                    <textarea rows="6" class="input" name="patent"><?php echo $xminfo['zlinfo']?></textarea>
                </div>
                 <div class="prodetailCont">
                    <span class="title">软件著作权获得情况（限制1000字以内）</span>
                    <textarea rows="6" class="input" name="rjzzinfo"><?php echo $xminfo['rjzzinfo']?></textarea>
                </div>
                 <div class="prodetailCont">
                    <span class="title">注册商标获得情况（限制1000字以内）</span>
                    <textarea rows="6" class="input" name="zcsbinfo"><?php echo $xminfo['zcsbinfo']?></textarea>
                </div>
                <div class="prodetailCont">
                    <span class="title">项目主要获奖情况（限制1000字以内）</span>
                    <textarea rows="6" class="input" name="awards"><?php echo $xminfo['otherinfo']?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="box">
            <div class="box-bd">
                <div class="prodetailCont">
                    <span class="title">项目概述（限制2000字以内）</span>
                    <textarea rows="6" class="input" name="summarize"><?php echo $xminfo['xmsummarize']?></textarea>
                </div>
                <table class="table-two-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>商业计划书文件：</label> 
                                <input type="text" placeholder="文件大小不超过10MB" value=<?php echo explode('/', $xminfo['xmpath'])[1]; ?> readonly class="input file_input"/> 
                                <a class="file"> <i class="icon4 icon-update"></i>上传文件
	                                <input type="file" name="attachment" >
	                            </a>
                                <label>只支持zip、jar格式</label>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</form>
<script type="text/javascript">
    var addproject = $("#saveproject-form").Validform({
        datatype: {
            "phone": function (value, obj, curform, datatype) {
                var regexp = /^[1][3-8]\d{9}$|^([6|9])\d{7}$|^[0][9]\d{8}$|^[6]([8|6])\d{5}$/;
                return regexp.test(value);
            },
            //身份证验证
            "idcard": function (gets, obj, curform, datatype) {
                var id_cart_type = $("#id_cart_type").val();
                if (id_cart_type == '2') {
                    return true;
                }
                var Wi = [7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1];// 加权因子;
                var ValideCode = [1, 0, 10, 9, 8, 7, 6, 5, 4, 3, 2];// 身份证验证位值，10代表X;
                if (gets.length == 15) {
                    return isValidityBrithBy15IdCard(gets);
                } else if (gets.length == 18) {
                    var a_idCard = gets.split("");// 得到身份证数组
                    if (isValidityBrithBy18IdCard(gets) && isTrueValidateCodeBy18IdCard(a_idCard)) {
                        return true;
                    }
                    return false;
                }
                return false;
                function isTrueValidateCodeBy18IdCard(a_idCard) {
                    var sum = 0; // 声明加权求和变量
                    if (a_idCard[17].toLowerCase() == 'x') {
                        a_idCard[17] = 10;// 将最后位为x的验证码替换为10方便后续操作
                    }
                    for (var i = 0; i < 17; i++) {
                        sum += Wi[i] * a_idCard[i];// 加权求和
                    }
                    valCodePosition = sum % 11;// 得到验证码所位置
                    if (a_idCard[17] == ValideCode[valCodePosition]) {
                        return true;
                    }
                    return false;
                }

                function isValidityBrithBy18IdCard(idCard18) {
                    var year = idCard18.substring(6, 10);
                    var month = idCard18.substring(10, 12);
                    var day = idCard18.substring(12, 14);
                    var temp_date = new Date(year, parseFloat(month) - 1, parseFloat(day));

                    if (temp_date.getFullYear() != parseFloat(year) || temp_date.getMonth() != parseFloat(month) - 1 || temp_date.getDate() != parseFloat(day)) {
                        return false;
                    }
                    return true;
                }

                function isValidityBrithBy15IdCard(idCard15) {
                    var year = idCard15.substring(6, 8);
                    var month = idCard15.substring(8, 10);
                    var day = idCard15.substring(10, 12);
                    var temp_date = new Date(year, parseFloat(month) - 1, parseFloat(day));
                    // 对于老身份证中的你年龄则不需考虑千年虫问题而使用getYear()方法
                    if (temp_date.getYear() != parseFloat(year) || temp_date.getMonth() != parseFloat(month) - 1 || temp_date.getDate() != parseFloat(day)) {
                        return false;
                    }
                    return true;
                }

            },
            //电话校验
            "iphone": function (gets, obj, curform, datatype) {
                var reg = /^1[3|4|5|7|8]\d{9}$/;
                return reg.test(gets);
            },

            "Email": function (gets, obj, curform, datatype) {
                if (gets == null || gets == undefined || gets == '') {
                    return true
                } else {
                    var emailreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                    return emailreg.test(gets);
                }
            },
            "Number": function (gets, obj, curform, datatype) {
                if (gets == null || gets == undefined || gets == '') {
                    return true
                } else {
                    var moreZero = /^[1-9]{1}[0-9]*([.]{1}[0-9]{1,2}){0,1}$/;
                    return moreZero.test(gets);
                }
            },

        },

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
        beforeCheck: function (curform) {
            $("#validatestatus").val('1');
        },
        beforeSubmit: function (curform) {
            $("#validatestatus").val('2');
            return false;
        }

    });

    $(function () {
        var match = $("#match_type").val();
//         selectcity('selid', 'subselid', 'adizhiname');
//         selectcity('selids', 'subselids', 'ncityname');
        if (match == "1") {/*by samdy  去掉科技和农村赛区分类的初始化*/
//            selecsaiqu('saiqu', 'saiquchengshi', 'saiqucity'); 
        }
       /*  if (match == '9') {
            selectncsaiqu('ncsaiqu', 'ncsaiqucs', 'ncsaiqucity') 
        } */
        if (match == '7') {
            selectTjdanwei('chengshi', 'xianshi', 'xianqu')
        }

        $('.tab-hd li').click(function () {
            $(this).addClass('on').siblings().removeClass('on');
            $('.tab-bd').find('.tab-content').eq($(this).index()).show();
            $('.tab-bd').find('.tab-content').eq($(this).index()).siblings().hide();
            setIframeHeight();
        });
        $('.alook').click(function () {
            //调用示例
            layer.photos({
                photos: '#layer-photos-demo',
                anim: 5
                //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
            });
        });

        //上传图片
        $(".file").on("change", "input[type='file']", function () {
            var filePath = $(this).val();
            var arr = filePath.split('\\');
            var fileName = arr[arr.length - 1];
           
            $(this).parent().parent().find('.input').val(fileName);
            $(this).parent().parent().find('.input').prop('title', fileName);
        });

        $(".number-input").on('input', function () {
            var val = $(this).val();
            var r = /^\+?[1-9][0-9]*$/;
            if (!r.test(val)) {
                $(this).val("");
            }
        });

        $('#saveproject-form').submit(function () {
            ajaxSubmit(this, {
                beforeSubmit: function () {
                },
                success: function (r, s) {
                    layer.alert(r.message, {
                        offset: '0px',
                        cancel: function (index) {
                            layer.close(index);
                            if (r.success) {
                                location.href = "zcb/admin.php?do=view";
                            }
                        }
                    }, function (index) {
                        layer.close(index);
                        if (r.success) {
                            location.href = "zcb/admin.php?do=view";
                        }
                    });
                }
            });
            return false;
        });
    });
    function submitInfo() {
        addproject.ajaxPost(false);
        var validate = $("#validatestatus").val();
        if (validate == '2') {
            $('#saveproject-form').submit();
        }
    }
    function hiddenShow(self) {
        if ($(self).val() == '4') {
            $(".zhuqiang").show();
            $(".ziqiang").hide();
            layer.alert('助残类团队须从事残疾人服务领域（可服务至少10名残疾人）或者能带动残疾人就业（可安排至少3名残疾人就业）的创业创新项目。', {offset: '0px'});
        } else {
            $(".ziqiang").show();
            $(".zhuqiang").hide();
            layer.alert('自强类团队核心成员须包含至少1名残疾人（持有第二代《中华人民共和国残疾人证》）', {offset: '0px'});
        }
    }
</script>
</body>
</html>