<!DOCTYPE html>
<html>
<head lang="en">
    <base href="/bmwebsite/">
    <meta charset="UTF-8">
	<title>首页</title>
	<link type="text/css" rel="stylesheet" href="plugins/validateform/style.css" />
    <link type="text/css" rel="stylesheet" href="plugins/bootstrap-3.3.0/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="plugins/bootstrap-table/bootstrap-table.min.css">
	<link type="text/css" rel="stylesheet" href="css/main.css" />
	<link type="text/css" rel="stylesheet" href="css/form.css" />
	<link type="text/css" rel="stylesheet" href="css/common.css" />
	
	<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="plugins/jquery-easyui-1.3.2/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap-3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap-table/bootstrap-table.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap-table/bootstrap-table-zh-CN.min.js"></script>
	<script type="text/javascript" src="plugins/validateform/Validform_v5.3.2_min.js"></script>
	<script type="text/javascript" src="plugins/layer/layer.js"></script>
	<script type="text/javascript" src="plugins/My97DatePicker/WdatePicker.js"></script>
	<script type="text/javascript" src="js/jquery.form.js"></script>
	<script type="text/javascript" src="js/function/loading.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
    
    <meta charset="UTF-8">
    
    <link type="text/css" rel="stylesheet" href="css/common.css" />
    <link type="text/css" rel="stylesheet" href="css/main.css" />

</head>
<body>

<div class="table-hd">
    <span class="title"><i class="ipinfo"></i>基本信息</span>
</div>
<div class="myinfo">
    <div class="imgtd">
        <img src="img/person.png"/>
    </div>
    <div>
        <table class="pinfo">
            <tr>
                <td class="center">用户账号：</td>
                <td><?php echo $userinfo['username'];?></td>
            </tr>

            <tr>
                <td class="center">申报类别：</td>
                <td>
                        <?php if($userinfo['companytype'] == 1){?>
                        	示范项目申报
                        <?php }else if($userinfo['companytype'] == 2){?>
                        	示范县申报
                        <?php }else if($userinfo['companytype'] == 3){?>
                        	示范园区申报
                        <?php }?>
                </td>
            </tr>
            <tr>
                <td class="center">审核进度：</td>
                <td>
                        <?php if($xminfo['ispass'] == 1){?>报名信息已提交<?php }else if($xminfo['ispass'] == 2){?>报名信息已经审核通过<?php }else if($xminfo['ispass'] == 3){?>报名信息已经拒绝<?php }else{?>报名信息未提交<?php }?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a class="btn btn-green" onclick="window.parent.document.getElementById('signup-a').click();">
                        立即填写报名信息
                        
                    </a></td>
            </tr>
            </sec:authorize>
        </table>
    </div>
</div>

<div class="table-hd">
    <span class="title"><i class="iflow"></i>大赛流程</span>
</div>
<div class="flow-img">
    <img src="img/lc.jpg">
</div>
<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/iframe.js"></script>

</body>
</html>