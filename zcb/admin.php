<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2015-2016 wj
* Web: 
* ================================================
* Author: wangjian
* Date: 2019-5-24
*/


require_once('common.php');

get_login($_USER->id);

if ($_GET['do']!=""){
	$do=$_GET['do'];
}else{
	$do="home";
}

$userinfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."user u inner join ".DB_TABLEPRE."user_view v on u.id=v.uid where u.id=$_USER->id");


if($do == 'home'){
	
	include_once('usersys/index.php');
}else if($do == 'main'){
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xmbminfo where uid = ".$_USER->id);
	
	include_once('registration/team/main.php');
}else if ($do == 'changePwd'){
	include_once('user/changePwd.php');
}else if($do == 'view'){
	if($userinfo['companytype'] == 1){
		$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xmbminfo where uid = ".$_USER->id);
		
		if($xminfo != null){
			$nums = $db->result("select count(*) as num from ".DB_TABLEPRE."xmzcinfo where hid = ".$xminfo['id']);
			
			$xmzcinfos = $db->fetch_all("select * from ".DB_TABLEPRE."xmzcinfo where hid = ".$xminfo['id']);
		}
		include_once('registration/team/view.php');
	}else if($userinfo['companytype'] == 2){
		include_once('registration/team/qyview.php');
	}
	
	
}else if($do == 'getMemberList'){
	
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xmbminfo where uid = ".$_USER->id);
	
	if($xminfo != null){
		$nums = $db->result("select count(*) as num from ".DB_TABLEPRE."xmzcinfo where hid = ".$xminfo['id']);
		
		$xmzcinfos = $db->fetch_all("select * from ".DB_TABLEPRE."xmzcinfo where hid = ".$xminfo['id']);
	}
	
	include_once('member/team/getMemberList.php');
}else if($do == 'toaddProjectMember'){
	
	include_once('member/team/toaddProjectMember.php');
}else if($do == 'getAttachmentList'){
	
	include_once('attach/team/getAttachmentList.php');
}else if ($do == 'teampass'){
	
	include_once('member/team/teampass.php');
}else if($do == 'edit'){

	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xmbminfo where uid = ".$_USER->id);
	
	if($xminfo != null){
		$nums = $db->result("select count(*) as num from ".DB_TABLEPRE."xmzcinfo where hid = ".$xminfo['id']);
		
		$xmzcinfos = $db->fetch_all("select * from ".DB_TABLEPRE."xmzcinfo where hid = ".$xminfo['id']);
	}
	
	include_once('registration/team/edit.php');
}else if($do == 'logout'){
	$_USER->logout();
	
	goto_page('loginmana.php');
}else if('bmsave' == $do){
	//保存报名信息
	
// 	$uptypes=array(
// 		'image/jpg',
// 		'image/jpeg',
// 		'image/png',
// 		'image/pjpeg',
// 		'image/gif',
// 		'image/bmp',
// 		'image/x-png',
// 		'application/zip'
// 	);
	
	$max_file_size=100000000;     //上传文件大小限制, 单位BYTE
	
	$file=$_FILES["attachment"];
	
	if($file != null){
		$fileName=$file["name"];
		$filetype = $file["type"];
		$filesize = $file["size"];
		
// 		if(!in_array($filetype, $uptypes)){            // 文件类型判断
// 			echo "文件类型不符!";
// 			exit;
// 		}
		if($filesize > $max_file_size){                // 文件大小判断
// 			echo "文件太大!";
			$returninfo = '{"success":false,"message":"文件太大"}';
	
			echo $returninfo;
			exit;
		}
		
		if (!is_dir("dataupload/".$_USER->id."/".get_date('Y-m-d',PHP_TIME))) {                    //创建路径
			mkdir("dataupload/".$_USER->id."/".get_date('Y-m-d',PHP_TIME));
		}
		$url = "dataupload/".$_USER->id."/".get_date('Y-m-d',PHP_TIME);
		//当文件存在
		if (file_exists($url.$fileName)) {
			//echo $fileName." already exists.";
			//echo $url.$fileName;
		}else{//当文件不存在
			$url=$url.$fileName;
	// 		move_uploaded_file(,$url);
			copy($_FILES["attachment"]["tmp_name"],iconv("UTF-8", "GB2312", $url));
		}
	}
	
	$selid = getGP('selid','P');//项目省份
	$proj_laction_id = getGP('proj_laction_id','P');//项目地市
	$gsname = getGP('gsname','P');
	$gsinfo = getGP('gstype','P','array');
	$gstype = '';
	foreach ($gsinfo as $row){
		$gstype .= $row.',';
	}
	$gstype = substr($gstype,0, -1);
	$startdate = getGP('startdate','P');
	$yyzzcode = getGP('yyzzcode','P');
	$industryinfo = getGP('industryinfo','P');
	$jypeoplenum = getGP('jypeoplenum','P');
	$nczypeoplenum = getGP('nczypeoplenum','P');
	$pkjtpeoplenum = getGP('pkjtpeoplenum','P');
	$totalmny = getGP('totalmny','P');
	$lrinfo = getGP('lrinfo','P');
	$xssr = getGP('xssr','P');
	$zcmny = getGP('zcmny','P');
	$leader = getGP('leader','P');
	$gender = getGP('gender','P');
	$hkaddress = getGP('hkaddress','P');
	$idcard_no = getGP('idcard_no','P');
	$tel = getGP('tel','P');
	
	$jycs_address = getGP('jycs_address','P');
	$khname = getGP('khname','P');
	$khbank = getGP('khbank','P');
	$bank_no = getGP('bank_no','P');
	$xminstroduce = getGP('xminstroduce','P');
	$bgs_suggest = getGP('bgs_suggest','P');
	$leader_suggest = getGP('leader_suggest','P');
	
	$attachment = getGP('attachment','P');//计划书文件
	
	$xmarray = array(
		'xmselid' => $selid,
		'xmsubselid' => $proj_laction_id,
		'gsname' => $gsname,
		'gstype' => $gstype,
		'startdate' => $startdate,
		'yyzzcode' => $yyzzcode,
		'industryinfo' => $industryinfo,
		'jypeoplenum' => $jypeoplenum,
		'nczypeoplenum' => $nczypeoplenum,
		'pkjtpeoplenum' => $pkjtpeoplenum,
		'totalmny' => $totalmny,
		'lrinfo' => $lrinfo,
		'xssr' => $xssr,
		'zcmny' => $zcmny,
		'teampsnname' => $leader,
		'gender' => $gender,
		'hkaddress' => $hkaddress,
		'idcard_no' => $idcard_no,
		'tel' => $tel,
		'jycs_address' => $jycs_address,
		'khname' => $khname,
		'khbank' => $khbank,
		'bank_no' => $bank_no,
		'xminstroduce' => $xminstroduce,
		'bgs_suggest' => $bgs_suggest,
		'leader_suggest' => $leader_suggest,
		'ispass' => 0,
		'uid' => $_USER->id
	);
	
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xmbminfo where uid = ".$_USER->id);
	
	if($xminfo == null){
		insert_db('xmbminfo', $xmarray);
		$insert_id = $db->insert_id();
		
		$uptarray = array(
			'xmpath' => $url,
		);
		
		update_db('xmbminfo', $uptarray, array('id'=>$insert_id));
		
	}else{
		update_db('xmbminfo', $xmarray, array('id'=>$xminfo['id']));
		
		if($url != null){
			$uptarray = array(
					'xmpath' => $url,
			);
			
			update_db('xmbminfo', $uptarray, array('id'=>$xminfo['id']));
		}
	}
	
	
	$returninfo = '{"success":true,"message":"信息保存成功"}';
	
	echo $returninfo;
	
}else if($do == 'datasubmit'){
	
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xmbminfo where uid = ".$_USER->id);
	
	$ispass = getGP('promise','P');
	
	$uptdate = array(
		'ispass' => 1
	);
	
	update_db('xmbminfo', $uptdate, array('id'=>$xminfo['id']));
	
	$returninfo = '{"message":"信息提交成功！","success":true}';
	
	echo $returninfo;
}else if($do == 'changePwdMana'){
	$id = $_USER->id;
	$user = $db->fetch_one_array("SELECT password FROM ".DB_TABLEPRE."user WHERE id = '$id'  ");
	if(md5(getGP('password','P'))==$user['password']){
		$user = array(
			'password' => md5(getGP('newpassword','P'))
		);
		update_db('user',$user, array('id'=>$id));
	}else{
		$returninfo = '{"message":"输入的旧密码不匹配，请重新输入！","success":false}';
	}
		$returninfo = '{"message":"密码修改成功！","success":true}';
		
		echo $returninfo;
}else if($do == 'delete'){
	$db->query("delete from ".DB_TABLEPRE."xmbminfo where uid = ".$_USER->id);
	
	$returninfo = '{"message":"信息清除成功！","success":true}';
	
	echo $returninfo;
}else if($do == 'saveTeamMember'){
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xmbminfo where uid = ".$_USER->id);
	
	if($xminfo != null){
		$nums = $db->result("select count(*) as num from ".DB_TABLEPRE."xmzcinfo where hid = ".$xminfo['id']);
		
		$xmzcinfos = $db->fetch_all("select * from ".DB_TABLEPRE."xmzcinfo where hid = ".$xminfo['id']);
	}
	
	$zcname = getGP('zcname','P');
	$zcdate = getGP('zcdate','P');
	$mnyinfo = getGP('mnyinfo','P');
	
	$repeatinfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xmzcinfo where zcname='$zcname'");
	
	if($repeatinfo != null){
		$returninfo = '{"message":"创业扶持政策不能重复录入！","success":false}';
		echo $returninfo;
		exit();
	}else{
		$insert_array = array(
			'hid' => $xminfo['id'],
			'zcname' => $zcname,
			'zcdate' => $zcdate,
			'mnyinfo' => $mnyinfo
		);
		
		insert_db('xmzcinfo', $insert_array);
		$returninfo = '{"message":"创业扶持政策信息新增成功！","success":true}';
		echo $returninfo;
	}
	
}else if($do == 'todelProjectMember'){
	$id = getGP('id','P');
	
	$db->query("delete from ".DB_TABLEPRE."xmzcinfo where bid=$id");
	
	$returninfo = '{"message":"创业扶持政策信息删除成功！","success":true}';
	echo $returninfo;
}

?>