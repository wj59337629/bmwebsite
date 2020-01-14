<!DOCTYPE html>
<html>
<head>
    <base href="/bmwebsite/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=8"/>
    <title>团队项目信息详情</title>
    <link type="text/css" rel="stylesheet" href="css/common.css"/>
    <link type="text/css" rel="stylesheet" href="css/main.css"/>
    <link type="text/css" rel="stylesheet" href="css/form.css"/>
    <script type="text/javascript">
		function oncheckinfo(){
			var ispassflag = $('#ispassinfo').val();
			if(ispassflag == 1 || ispassflag == 2){
				 layer.alert('当前审核状态不能修改数据', {offset: '0px'});
				 return false;
			}else{
				window.location.href="zcb/admin.php?do=edit";
			}
		}

		function searchcomment(){
			 layer.alert('<?php echo $xminfo['comment']?>', {offset: '0px',title:'审核信息查看'});
		}
    </script>
</head>
<body>
<div class="form-hd cf">
    <span><i class="ilookinfo"></i>报名信息</span>
    <div class="fr fixright">
       <!--  <a onclick="window.parent.document.getElementById('addmember').click();"><i class="icon icon9"></i>团队成员</a> -->
        <a onclick="oncheckinfo();"><i class="icon icon9"></i>完善报名信息</a>
        <a onclick="deleteInfo();"><i class="icon icon4"></i>删除</a> 
        <a onclick="preSubmitInfo();"><i class="icon icon7"></i>提交报名信息</a> 
    </div>
