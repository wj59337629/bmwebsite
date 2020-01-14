<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2015-2016 wj
* Web: 
* ================================================
* Author: wangjian
* Date: 2019-5-23
*/

require_once('common.php');

$do = $_GET['do'];

empty($do) && $do = 'skip';

if ($do == 'skip'){
	//跳转注册页面
	$usertype = $_GET['usertype'];
	
	if($usertype == 1){
		$titlename = '示范项目申报';
	}else if($usertype == 2){
		$titlename = '示范县申报';
	}
	
	include_once('register.php');
}else if ($do == 'submit'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$district = $_POST['district'];
	$type = $_POST['type'];
	$identity = $_POST['identity'];
	$email = $_POST['email'];
	
	$usertype = $_POST['usertype'];
	
	$flag = $_USER->register($username, $password,$name, $district,$tel,$type,$identity, $usertype,$email);
	
	$info = '';
	
	if($flag == 1){
		$info = '{"message":"账号创建成功","success":true}';
	}else if($flag == 2){
// 		show_msg('该手机号已经注册,不能重复使用','register.php');
		$info = '{"message":"该手机号已经注册,不能重复使用"}';
	}
	
	echo $info;
}



?>