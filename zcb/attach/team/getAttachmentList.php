<!DOCTYPE html>
<html>
<head lang="en">
    <base href="http://ggfw.gdhrss.gov.cn:80/zcb-bmxt-front/">
    <meta charset="UTF-8">
	<title>团队报名详情</title>
	<link type="text/css" rel="stylesheet" href="assets/plugins/Validform_v5.3.2/style.css" />
    <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap-3.3.0/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap-table/bootstrap-table.min.css">
	<link type="text/css" rel="stylesheet" href="assets/css/main.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/form.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/common.css" />
	
	<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-easyui-1.3.2/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-table/bootstrap-table.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-table/bootstrap-table-zh-CN.min.js"></script>
	<script type="text/javascript" src="assets/plugins/Validform_v5.3.2/Validform_v5.3.2_min.js"></script>
	<script type="text/javascript" src="assets/plugins/layer-v3.0.1/layer/layer.js"></script>
	<script type="text/javascript" src="http://ggfw.gdhrss.gov.cn:80/zcb-bmxt-front//assets/plugins/My97DatePicker/WdatePicker.js"></script>
	<script type="text/javascript" src="assets/js/jquery.form.js"></script>
	<script type="text/javascript" src="assets/js/function/loading.js"></script>
	<script type="text/javascript" src="assets/js/common.js"></script>
    
<meta charset="UTF-8">

<link type="text/css" rel="stylesheet" href="/zcb-bmxt-front/assets/css/main.css" />
<link type="text/css" rel="stylesheet" href="/zcb-bmxt-front/assets/css/form.css" />
<link rel="stylesheet" href="/zcb-bmxt-front/assets/plugins/bootstrap-3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/zcb-bmxt-front/assets/plugins/bootstrap-table/bootstrap-table.min.css">
<script type="text/javascript" src="/zcb-bmxt-front/assets/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="/zcb-bmxt-front/assets/plugins/jquery-easyui-1.3.2/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/zcb-bmxt-front/assets/js/jquery.form.js"></script>
<script type="text/javascript" src="/zcb-bmxt-front/assets/js/function/loading.js"></script>

</head>
<body>

	<div class="table-hd">
		<span class="title"><i class="itable"></i>附件管理列表(已上传附件数：<span>0</span>)</span>
	</div>

	<div class="table-bd diytable">
			<div class="waring">温馨提示：有更详细的项目信息请以附件形式上传（图片或文字）</div>
		
		<div class="table-toolbar cf">
			<button type="button" onclick="operMember('新增附件','attach/team/toaddAttachment.shtml')" class="btn btn-blue">新增附件</button>
		</div>
		
		<table class="table-statistics">
			<thead>
				<th width="20%">上传原始文件名称</th>
				<th width="10%">附件类型</th>
				<th width="20%">上传日期</th>
				<th width="15%">团队名称</th>
				
				<th width="20%">操作</th>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
	
	<script type="text/javascript" src="/zcb-bmxt-front/assets/plugins/bootstrap-3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/zcb-bmxt-front/assets/plugins/bootstrap-table/bootstrap-table.min.js"></script>
	<script type="text/javascript" src="/zcb-bmxt-front/assets/plugins/bootstrap-table/bootstrap-table-zh-CN.min.js"></script>
	<script type="text/javascript" src="/zcb-bmxt-front/assets/plugins/layer-v3.0.1/layer/layer.js"></script>
	<script type="text/javascript" src="/zcb-bmxt-front/assets/js/iframe.js"></script>
	<script type="text/javascript" >
		function operMember(title, url) {
			layer.open({
				offset: '0px',
				type : 2,
				title : title,
				area : [ '500px', '50%' ],
				content : url,
				modal:false
			});
		}
		function delAttachment(code) {
			ajaxRequest({
				confirmMsg: "确定删除?",
					url: "attach/team/delAttachment.sjson",
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