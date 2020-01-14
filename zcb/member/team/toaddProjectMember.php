<!DOCTYPE html>
<html>
<head lang="en">
    <base href="/bmwebsite/">
    <meta charset="UTF-8">
	<title></title>
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
    
</head>
<body>

	<div class="form-hd">
		打“<i>*</i>”为必填项
	</div>
	<form id="add-form" action="zcb/admin.php?do=saveTeamMember" method="post" enctype="multipart/form-data" onkeydown="if(event.keyCode==13)return false;">
		<div class="form-bd dialog-form">
				<input type="hidden" name="hid" value="">
				<div class="group">
					<label><span>*</span>政策名称</label> <input type="text" class="input" name="zcname" maxlength="30" datatype="*" nullmsg="政策名称不能为空" />
				</div>
<!-- 				<div class="group"> -->
<!-- 					<label><span>*</span>身份证</label> <input type="text" class="input" name="id_card_no" maxlength="30" datatype="*" nullmsg="身份证不能为空" /> -->
<!-- 				</div> -->
<!-- 				<div class="group"> -->
<!-- 					<label><span>*</span>性别</label> <select class="input" name="gender" datatype="*" nullmsg="请选择性别"> -->
<!-- 						<option value="1">男</option> -->
<!-- 						<option value="2">女</option> -->
<!-- 					</select> -->
<!-- 				</div> -->
<!-- 				<div class="group">
					<label><span>*</span>出生日期</label> <input type="text" class="input Wdate" name="birthday" onclick="WdatePicker()" datatype="man" nullmsg="出生日期不能为空" errormsg="年龄必须≥18岁" />
 				</div> -->
<!-- 				<div class="group"> -->
<!-- 					<label><span>*</span>学历</label> <select class="input" name="degree" datatype="*" nullmsg="学历不能为空"> -->
<!-- 						<option value="1">博士</option> -->
<!-- 						<option value="2">硕士</option> -->
<!-- 						<option value="3">本科</option> -->
<!-- 						<option value="4">大专</option> -->
<!-- 						<option value="5">中专</option> -->
<!-- 						<option value="7">中技</option> -->
<!-- 						<option value="8">高技</option> -->
<!-- 						<option value="6">其他</option> -->
<!-- 					</select> -->
<!-- 				</div> -->
<!-- 				<div class="group"> 
					<label><span>*</span>毕业时间</label> <input type="text" class="input Wdate" name="grad_date" onclick="WdatePicker()" datatype="*" nullmsg="毕业时间不能为空" />
				</div> -->
<!-- 				<div class="group"> -->
<!-- 					<label><span>*</span>手机号码</label> <input type="text" name="tel" class="input" datatype="phone" nullmsg="手机号码不能为空" errormsg="手机号码格式错误" /> -->
<!-- 				</div> -->
				<div class="group">
					<label><span>*</span>享受时间</label> <input type="text" class="input Wdate" name="zcdate" onclick="WdatePicker()" datatype="*" nullmsg="享受时间不能为空" />
				</div>
				<div class="group">
					<label><span>*</span>享受金额(万)</label> <input type="text" name="mnyinfo" class="input" datatype="*" nullmsg="享受金额不能为空" />
				</div>
		</div>
		<div class="form-fd">
			<button type="submit" class="btn btn-blue">提交</button>
		</div>
	</form>
	<script type="text/javascript">
		var addproject = $("#add-form").Validform({
			datatype : {
				"phone": function(value, obj, curform, datatype) {
					var regexp = /^[1][3-8]\d{9}$|^([6|9])\d{7}$|^[0][9]\d{8}$|^[6]([8|6])\d{5}$/;
					return regexp.test(value);
				},
				//身份证验证
				"idcard" : function(gets, obj, curform, datatype) {
					//该方法由佚名网友提供;
					var Wi = [ 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1 ];// 加权因子;
					var ValideCode = [ 1, 0, 10, 9, 8, 7, 6, 5, 4, 3, 2 ];// 身份证验证位值，10代表X;
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
				"man" : function(gets, obj, curform, datatype) {
					if (gets == null || gets == undefined || gets == '') { 
					  return false;
						} 
					var age=jsGetAge(gets);
					if(age<18||age>100){
						return false;
					}
					return true;
					
					function jsGetAge(strBirthday){         
					    var returnAge;  
					    var strBirthdayArr=strBirthday.split("-");  
					    var birthYear = strBirthdayArr[0];  
					    var birthMonth = strBirthdayArr[1];  
					    var birthDay = strBirthdayArr[2];  
					    d = new Date();  
					    var nowYear = d.getFullYear();  
					    var nowMonth = d.getMonth() + 1;  
					    var nowDay = d.getDate();  
					      
					    if(nowYear == birthYear){  
					        returnAge = 0;//同年 则为0岁  
					    }  
					    else{  
					        var ageDiff = nowYear - birthYear ; //年之差  
					        if(ageDiff > 0){  
					            if(nowMonth == birthMonth) {  
					                var dayDiff = nowDay - birthDay;//日之差  
					                if(dayDiff < 0)  
					                {  
					                    returnAge = ageDiff - 1;  
					                }  
					                else  
					                {  
					                    returnAge = ageDiff ;  
					                }  
					            }  
					            else  
					            {  
					                var monthDiff = nowMonth - birthMonth;//月之差  
					                if(monthDiff < 0)  
					                {  
					                    returnAge = ageDiff - 1;  
					                }  
					                else  
					                {  
					                    returnAge = ageDiff ;  
					                }  
					            }  
					        }  
					        else  
					        {  
					            returnAge = -1;//返回-1 表示出生日期输入错误 晚于今天  
					        }  
					    }  
					    return returnAge;//返回周岁年龄  
					}
				}

			},
			tiptype :3,
			beforeSubmit : function(curform) {
				ajaxSubmit('#add-form', {
					beforeSubmit : function() {

					},
					success : function(result) {
						var success = function(index){
							layer.close(index);
							if(result.success){
								parent.location.reload();
							}
						};
						layer.alert(result.message, {
							offset: '0px',
							cancel: success
						}, success);
					}
				});
				return false;
			}
		});

		$(function() {
			$('body').addClass('dialog-bd');
			$('.iscj').hide();
			$('.tab-hd li').click(function() {
				$(this).addClass('on').siblings().removeClass('on');
				$('.tab-bd').find('.tab-content').eq($(this).index()).show();
				$('.tab-bd').find('.tab-content').eq($(this).index()).siblings().hide();
			});
			$('.alook').click(function() {
				//调用示例
				layer.photos({
					photos : '#layer-photos-demo',
					anim : 5
				//0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
				});
			});

			//上传附件
			$(".file").on("change", "input[name='identifications']", function() {
				var filePath = $(this).val();
				var arr = filePath.split('\\');
				var fileName = arr[arr.length - 1];
				$(".filepath").val(fileName);
			})
			$(".file").on("change", "input[name='id_card_files']", function() {
				var filePath = $(this).val();
				var arr = filePath.split('\\');
				var fileName = arr[arr.length - 1];
				$(".filepath1").val(fileName);
			})
		});
		function isCj(obj){
			var iscj=obj.value;
			if(iscj=='1'){
				$('.iscj').show()
			}else{
				$('.iscj').hide()
			}
		}
	</script>

</body>
</html>