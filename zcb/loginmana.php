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

$do = getGP('do','G');
if ( check_submit('dosubmit') ) {

	$errmsg = array();
	initGP(array('username', 'password','remember'), 'P');
	
	$flag = $_USER->login($username, $password, $remember);
	if ( $flag == 1) {
		goto_page('admin.php');
	} else {
		$errorinfo = '用户名或密码错误，请重试';
	
		include_once('login.php');
	}

}

if ($do == "logout") {

	$_USER->logout();
	show_msg('你已经安全退出登录，现在转到首页...','./');

} else {

	if ( $_USER->id ) {
		goto_page('admin.php');

	}
}
include_once 'login.php';


?>