</div>
<div class="form-statue">
	<input type="hidden" id="ispassinfo" value="<?php echo $xminfo['ispass']?>"/>
    <span>资格审核：<i class="reason"><?php if($xminfo['ispass'] == 1){?>已提交<?php }else if($xminfo['ispass'] == 2){?>审核通过<a style="color: blue;float:right;" onclick="searchcomment()">查看审核意见</a><?php }else if($xminfo['ispass'] == 3){?>已拒绝<?php }else{?>未提交<?php }?></i></span>
    <br>
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
                        <td>
                            <div class="group">
                                <label>所属省辖市或直管县(市)：</label> 
                                <?php echo $xminfo['xmselid'].$xminfo['xmsubselid']?>
                            </div>
                        </td>
                    </tr>
                     <tr>
                    	<td colspan=2 style="width: 100%">
                    		<div class="group">
                                <label><i class="red">*</i>创业实体名称：</label> 
                                <?php echo $xminfo['gsname']?>
                            </div>
                    	</td>
                    </tr>
                     <tr>
                    	<td colspan=2 style="width: 100%">
                    		<div class="group">
                                <label><i class="red">*</i>创业实体类型：</label> 
                                <?php echo $xminfo['gstype']?>
                            </div>
                    	</td>
                    </tr>
                    <tr>
                    	 <td>
                            <div class="group">
                                <label><i class="red">*</i>注册成立时间：</label> 
                                <?php echo $xminfo['startdate']?>
                            </div>
                        </td>
                        <td>
                        	 <div class="group">
                                <label><i class="red">*</i> 营业执照注册号：</label> 
                               <?php echo $xminfo['yyzzcode']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    	<td>
                    		<div class="group">
                                <label>所属行业：</label> 
                                <?php echo $xminfo['industryinfo']?>
                            </div>
                    	</td>
                    	<td> 
                            <div class="group"> 
                                <label>吸纳就业人数：</label> 
                                <?php echo $xminfo['jypeoplenum']?>
                           </div> 
                        </td>
                    </tr>
                     <tr>
                    	<td>
                    		<div class="group">
                                <label>其中农村劳动力转移人数：</label> 
                                <?php echo $xminfo['nczypeoplenum']?>
                            </div>
                    	</td>
                    	<td> 
                            <div class="group"> 
                                <label>贫困家庭劳动力人数：</label> 
                                <?php echo $xminfo['pkjtpeoplenum']?>
                           </div> 
                        </td>
                    </tr>
                     <tr>
                    	<td>
                    		<div class="group">
                                <label>创业实体总资产：</label> 
                               <?php echo $xminfo['totalmny']?>
                            </div>
                    	</td>
                    	<td> 
                            <div class="group"> 
                                <label>年利润：</label> 
                                <?php echo $xminfo['lrinfo']?>
                           </div> 
                        </td>
                    </tr>
                     <tr>
                    	<td>
                    		<div class="group">
                                <label>年销售收入：</label> 
                                <?php echo $xminfo['xssr']?>
                            </div>
                    	</td>
                    	<td> 
                            <div class="group"> 
                                <label>团队注册资金(万)：</label> 
                                <?php echo $xminfo['zcmny']?>
                           </div> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i>法人姓名：</label> 
                                <?php echo $xminfo['teampsnname']?>
                                <input type="hidden" name="id" value="<?php echo $xminfo['id']?>"> 
                                <input type="hidden" id="validatestatus" value="<?php echo $xminfo['ispass']?>">
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i>性别：</label> 
                                <?php if($xminfo['gender'] == 1){?>
                                	男
                                	<?php }else if($xminfo['gender'] == 2){?>
                                	女
                                	<?php }?>
                            </div>
                        </td>
                    </tr>
                     <tr>
                        <td colspan="2" style="width: 100%">
                            <div class="group">
                                <label><i class="red">*</i> 户口所在地：</label> 
                                <?php echo $xminfo['hkaddress']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    	 <td>
                            <div class="group">
                                <label><i class="red">*</i> 身份证号码：</label> 
                                <?php echo $xminfo['idcard_no']?>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 手机号码：</label> 
                                <?php echo $xminfo['tel']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="width: 100%">
                            <div class="group">
                                <label><i class="red">*</i> 经营场所地址：</label> 
                               <?php echo $xminfo['jycs_address']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="width: 100%">
                            <div class="group">
                                <label><i class="red">*</i> 开户名：</label> 
                                <?php echo $xminfo['khname']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    	 <td>
                            <div class="group">
                                <label><i class="red">*</i> 开户行：</label> 
                                <?php echo $xminfo['khbank']?>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label><i class="red">*</i> 银行账号：</label> 
                                <?php echo $xminfo['bank_no']?>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="prodetailCont">
                    <span class="title">项目简介（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"><?php echo $xminfo['xminstroduce']?></textarea>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-hd">（二）享受其他创业扶持政策情况</div>
            <div class="box-bd">
                <table class="table-list" style="table-layout: auto">
                    <thead>
                    <tr>
                        <th>政策名称</th>
                        <th>享受时间</th>
                        <th>享受金额(万)</th>
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
                    <textarea rows="6" class="input" name="digest"><?php echo $xminfo['bgs_suggest']?></textarea>
                </div>
                <div class="prodetailCont">
                    <span class="title">所在省辖市、直管县返乡创业工作领导小组意见</span>
                    <textarea rows="6" class="input" name="patent"><?php echo $xminfo['leader_suggest']?></textarea>
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
                                <label>附件信息：</label> 
                                <a href="zcb/down.php?urls=<?php echo $xminfo[xmpath]?>"><?php echo explode('/', $xminfo['xmpath'])[1]?></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

    </div>
    
        <div id="submitDialog" class="submitDialog">
            <h1><span>提供材料真实性承诺</span></h1>
            <div class="bd">
                <label><input type="checkbox" id="promiseBox"/>（本人承诺，此次报名参加2019年河南省人社厅返乡创业项目申报，所提交的申请材料和所附资料均真实合法，如有不实之处，本人愿意承担相应的法律责任，并承担由此产生的一切后果。）</label>
            </div>
            <div class="fd">
                <button id="submitBtn" onclick="submitInfo();" disabled="disabled" class="btn btn-blue">提交</button>
            </div>
        </div>
    

    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="plugins/layer/layer.js"></script>
    <script type="text/javascript" src="js/iframe.js"></script>
    <script type="text/javascript" src="js/function/loading.js"></script>
    <script type="text/javascript">
        $(function () {
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
            $("#promiseBox").change(function () {
                if ($(this).is(':checked')) {
                    $("#submitBtn").removeAttr("disabled");
                } else {
                    $("#submitBtn").attr("disabled", "disabled");
                }
            });
        });
        var submitDialog = null;
        function preSubmitInfo() {
            submitDialog = layer.open({
                offset: '0px',
                type: 1,
                title: '提交报名信息',
                content: $('#submitDialog')
            });
        }
        function submitInfo() {
            ajaxRequest({
                url: 'zcb/admin.php?do=datasubmit',
                data: {
                    promise: 1
                },
                success: function (result) {
                    layer.alert(result.message, {
                        offset: '0px',
                        cancel: function (index) {
                            layer.close(index);
                            if (result.success) {
                                submitDialog && layer.close(submitDialog);
                                location.reload();
                            }
                        }
                    }, function (index) {
                        layer.close(index);
                        if (result.success) {
                            submitDialog && layer.close(submitDialog);
                            location.reload();
                        }
                    });
                }
            });
        }
        function deleteInfo() {
            layer.confirm('该操作将删除报名信息，不会删除参赛者账号', {offset: '0px', icon: 7}, function () {
            	var ispassflag = $('#ispassinfo').val();
    			if(ispassflag == 1 || ispassflag == 2){
    				 layer.alert('当前审核状态不能删除报名数据', {offset: '0px'});
    				 return false;
    			}else{
    				 ajaxRequest({
    	                    url: 'zcb/admin.php?do=delete',
    	                    success: function (result) {
    	                        layer.alert(result.message, {
    	                            offset: '0px',
    	                            cancel: function (index) {
    	                                layer.close(index);
    	                                if (result.success) {
    	                                    if (parent.location.reload) {
    	                                        parent.location.reload();
    	                                    } else {
    	                                        location.reload();
    	                                    }
    	                                }
    	                            }
    	                        }, function (index) {
    	                            layer.close(index);
    	                            if (result.success) {
    	                                if (parent.location.reload) {
    	                                    parent.location.reload();
    	                                } else {
    	                                    location.reload();
    	                                }
    	                            }
    	                        });
    	                    }
    	                });
    			}
            });
        }
        //撤销提交审核
        function CancelSubmitInfo() {
            layer.confirm('取消提交?', {offset: '0px', icon: 7}, function () {
                ajaxRequest({
                    url: 'registration/team/cancelSubmit.sjson',
                    data: {
                        id:7382
                    },
                    success: function (result) {
                        layer.alert(result.message, {
                            offset: '0px',
                            cancel: function (index) {
                                layer.close(index);
                                if (result.success) location.reload();
                            }
                        }, function (index) {
                            layer.close(index);
                            if (result.success) location.reload();
                        });
                    }
                });
            });
        }
    </script>
</div>
</body>
</html>