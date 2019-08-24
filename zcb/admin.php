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
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xminfo where uid = ".$_USER->id);
	
	include_once('registration/team/main.php');
}else if ($do == 'changePwd'){
	include_once('user/changePwd.php');
}else if($do == 'view'){
	if($userinfo['companytype'] == 1){
		$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xminfo where uid = ".$_USER->id);
		
		$nums = $db->result("select count(*) as num from ".DB_TABLEPRE."xmgdinfo where hid = ".$xminfo['id']);
		
		$xmgdinfos = $db->fetch_all("select * from ".DB_TABLEPRE."xmgdinfo where hid = ".$xminfo['id']);
		
		include_once('registration/team/view.php');
	}else if($userinfo['companytype'] == 2){
		include_once('registration/team/qyview.php');
	}
	
	
}else if($do == 'getMemberList'){
	
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xminfo where uid = ".$_USER->id);
	
	if($xminfo != null){
		$nums = $db->result("select count(*) as num from ".DB_TABLEPRE."xmgdinfo where hid = ".$xminfo['id']);
		
		$xmgdinfos = $db->fetch_all("select * from ".DB_TABLEPRE."xmgdinfo where hid = ".$xminfo['id']);
	}
	
	include_once('member/team/getMemberList.php');
}else if($do == 'toaddProjectMember'){
	
	include_once('member/team/toaddProjectMember.php');
}else if($do == 'getAttachmentList'){
	
	include_once('attach/team/getAttachmentList.php');
}else if ($do == 'teampass'){
	
	include_once('member/team/teampass.php');
}else if($do == 'edit'){

	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xminfo where uid = ".$_USER->id);
	
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
		
		if (!is_dir("dataupload/")) {                    //创建路径
			mkdir("dataupload/");
		}
		$url = "dataupload/";
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
	
	$leader = getGP('leader','P');
	$status = getGP('status','P');
	$version = getGP('version','P');
	$id = getGP('id','P');
	
	$gender = getGP('gender','P');
	$birthday = getGP('birthday','P');
	$degree = getGP('degree','P');//学历
	$id_cart_type = getGP('id_cart_type','P');//证件类型
	$id_card_no = getGP('id_card_no','P');//证件号码
	$college = getGP('college','P');//毕业学校
	$bydate = getGP('bydate','P');
	$field = getGP('field','P');//专业
	$email = getGP('email','P');
	$tel = getGP('tel','P');
	$team_name = getGP('team_name','P');
	$qq = getGP('qq','P');
	$teampeoplunum = getGP('teampeoplenum','P');
	$zcmny = getGP('zcmny','P');
	$achievement = getGP('achievement','P');//个人简历
	
	$match_type = getGP('match_type','P');//赛事类型 默认为 1 豫创天下大赛
	$project_name = getGP('project_name','P');//项目名称
	$industry = getGP('industry','P');//行业
	$selid = getGP('selid','P');//项目省份
	$proj_laction_id = getGP('proj_laction_id','P');//项目地市
	$address = getGP('address','P');//项目地址
	$digest = getGP('digest','P');//项目摘要
	$patent = getGP('patent','P');//国家专利
	$rjzzinfo = getGP('rjzzinfo','P');//软件著作
	$zcsbinfo = getGP('zcsbinfo','P');
	$awards = getGP('awards','P');//获奖情况
	
	$summarize = getGP('summarize','P');//项目概述
	$attachment = getGP('attachment','P');//计划书文件
	
	$xmarray = array(
		'teampsnname' => $leader,
		'gender' => $gender,
		'birthday' => $birthday,
		'education' => $degree,
		'id_card_type' => $id_cart_type,
		'idcard' => $id_card_no,
		'graduation' => $college,
		'bydate' => $bydate,
		'zhuanye' => $field,
		'email' => $email,
		'tel' => $tel,
		'gsname' => $team_name,
		'qq' => $qq,
		'teampeoplenum' => $teampeoplunum,
		'zcmny' => $zcmny,
		'jlcontent' => $achievement,
		'xmname' => $project_name,
		'xmtype' => $industry,
		'xmselid' => $selid,
		'xmsubselid' => $proj_laction_id,
		'xmaddress' => $address,
		'xminstroduce' => $digest,
		'zlinfo' => $patent,
		'rjzzinfo' => $rjzzinfo,
		'zcsbinfo' => $zcsbinfo,
		'otherinfo' => $awards,
		'xmsummarize' => $summarize,
		'uid' => $_USER->id
	);
	
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xminfo where uid = ".$_USER->id);
	
	if($xminfo == null){
		insert_db('xminfo', $xmarray);
		$insert_id = $db->insert_id();
		
		$uptarray = array(
			'xmpath' => $url,
		);
		
		update_db('xminfo', $uptarray, array('id'=>$insert_id));
		
	}else{
		update_db('xminfo', $xmarray, array('id'=>$xminfo['id']));
		
		if($url != null){
			$uptarray = array(
					'xmpath' => $url,
			);
			
			update_db('xminfo', $uptarray, array('id'=>$xminfo['id']));
		}
	}
	
	
	$returninfo = '{"success":true,"message":"信息保存成功"}';
	
	echo $returninfo;
	
}else if($do == 'datasubmit'){
	
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xminfo where uid = ".$_USER->id);
	
	$ispass = getGP('promise','P');
	
	$uptdate = array(
		'ispass' => 1
	);
	
	update_db('xminfo', $uptdate, array('id'=>$xminfo['id']));
	
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
	$db->query("delete from ".DB_TABLEPRE."xminfo where uid = ".$_USER->id);
	
	$returninfo = '{"message":"信息清除成功！","success":true}';
	
	echo $returninfo;
}else if($do == 'saveTeamMember'){
	$xminfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xminfo where uid = ".$_USER->id);
	
	if($xminfo != null){
		$nums = $db->result("select count(*) as num from ".DB_TABLEPRE."xmgdinfo where hid = ".$xminfo['id']);
		
		$xmgdinfos = $db->fetch_all("select * from ".DB_TABLEPRE."xmgdinfo where hid = ".$xminfo['id']);
	}
	
	$gdname = getGP('gdname','P');
	$tzbfb = getGP('tzbfb','P');
	$tzmny = getGP('tzmny','P');
	$tztype = getGP('tztype','P');
	
	$repeatinfo = $db->fetch_one_array("select * from ".DB_TABLEPRE."xmgdinfo where gdname='$gdname'");
	
	if($repeatinfo != null){
		$returninfo = '{"message":"股东不能重复！","success":false}';
		echo $returninfo;
		exit();
	}else{
		$insert_array = array(
			'hid' => $xminfo['id'],
			'inid' => 0,
			'gdname' => $gdname,
			'tzbfb' => $tzbfb,
			'tzmny' => $tzmny,
			'tztype' => $tztype
		);
		
		insert_db('xmgdinfo', $insert_array);
		$returninfo = '{"message":"股东新增成功！","success":true}';
		echo $returninfo;
	}
	
}else if($do == 'todelProjectMember'){
	$id = getGP('id','P');
	
	$db->query("delete from ".DB_TABLEPRE."xmgdinfo where bid=$id");
	
	$returninfo = '{"message":"股东删除成功！","success":true}';
	echo $returninfo;
}

?>