


<!DOCTYPE html>
<html>
<head lang="en">
    <base href="/bmwebsite/">
    <meta charset="UTF-8">
	<title>修改密码</title>
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

<style type="text/css">
#Validform_msg{display:none !important;}
</style>

</head>
<body>

	<div class="form-hd cf">
		<span><i class="ieditinfo"></i>修改密码</span>
	</div>
	<form class="saveproject-form" action="zcb/admin.php?do=changePwdMana">
		<div class="form-bd">
			<table class="table-one-column">
				<tr>
					<td>
						<div class="group">
							<label><span>*</span>旧密码：</label> <input class="input" type="password" name="password" /><input type="hidden" id="validatestatus">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="group">
							<label><span>*</span>新密码：</label> <input class="input" type="password" name="newpassword" />
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="group">
							<label><span>*</span>确认密码：</label> <input class="input" type="password" name="repassword" />
						</div>
					</td>
				</tr>
			</table>
			<div class="opers">
				<button type="submit" class="btn btn-blue">提交</button>
			</div>
		</div>
	</form>


	<script type="text/javascript">
        $(function(){

            $('.tab-hd li').click(function(){
                 $(this).addClass('on').siblings().removeClass('on');
                 $('.tab-bd').find('.tab-content').eq($(this).index()).show();
                 $('.tab-bd').find('.tab-content').eq($(this).index()).siblings().hide();
             });
        
            $(".saveproject-form").Validform({
                tiptype:3,
                ajaxPost:true,
        		callback:function(data){
        			layer.msg(data.message, {
						time : 2000
					}, function() {
						if (data.success) {
	    					location.reload();
						}
					}); 
        		}
            });
        });
    </script>

</body>
</html>