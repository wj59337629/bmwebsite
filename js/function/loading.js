var console=console||{log:function(){return;},info:function(){return;},debug:function(){return;},error:function(){return;}}

function ajaxRequest(option){
	option = option || {};
	option.type = option.type || "POST";
	option.dataType = option.dataType || "json";
	option.accept = option.accept || "application/json";
	option.timeout = 300000;
	option.styleinfo = option.styleinfo || {offset:'60%'};
	var success = option.success;
	var loader=null;
	option.success = function(r){
		loader&&layer.close(loader);
		if(typeof r === 'string') r = JSON.parse(r);
		if(success) success(r);
	};
	option.error = option.error || function(a, b, c){
		loader&&layer.close(loader);
		console.log(a);
		console.log(b);
		console.log(c);
	};
	if(option.confirmMsg){
		layer.confirm(option.confirmMsg,option.styleinfo, function(){
			loader = layer.load();
			$.ajax(option);
		});
		return;
	}
	loader = layer.load();
	$.ajax(option);
}

/**
 * 使用说明
 * option = {
 *	   target: '#output',          //把服务器返回的内容放入id为output的元素中      
 *	   beforeSubmit: showRequest,  //提交前的回调函数  
 *	   success: showResponse,      //提交后的回调函数  
 *     url: url,                   //默认是form的action， 如果申明，则会覆盖  
 *	   type: type,                 //默认是form的method（get or post），如果申明，则会覆盖  
 *	   dataType: null,             //html(默认), xml, script, json...接受服务端返回的类型  
 *	   clearForm: true,            //成功提交后，清除所有表单元素的值  
 *	   resetForm: true,            //成功提交后，重置所有表单元素的值  
 *	   timeout: 3000               //限制请求的时间，当请求大于3秒后，跳出请求
 * };
 * function showRequest(formData, jqForm, options){  
 *     formData: 数组对象，提交表单时，Form插件会以Ajax方式自动提交这些数据，格式如：[{name:user,value:val },{name:pwd,value:pwd}]  
 *	   jqForm:   jQuery对象，封装了表单的元素     
 *	   options:  options对象
 * };    
 * function showResponse(responseText, statusText){
 * };  
**/
function ajaxSubmit(self, option){
	option = option || {};
	option.type = option.type || "POST";
	option.timeout = 300000;
	var success = option.success;
	var beforeSubmit = option.beforeSubmit;
	var loader = null;
	option.beforeSubmit = function(){
		loader = layer.load();
		console.log(loader);
		beforeSubmit();
	};
	option.success = function(r){
		loader&&layer.close(loader);
		if(typeof r === 'string') r = JSON.parse(r);
		if(!r.success && r.errCode === '0x0001'){
			layer.msg(r.message, function(){
				if(parent.location.reload) {
					parent.location.reload();
				} else{
					location.reload();
				}
			});
		}
		if(success) success(r);
	};
	option.error = option.error || function(a, b, c){
		loader&&layer.close(loader);
		layer.alert("请求超时或失败");
		console.log(a);
		console.log(b);
		console.log(c);
	};
	option.timeout = option.timeout || 300000;
	$(self).ajaxSubmit(option);
	return false;
}