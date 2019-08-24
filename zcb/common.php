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

error_reporting(0);
set_magic_quotes_runtime(0);
function_exists('date_default_timezone_set') && date_default_timezone_set('Etc/GMT+0');
$defined_vars = get_defined_vars();
foreach ($defined_vars as $key => $val) {
	if ( !in_array($key, array('_GET', '_POST', '_COOKIE', '_FILES', 'GLOBALS', '_SERVER')) ) {
		${$key} = '';
		unset(${$key});
	}
}
unset($defined_vars);
if (isset($_GET['GLOBALS']) || isset($_POST['GLOBALS']) || isset($_COOKIE['GLOBALS']) || isset($_SERVER['GLOBALS']) || isset($_SESSION['GLOBALS']) || isset($_FILES['GLOBALS'])) {
	exit;
}
define('IN_TOA',True);
define('TOA_ROOT',str_replace('\\','/',substr(dirname(__FILE__),0,-3)));
define('CACHE_ROOT',TOA_ROOT.'cache/');
define('PHP_TIME',time());
@header("content-Type: text/html; charset=utf-8");
$mtime = explode(' ',microtime());
$starttime = $mtime[0] + $mtime[1];

require(TOA_ROOT.'include/function_cache.php');

require(TOA_ROOT.'include/function_version.php');

require('function_global.php');

if (!get_magic_quotes_gpc() ) {
	$_GET = add_slashes($_GET);
	$_POST = add_slashes($_POST);
	$_COOKIE = add_slashes($_COOKIE);
}

$_FILES = add_slashes($_FILES);
!$_SERVER['PHP_SELF'] && $_SERVER['PHP_SELF'] = $_SERVER['SCRIPT_NAME'];
$superadmin = '';
require(TOA_ROOT.'include/function_common.php');

require('config.php');
require('class_mysql.php');
require('class_user.php');


$db = new Mysql();
$db->connect(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PCONNECT);
$_USER = new User();
$_CACHE = $_FILTER = $_FILTER_SORT = $_ACTION = array();
obstart();
?>