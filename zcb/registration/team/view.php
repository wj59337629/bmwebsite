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
				window.href.location="zcb/admin.php?do=edit";
			}
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
    <span>资格审核：<i class="reason"><?php if($xminfo['ispass'] == 1){?>已提交<?php }else if($xminfo['ispass'] == 2){?>已审核<?php }else if($xminfo['ispass'] == 3){?>已拒绝<?php }else{?>未提交<?php }?></i></span>
    <br>
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
                                <label>姓名：</label> 
                                <?php echo $xminfo['teampsnname']?>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>学历：</label>
                                <?php if($xminfo['education'] == 1){?>
                                	博士
                                	<?php }else if($xminfo['education'] == 2){?>
                                	硕士
                                	<?php }else if($xminfo['education'] == 3){?>
                                	本科
                                	<?php }else if($xminfo['education'] == 4){?>
                                	大专
                                	<?php }else if($xminfo['education'] == 5){?>
                                	中专
                                	<?php }else if($xminfo['education'] == 7){?>
                                	中技
                                	<?php }else if($xminfo['education'] == 8){?>
                                	高技
                                	<?php }else if($xminfo['education'] == 6){?>
                                	其他
                                	<?php }?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>性别：</label>  
                                <?php if($xminfo['gender'] == 1){?>
                                	男
                                	<?php }else{?>
                                	女
                                	<?php }?>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>出生日期：</label> 
                                <?php echo $xminfo['birthday']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>证件类型：</label> 
                                    <?php if($xminfo['id_card_type'] == '01'){?>
                                    	居民身份证（户口簿）
                                    <?php }else if($xminfo['id_card_type'] == '04'){?>
                                    	香港特区护照/港澳居民来往内地通行证
                                    <?php }else if($xminfo['id_card_type'] == '05'){?>
                                    	澳门特区护照/港澳居民来往内地通行证
                                    <?php }else if($xminfo['id_card_type'] == '06'){?>
                                    	台湾居民来往大陆通行证
                                    <?php }else if($xminfo['id_card_type'] == '07'){?>
                                    	外国人永久居留证
                                    <?php }else if($xminfo['id_card_type'] == '08'){?>
                                    	外国人护照
                                    <?php }else if($xminfo['id_card_type'] == '80'){?>
                                    	香港居民身份证
                                    <?php }else{?>
                                    	澳门居民身份证
                                    <?php }?>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>证件号码：</label> 
                                <?php echo $xminfo['idcard']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>毕业/就读学校：</label> 
                                <?php echo $xminfo['graduation']?>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>毕业时间：</label> 
                                <?php echo $xminfo['bydate']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    	<td>
                            <div class="group">
                                <label>所读专业：</label> 
                                <?php echo $xminfo['zhuanye']?>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>电子邮箱：</label> 
                                <?php echo $xminfo['email']?>
                            </div>
                        </td>
                    </tr>
                   <tr>
                   		<td>
                            <div class="group">
                                <label>手机号码：</label> 
                                <?php echo $xminfo['tel']?>
                            </div>
                        </td>
                         <td>
                            <div class="group">
                                <label>团队名称：</label> 
                                <?php echo $xminfo['gsname']?>
                            </div>
                        </td>
<!--                         <td> -->
<!--                             <div class="group"> -->
<!--                                 <label>QQ号码：</label> 
                                <?php echo $xminfo['qq']?> -->
<!--                             </div> -->
<!--                         </td> -->
                    </tr>
                     <tr>
                   		<td>
                            <div class="group">
                                <label>团队人数：</label> 
                                <?php echo $xminfo['teampeoplenum']?>
                            </div>
                        </td>
                         <td>
                            <div class="group">
                                <label>团队注册资金(万)：</label> 
                                <?php echo $xminfo['zcmny']?>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="prodetailCont">
                    <span class="title">个人简历及主要成就（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"><?php echo $xminfo['jlcontent']?></textarea>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-hd">（二）股东信息</div>
            <div class="box-bd">
                <table class="table-two-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>团队名称：</label> 
                                <?php echo $xminfo['gsname']?>
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>股东数量：</label> <?php echo $nums;?>
                            </div>
                        </td>
                    </tr>
                </table>
                <table class="table-list">
                    <thead>
                    <tr>
                        <th>姓名</th>
                        <th>投资占比(%)</th>
                        <th>投资金额(万)</th>
                        <th>投资类型</th>
<!--                         <th>性别</th> -->
<!--                         <th>学历</th> -->
<!--                         <th>出生日期</th> -->
<!--                         <th>毕业时间</th> -->
<!--                         <th>手机号码</th> -->
<!--                         <th>所属群体身份证明</th> -->
                    </tr>
                    </thead>
                    <tbody>
                    	<?php if($xmgdinfos == null){?>
                        <tr>
                            <td colspan="7">尚未添加团队股东</td>
                        </tr>
                        <?php }else{
                        	foreach ($xmgdinfos as $row){
                        		?>
                        			<tr>
                        				<td><?php echo $row['gdname']?></td>
                        				<td><?php echo $row['tzbfb']?></td>
                        				<td><?php echo $row['tzmny']?></td>
                        				<td><?php echo $row['tztype']?></td>
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
                <table class="table-one-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>赛事名称：</label> 豫创天下大赛
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>项目名称：</label> 
                                <?php echo $xminfo['xmname']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>行业：</label>
                                <?php echo $xminfo['xmtype']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>项目地址：</label> 
                                <?php echo $xminfo['xmselid'].$xminfo['xmsubselid']?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>项目具体地址：</label> 
                                <?php echo $xminfo['xmaddress']?>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="prodetailCont">
                    <span class="title">项目摘要（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"><?php echo $xminfo['xminstroduce']?></textarea>
                </div>
                <div class="prodetailCont">
                    <span class="title">获得国家专利/知识产权情况（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"><?php echo $xminfo['zlinfo']?></textarea>
                </div>
                  <div class="prodetailCont">
                    <span class="title">软件著作权获得情况（限制1000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"><?php echo $xminfo['rjzzinfo']?></textarea>
                </div>
                 <div class="prodetailCont">
                    <span class="title">注册商标获得情况（限制1000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"><?php echo $xminfo['zcsbinfo']?></textarea>
                </div>
                <div class="prodetailCont">
                    <span class="title">项目主要获奖情况（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"><?php echo $xminfo['otherinfo']?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="box">
            <div class="box-bd">

                <div class="prodetailCont">
                    <span class="title">项目概述（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"><?php echo $xminfo['xmsummarize']?></textarea>
                </div>
                <table class="table-one-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>商业计划书文件：</label> 
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
                <label><input type="checkbox" id="promiseBox"/>（本人承诺，此次报名参加2019年河南豫创天下创业创新大赛，所提交的申请材料和所附资料均真实合法，如有不实之处，本人愿意承担相应的法律责任，并承担由此产生的一切后果。）</label>
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