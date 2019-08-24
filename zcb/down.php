<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2015-2016 wj
* Web: 
* ================================================
* Author: wangjian
* Date: 2016-6-6
*/

define('IN_ADMIN',True);
require_once('common.php');
get_login($_USER->id);
header("Content-type: text/html;charset=utf-8");

$filename=str_replace('..','',$_GET['urls']);

$filename=str_replace('./','',$filename);


if(strlen($filename)<=3){echo "下载失败：你所以下载的文件信息有误";return;}
 $filenames=explode('.', get_basename($filename));

 //文件名称
 $name=$filenames[0];
//  print_r($name);
 //文件后缀名
 $type=$filenames[1];
 
 //文件路径
 $path=substr($filename, 0,(strlen($filename)-strlen(get_basename($filename))));
 

//  $path.iconv("UTF-8", "GB2312//IGNORE", $name).".".$type
//  echo $filename;
 $fp=fopen($path.iconv("UTF-8", "GB2312", $name).".".$type,"r");//打开文件
 
 $file_size=filesize($path.iconv("UTF-8", "GB2312", $name).".".$type);
 
	/*================================================
	发送下载相关的头部信息
	=================================================*/

  header("Content-type: application/octet-stream");

  header("Accept-Ranges: bytes");//按照字节大小返回

  header("Content-Length: $file_size");//返回文件大小

  header("Content-Disposition: attachment; filename=".get_basename($filename));//这里客户端的弹出对话框，对应的文件名

  /*================================================
  开始下载相关
  =================================================*/

  $buffer=1024;  
  $file_count=0;  //向浏览器返回数据 
   while(!feof($fp) && $file_count<$file_size){
   	$file_con=fread($fp,1024);  
   	$file_count+=1024;  
		echo $file_con;
   }  
   fclose($fp);
  
?>
