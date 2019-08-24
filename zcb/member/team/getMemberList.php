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

	<div class="table-hd">
		<span class="title"><i class="itable"></i>团队股权信息列表(团队股东数：<span><?php echo $nums;?></span>)</span>
	</div>

	<div class="table-bd diytable">
<!-- 		<div class="waring">温馨提示：请至少填写1个股东</div> -->
		
		<div class="table-toolbar cf">
		
			<button type="button" onclick="operMember('新增股东','zcb/admin.php?do=toaddProjectMember')" class="btn btn-blue">新增股东</button>
		
		</div>
		
		<table class="table-statistics">
			<thead>
				<th width="20%">姓名</th>
<!-- 				<th width="10%">性别</th> -->
<!-- 				<th width="20%">学历</th> -->
<!-- 				<th width="15%">出生日期</th> -->
<!-- 				<th width="15%">毕业时间</th> -->
<!-- 				<th width="15%">手机号码</th> -->
				<th width="20%">投资占比(%)</th>
				<th width="20%">投资金额(万)</th>
				<th width="20%">投资类型</th>
				<th width="20%">操作</th>
			</thead>
			<tbody>
				<?php 
					foreach ($xmgdinfos as $row){
				?>
					<tr>
						<td><?php echo $row['gdname']?></td>
						<td><?php echo $row['tzbfb']?></td>
						<td><?php echo $row['tzmny']?></td>
						<td><?php echo $row['tztype']?></td>
						<td><a style="color: blue" onclick="deleteMember('<?php echo $row[bid]?>')">删除</a></td>
					</tr>
				<?php 
					}
				?>
			</tbody>
		</table>
	</div>


	<script type="text/javascript">
		function operMember(title, url) {
			layer.open({
				offset: '0px',
				type : 2,
				title : title,
				area : [ '500px', '100%' ],
				content : url,
				modal:false
			//iframe的url
			});
		}

		function deleteMember(code) {
			ajaxRequest({
				confirmMsg: "确定删除?",
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
						offset: '0px',
						cancel: success
					}, success);
				}
			});
		}
	</script>

</body>
</html>