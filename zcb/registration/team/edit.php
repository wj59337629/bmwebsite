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
    <script type="text/javascript" src="js/function/loading.js?v=<?php echo time();?>"></script>
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
                <li class="on">创业申报信息</li><li>相关部门审批意见</li><li>资料提交</li>
            </ul>
            
<div class="tab-bd">
    <div class="tab-content" style="display: block">
        <div class="box">
            <div class="box-hd">（一）<?php if($userinfo['companytype'] == 1){?>创业示范项目<?php }?>申报信息(单位:人、万元)</div>
            <div class="box-bd">
                <table class="table-two-column">
                	<tr>
                        <td colspan="2">
                            <div class="group">
                                <label><i class="red">*</i> 所属省辖市或直管县(市)：</label> 
                                <input type="hidden" id="adizhiname" value="">
                                <input type="hidden" id="ashenfenname" value="">
                                <select
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
                    	<td colspan=2 style="width: 100%">
                    		<div class="group">
                                <label><i class="red">*</i>创业实体名称：</label> 
                                <input class="input" type="text" name="gsname" maxlength="70" style="width: 450px" value="<?php echo $xminfo['gsname']?>" placeholder="请输入创业实体姓名"/>
                            </div>
                    	</td>
                    </tr>
                    <tr>
                    	<td colspan=2 style="width: 100%">
                    		<div class="group">
                                <label><i class="red">*</i>创业实体类型：</label> 
                                <input  type="checkbox" name="gstype[]" <?php if(strpos($xminfo['gstype'], '企业') !== false){?>checked="checked"<?php }?> value="企业"/>企业
                                <input  type="checkbox" name="gstype[]" <?php if(strpos($xminfo['gstype'], '农民专业合作社') !== false){?>checked="checked"<?php }?> value="农民专业合作社"/>农民专业合作社
                                <input  type="checkbox" name="gstype[]" <?php if(strpos($xminfo['gstype'], '家庭农场') !== false){?>checked="checked"<?php }?> value="家庭农场"/>家庭农场
                                <input  type="checkbox" name="gstype[]" <?php if(strpos($xminfo['gstype'], '乡村旅游类') !== false){?>checked="checked"<?php }?> value="乡村旅游类"/>乡村旅游类
                                <input  type="checkbox" name="gstype[]" <?php if(strpos($xminfo['gstype'], '其他') !== false){?>checked="checked"<?php }?> value="其他"/>其他
                            </div>
                    	</td>
                    </tr>
                    <tr>
                    	 <td>
                            <div class="group">
                                <label><i class="red">*</i>注册成立时间：</label> 
                                <input class="input Wdate" onClick="WdatePicker()" readonly type="text" name="startdate"  value="<?php echo $xminfo['startdate']?>"/>
                            </div>
                        </td>
                        <td>
                        	 <div class="group">
                                <label><i class="red">*</i> 营业执照注册号：</label> 
                                <input class="input" type="text" placeholder="请输入营业执照注册号" maxlength="30" name="yyzzcode"  value="<?php echo $xminfo['yyzzcode']?>"/>
                            </div>
                        </td>
                    </tr>
                     <tr>
                    	<td>
                    		<div class="group">
                                <label>所属行业：</label> 
                                <input class="input" type="text" name="industryinfo" maxlength="35" placeholder="请输入所属行业" value="<?php echo $xminfo['industryinfo']?>" />
                            </div>
                    	</td>
                    	<td> 
                            <div class="group"> 
                                <label>吸纳就业人数：</label> <input class="input" type="text" name="jypeoplenum" maxlength="30" placeholder="请输入吸纳就业人数" value="<?php echo $xminfo['jypeoplenum']?>"/>
                           </div> 
                        </td>
                    </tr>
                     <tr>
                    	<td>
                    		<div class="group">
                                <label>其中农村劳动力转移人数：</label> 
                                <input class="input" type="text" name="nczypeoplenum" maxlength="35" placeholder="请输入农村劳动力转移人数" value="<?php echo $xminfo['nczypeoplenum']?>" />
                            </div>
                    	</td>
                    	<td> 
                            <div class="group"> 
                                <label>贫困家庭劳动力人数：</label> <input class="input" type="text" name="pkjtpeoplenum" maxlength="30" placeholder="请输入贫困家庭劳动力人数" value="<?php echo $xminfo['pkjtpeoplenum']?>"/>
                           </div> 
                        </td>
                    </tr>
                     <tr>
                    	<td>
                    		<div class="group">
                                <label>创业实体总资产：</label> 
                                <input class="input" type="text" name="totalmny" maxlength="35" placeholder="请输入创业实体总资产" value="<?php echo $xminfo['totalmny']?>" />
                            </div>
                    	</td>
                    	<td> 
                            <div class="group"> 
                                <label>年利润：</label> <input class="input" type="text" name="lrinfo" maxlength="30" placeholder="请输入年利润" value="<?php echo $xminfo['lrinfo']?>"/>
                           </div> 
                        </td>
                    </tr>
                     <tr>
                    	<td>
                    		<div class="group">
                                <label>年销售收入：</label> 
                                <input class="input" type="text" name="xssr" maxlength="35" placeholder="请输入年销售收入" value="<?php echo $xminfo['xssr']?>" />
                            </div>
                    	</td>
                    	<td> 
                            <div class="group"> 
                                <label>团队注册资金(万)：</label> <input class="input" type="text" name="zcmny" maxlength="30" placeholder="请输入注册资金" value="<?php echo $xminfo['zcmny']?>"/>
                           </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i>法人姓名：</label> 
                                <input class="input" type="text" name="leader" maxlength="35" value="<?php echo $xminfo['teampsnname']?>" placeholder="请输入法人姓名"/>
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
                        <td colspan="2" style="width: 100%">
                            <div class="group">
                                <label><i class="red">*</i> 户口所在地：</label> 
                                <input class="input" type="text" style="width: 450px" placeholder="请输入户口所在地址" name="hkaddress" maxlength="70"
                                                                                   value="<?php echo $xminfo['hkaddress']?>"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    	 <td>
                            <div class="group">
                                <label><i class="red">*</i> 身份证号码：</label> 
                                <input class="input" type="text" placeholder="请输入证件号码" maxlength="20" name="idcard_no"  value="<?php echo $xminfo['idcard_no']?>"/>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 手机号码：</label> 
                                <input class="input" type="text" placeholder="请输入手机号码" maxlength="20" name="tel"  value="<?php echo $xminfo['tel']?>"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="width: 100%">
                            <div class="group">
                                <label><i class="red">*</i> 经营场所地址：</label> 
                                <input class="input" type="text" style="width: 450px" placeholder="请输入经营场所地址" name="jycs_address" maxlength="70"
                                                                                   value="<?php echo $xminfo['jycs_address']?>"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="width: 100%">
                            <div class="group">
                                <label><i class="red">*</i> 开户名：</label> 
                                <input class="input" type="text" style="width: 450px" placeholder="请输入开户名" name="khname" maxlength="70"
                                                                                   value="<?php echo $xminfo['khname']?>"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    	 <td>
                            <div class="group">
                                <label><i class="red">*</i> 开户行：</label> 
                                <input class="input" type="text" placeholder="请输入开户行" maxlength="20" name="khbank"  value="<?php echo $xminfo['khbank']?>"/>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 银行账号：</label> 
                                <input class="input" type="text" placeholder="请输入银行账号" maxlength="20" name="bank_no"  value="<?php echo $xminfo['bank_no']?>"/>
                            </div>
                        </td>
                    </tr>
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
                    <span class="title">项目简介（限制2000字以内）</span>
                    <textarea rows="6" class="input" name="xminstroduce" placeholder="产品、市场机会、核心优势及项目最新进展情况"><?php echo $xminfo['xminstroduce']?></textarea>
                </div>
            </div>
        </div>
        <div class="box">
             <div class="box-hd">（二）享受其他创业扶持政策情况</div>
             <div class="table-toolbar cf">
		
				<button type="button" onclick="operMember('新增信息','zcb/admin.php?do=toaddProjectMember')" class="btn btn-blue">新增信息</button>
			
			</div>
            <div class="box-bd">
                <table class="table-list" style="table-layout: auto">
                    <thead>
                    <tr>
                        <th>政策名称</th>
                        <th>享受时间</th>
                        <th>享受金额(万)</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    	<?php if($xmzcinfos == null){?>
                        <tr>
                            <td colspan="7">尚未添加创业扶持政策信息</td>
                        </tr>
                        <?php }else{
                        	foreach ($xmzcinfos as $row){
                        		?>
                        			<tr>
                        				<td><?php echo $row['zcname']?></td>
                        				<td><?php echo $row['zcdate']?></td>
                        				<td><?php echo $row['mnyinfo']?></td>
                        				<td><a style="color: blue" onclick="deleteMember('<?php echo $row[bid]?>')">删除</a></td>
                        			</tr>
                        		<?php 
                        			}
                        	?>
                    
                    	<?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="box">
            <div class="box-bd">
                <div class="prodetailCont">
                    <span class="title"><i class="red">*</i> 所在省辖市、直管县返乡创业工作领导小组办公室意见</span>
                    <textarea rows="6" class="input" name="bgs_suggest"><?php echo $xminfo['bgs_suggest']?></textarea>
                </div>
                <div class="prodetailCont">
                    <span class="title">所在省辖市、直管县返乡创业工作领导小组意见</span>
                    <textarea rows="6" class="input" name="leader_suggest"><?php echo $xminfo['leader_suggest']?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="box">
            <div class="box-bd">
                <table class="table-two-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>附件上传：</label> 
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
           console.log(this);
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
<script type="text/javascript">
		function operMember(title, url) {
			layer.open({
				offset: '60%',
				type : 2,
				title : title,
				area : [ '500px', '30%' ],
				content : url,
				modal:false
			//iframe的url
			});
		}

		function deleteMember(code) {
			ajaxRequest({
				confirmMsg: "确定删除?",
				styleinfo:{offset:'60%'},
				url: "zcb/admin.php?do=todelProjectMember",
				data: {
					id: code
				},
				success: function(result){
					var success = function(index){
						layer.close(index);
						if(result.success){
							location.reload();
						}
					};
					layer.alert(result.message, {
						offset: '60%',
						cancel: success
					}, success);
				}
			});
		}
	</script>
</body>
</html>