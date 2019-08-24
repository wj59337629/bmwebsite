<?php
header ( "Content-Type:text/html;charset=utf-8" );

! defined ( 'IN_TOA' ) && exit ( 'Access Denied!' );

function get_login($user) {
	if (! $user) {
		show_msg ( '你还没有登录，请先登录', 'loginmana.php', 1000 );
	}
}

function get_mobilelogin($user){
	if(! $user){
		show_mobilemsg('你还未绑定企业号，请联系管理员进行绑定','',3000);
	}
}


function get_realid($name = '') {
	if ($name != '') {
		global $db;
		$staff = explode ( ',', $name );
		for($i = 0; $i < sizeof ( $staff ); $i ++) {
			$sql = "SELECT uid FROM " . DB_TABLEPRE . "user_view where name='" . trim ( $staff [$i] ) . "' limit 0,1";
			$row = $db->fetch_one_array ( $sql );
			if ($row ['uid'] != '') {
				$html .= $row ['uid'] . ',';
			}
		}
		// $html=lajp_call("include.FunCommon::getRealId",$name);
	}
	return substr ( $html, 0, - 1 );
}
function get_realphone($id = 0) {
	global $db;
	$sql = "SELECT phone FROM " . DB_TABLEPRE . "user_view where name='" . $id . "' ORDER BY uid desc limit 0,1";
	$row = $db->fetch_one_array ( $sql );
	if ($row ['phone'] != '') {
		return $row ['phone'];
	}
}
$headurl = "http://" . $_SERVER ['HTTP_HOST'] . $_SERVER ['PHP_SELF'];
$pahttp = "http://";
function get_realdepalist($fatherid = 0, $selid = 0, $layer = 0) {
	$str = "";
	global $db;
	$query = $db->query ( "SELECT * FROM " . DB_TABLEPRE . "department where father='$fatherid'  ORDER BY id Asc" );
	if (count ( $query ) > 0) {
		for($i = 0; $i < $layer; $i ++) {
			$str .= "├";
		}
		while ( $row = $db->fetch_array ( $query ) ) {
			$selstr = $row ['id'] == $selid ? 'selected="selected"' : '';
			$htmlstr = '<option value="' . $row ['id'] . '"  ' . $selstr . '>' . $str . $row ['name'] . '</option>';
			echo $htmlstr;
			get_realdepalist ( $row ['id'], $selid, $layer + 1 );
		}
	}
	return;
}
function get_postlist($fatherid = 0, $selid = 0, $layer = 0) {
	$str = "";
	global $db;
	$query = $db->query ( "SELECT * FROM " . DB_TABLEPRE . "position where father='$fatherid' ORDER BY id Asc  " );
	if (count ( $query ) > 0) {
		for($i = 0; $i < $layer; $i ++) {
			$str .= "├";
		}
		while ( $row = $db->fetch_array ( $query ) ) {
			$selstr = $row ['id'] == $selid ? 'selected="selected"' : '';
			$htmlstr = '<option value="' . $row ['id'] . '"  ' . $selstr . '>' . $str . $row ['name'] . '</option>';
			echo $htmlstr;
			get_postlist ( $row ['id'], $selid, $layer + 1 );
		}
	}
	return;
}
function get_grouplist($selid = 0) {
	global $db;
	$html = '';
	$sql = "SELECT id,groupname FROM " . DB_TABLEPRE . "usergroup";
	$query = $db->query ( $sql );
	while ( $row = $db->fetch_array ( $query ) ) {
		$selstr = $row ['id'] == $selid ? 'selected="selected"' : '';
		$html .= '<option value="' . $row ['id'] . '" ' . $selstr . ' >' . $row ['groupname'] . '</option>';
	}
	return $html;
}
function get_groupname($id = 0) {
	global $db;
	$sql = "SELECT groupname FROM " . DB_TABLEPRE . "usergroup where id=" . $id . "  ";
	$result = $db->fetch_one_array ( $sql );
	if ($result ['groupname'] != '') {
		return $result ['groupname'];
	}
}
function get_reallist($selid = 0) {
	global $db;
	$html = '';
	$sql = "SELECT uid,name FROM " . DB_TABLEPRE . "user_view  order by uid asc";
	$query = $db->query ( $sql );
	while ( $row = $db->fetch_array ( $query ) ) {
		$selstr = $row ['uid'] == $selid ? 'selected="selected"' : '';
		$html .= '<option value="' . $row ['uid'] . '" ' . $selstr . ' >' . $row ['name'] . '</option>';
	}
	return $html;
}
function get_realdepaname($name = 0) {
	if ($name != '') {
		global $db;
		$staff = explode ( ',', $name );
		for($i = 0; $i < sizeof ( $staff ); $i ++) {
			$sql = "SELECT cdepname FROM " . DB_TABLEPRE . "department where id='" . trim ( $staff [$i] ) . "' limit 0,1";
			$row = $db->fetch_one_array ( $sql );
			if ($row ['cdepname'] != '') {
				$html .= $row ['cdepname'] . ',';
			}
		}
	}
	return substr ( $html, 0, - 1 );
}
function get_postname($name = 0) {
	if ($name != '') {
		global $db;
		$staff = explode ( ',', $name );
		for($i = 0; $i < sizeof ( $staff ); $i ++) {
			$sql = "SELECT name FROM " . DB_TABLEPRE . "position where id='" . trim ( $staff [$i] ) . "' limit 0,1";
			$row = $db->fetch_one_array ( $sql );
			if ($row ['name'] != '') {
				$html .= $row ['name'] . ',';
			}
		}
	}
	return substr ( $html, 0, - 1 );
}
function get_postid($name = 0) {
	if ($name != '') {
		global $db;
		$staff = explode ( ',', $name );
		for($i = 0; $i < sizeof ( $staff ); $i ++) {
			$sql = "SELECT id FROM " . DB_TABLEPRE . "position where name='" . trim ( $staff [$i] ) . "' limit 0,1";
			$row = $db->fetch_one_array ( $sql );
			if ($row ['id'] != '') {
				$html .= $row ['id'] . ',';
			}
		}
	}
	return ',' . $html;
}
function get_typelist($selid = 0, $typeid = 0) {
	global $db;
	$html = '';
	$sql = "SELECT oid,oname FROM " . DB_TABLEPRE . "office_type where otype=" . $typeid . "";
	$query = $db->query ( $sql );
	while ( $row = $db->fetch_array ( $query ) ) {
		$selstr = $row ['oid'] == $selid ? 'selected="selected"' : '';
		$html .= '<option value="' . $row ['oid'] . '" ' . $selstr . ' >' . $row ['oname'] . '</option>';
	}
	return $html;
}
function get_typename($selid = 0) {
	if ($selid == '') {
		$oid = 0;
	} else {
		$oid = $selid;
	}
	global $db;
	$html = '';
	$sql = "SELECT oid,oname FROM " . DB_TABLEPRE . "office_type where oid=" . $oid . "";
	$query = $db->query ( $sql );
	while ( $row = $db->fetch_array ( $query ) ) {
		$html .= '' . $row ['oname'] . '';
	}
	return $html;
}
function get_log($id) {
	if ($id == '1') {
		$t_id = '|515158.com|';
	} else {
		$t_id = str_replace ( "|515158.com|", "<br>", $id );
	}
	return $t_id;
}
function get_key($inputname) {
	if (! is_superadmin () && ! check_purview ( $inputname )) {
		show_msg ( '对不起，你没有权限执行本操作！', 'home.php' );
	}
	return;
}
function get_pubuser($input = 0, $inputname = 0, $value = 0, $name = 0, $width = 50, $height = 4, $user = '') {
	if ($input == '1') {
		echo "<input type='text' name='" . $inputname . "' style='width:" . $width . "px;height:" . $height . "px;background-color:#F5F5F5;color:#006600;' value='" . $value . "' readonly />";
		echo "<input type='hidden' name='" . $inputname . "id' value='" . get_userid ( $value ) . "' />";
		echo "<input type='hidden' name='" . $inputname . "phone' value='" . get_realphone ( $value ) . "' />";
		;
		echo '   <a href="javascript:;" onClick="window.open (\'admin.php?ac=user_radio&fileurl=public&inputname=';
		echo $inputname;
		echo '&user=';
		echo $user;
		echo '\', \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\')">';
		echo $name;
		echo '</a>
   ';
	} elseif ($input == '2') {
		echo "<textarea name='" . $inputname . "' cols='" . $width . "' rows='" . $height . "' readonly style='background-color:#F5F5F5;color:#006600;' id='" . $inputname . "'>" . $value . "</textarea>";
		echo "<input type='hidden' name='" . $inputname . "id' value='" . get_realid ( $value ) . "' />";
		echo "<input type='hidden' name='" . $inputname . "phone' /><br>";
		;
		echo '   <script type="text/javascript"> 
   function show_';
		echo trim ( $inputname );
		echo '(){
	   ';
		if ($value != '') {
			;
			echo '	   window.open (\'admin.php?ac=user_checkbox&fileurl=public&inputname=';
			echo $inputname;
			echo '&user=';
			echo $value;
			echo '\', \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\');
	   ';
		} else {
			;
			echo '	   var uservalue = document.getElementById(\'';
			echo trim ( $inputname );
			echo '\').value;
	   window.open (\'admin.php?ac=user_checkbox&fileurl=public&inputname=';
			echo $inputname;
			echo '&user=\'+uservalue, \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\');
	   ';
		}
		;
		echo '	}
</script>
   <a href="javascript:;" onClick="show_';
		echo trim ( $inputname );
		echo '();">';
		echo $name;
		echo '</a>
   ';
	} elseif ($input == '3') {
		echo "<input type='text' name='" . $inputname . "' style='width:" . $width . "px;height:" . $height . "px;background-color:#F5F5F5;color:#006600;' value='" . $value . "' readonly />";
		echo "<input type='hidden' name='" . $inputname . "id' />";
		echo "<input type='hidden' name='" . $inputname . "phone' />";
		;
		echo '   <a href="javascript:;" onClick="window.open (\'admin.php?ac=user_checkbox&fileurl=public&inputname=';
		echo $inputname;
		echo '\', \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\')">';
		echo $name;
		echo '</a>
   ';
	}
	return;
}
function get_boxlistkey($name = 0, $value = 0, $user1 = 0, $user2 = 0) {
	echo '<input type="checkbox" name="';
	echo $name . '" value="' . $value . '" class="checkbox"';
	if (! is_superadmin () && $user1 != $user2) {
		// echo 'disabled="disabled"';
	}
	echo ' />';
}
function get_helps() {
	echo '<font color="#FF0000" title="打*号表示为必填">(*)</font>';
}
function get_helpsapp() {
	return '<font color="#FF0000" title="打*号表示为必填">(*)</font>';
}
function get_urlkey($name = 0, $url, $user1 = 0, $user2 = 0) {
	if (! is_superadmin () && $user1) {
		echo '<font color=#cccccc>' . $name . '</font>';
	} else {
		echo '<a href="' . $url . '">' . $name . '</a>';
	}
}
function get_smsbox($name = 0, $value = 0) {
	$_CONFIGs = new config ();
	echo '<b>提醒' . $name . '：</b>';
	if ($_CONFIGs->config_data ( 'configinfo' ) == '1') {
		echo '<input type="checkbox" name="sms_info_box_' . $value . '" value="1" checked="checked" />短消息提示';
	}
	if ($_CONFIGs->config_data ( 'configsms' ) == '1') {
		if (check_purview ( "office_sms" ) != '0') {
			echo '<input type="checkbox" name="sms_phone_box_' . $value . '" value="1" />手机短信提示
			   ';
		}
	}
}
// 部门模型
function get_depabox($input = 0, $inputname = 0, $value = 0, $name = 0, $width = 50, $height = 4) {
	if ($input == '1') {
		echo "<input type='text' name='" . $inputname . "' style='width:" . $width . "px;height:" . $height . "px;background-color:#F5F5F5;color:#006600;' value='" . $value . "' readonly />";
		echo "<input type='hidden' name='" . $inputname . "id' value='" . get_realdepaid ( $value ) . "' />";
		;
		echo '   <a href="#" onClick="window.open (\'admin.php?ac=dep_radio&fileurl=public&inputname=';
		echo $inputname;
		echo '\', \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\')">';
		echo $name;
		echo '</a>
   ';
	} else {
		echo "<textarea name='" . $inputname . "' cols='" . $width . "' rows='" . $height . "' readonly style='background-color:#F5F5F5;color:#006600;'>" . $value . "</textarea>";
		echo "<input type='hidden' name='" . $inputname . "id' value='" . get_realdepaid ( $value ) . "'/>";
		;
		echo '<br>
   <a href="#" onClick="window.open (\'admin.php?ac=dep_checkbox&fileurl=public&inputname=';
		echo $inputname;
		echo '\', \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\')">';
		echo $name;
		echo '</a>
   ';
	}
	return;
}
// 预算项目模型
function get_paytypebox($input = 0, $inputname = 0, $value = 0, $name = 0, $width = 50, $height = 4) {
	if ($input == '1') {
		echo "<input type='text' name='" . $inputname . "' style='width:" . $width . "px;height:" . $height . "px;background-color:#F5F5F5;color:#006600;' value='" . $value . "' readonly />";
		echo "<input type='hidden' name='" . $inputname . "id' value='" . get_paytypeid ( $value ) . "' />";
		;
		echo '   <a href="#" onClick="window.open (\'admin.php?ac=paytype_checkbox&fileurl=public&inputname=';
		echo $inputname;
		echo '\', \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\')">';
		echo $name;
		echo '</a>
   ';
	} else {
		echo "<textarea name='" . $inputname . "' cols='" . $width . "' rows='" . $height . "' readonly style='background-color:#F5F5F5;color:#006600;'>" . $value . "</textarea>";
		echo "<input type='hidden' name='" . $inputname . "id' value='" . get_paytypeid ( $value ) . "' />";
		;
		echo '<br>
   <a href="#" onClick="window.open (\'admin.php?ac=paytype_checkbox&fileurl=public&inputname=';
		echo $inputname;
		echo '\', \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\')">';
		echo $name;
		echo '</a>
   ';
	}
	return;
}
function get_paytypename($name = 0) {
	if ($name != '') {
		global $db;
		$staff = explode ( ',', $name );
		for($i = 0; $i < sizeof ( $staff ); $i ++) {
			$sql = "SELECT name FROM " . DB_TABLEPRE . "paytype where id='" . trim ( $staff [$i] ) . "' limit 0,1";
			$row = $db->fetch_one_array ( $sql );
			if ($row ['name'] != '') {
				$html .= $row ['name'] . ',';
			}
		}
	}
	return substr ( $html, 0, - 1 );
}
function get_paytypeid($name = 0) {
	if ($name != '') {
		global $db;
		$staff = explode ( ',', $name );
		for($i = 0; $i < sizeof ( $staff ); $i ++) {
			$sql = "SELECT id FROM " . DB_TABLEPRE . "paytype where name='" . trim ( $staff [$i] ) . "' limit 0,1";
			$row = $db->fetch_one_array ( $sql );
			if ($row ['id'] != '') {
				$html .= $row ['id'] . ',';
			}
		}
	}
	return ',' . $html;
}

// 人员模型
function get_positionbox($input = 0, $inputname = 0, $value = 0, $name = 0, $width = 50, $height = 4) {
	if ($input == '1') {
		echo "<input type='text' name='" . $inputname . "' style='width:" . $width . "px;height:" . $height . "px;background-color:#F5F5F5;color:#006600;' value='" . $value . "' readonly />";
		echo "<input type='hidden' name='" . $inputname . "id' value='" . get_postid ( $value ) . "' />";
		;
		echo '   <a href="#" onClick="window.open (\'admin.php?ac=pos_radio&fileurl=public&inputname=';
		echo $inputname;
		echo '\', \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\')">';
		echo $name;
		echo '</a>
   ';
	} else {
		echo "<textarea name='" . $inputname . "' cols='" . $width . "' rows='" . $height . "' readonly style='background-color:#F5F5F5;color:#006600;'>" . $value . "</textarea>";
		echo "<input type='hidden' name='" . $inputname . "id' value='" . get_postid ( $value ) . "' />";
		;
		echo '<br>
   <a href="#" onClick="window.open (\'admin.php?ac=pos_checkbox&fileurl=public&inputname=';
		echo $inputname;
		echo '\', \'newwindow\', \'height=500, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no\')">';
		echo $name;
		echo '</a>
   ';
	}
	return;
}
function public_number($table, $where = '') {
	global $db;
	$num = $db->result ( "SELECT COUNT(*) AS num FROM " . DB_TABLEPRE . $table . $where . " " );
	return $num;
}
function public_value($name = '', $table = 'config', $where = '') {
	if ($name != '') {
		global $db;
		$sql = "SELECT " . $name . " FROM " . DB_TABLEPRE . $table . " where " . $where . " limit 0,1";
		$row = $db->fetch_one_array ( $sql );
		if ($row [$name] != '') {
			return $row [$name];
		}
	}
}
function public_upload($name = '', $value = '', $w, $h, $title) {
	if ($w == '' || $w == '0')
		$w = '180';
	if ($h == '' || $h == '0')
		$h = '22';
	if ($title == '')
		$title = '附件上传';
	$_CONFIGS = new config ();
	if ($_CONFIGS->config_data ( 'upload' ) == 1) {
		$html = '<input type="text" name="' . $name . '" class="BigInput" style="width:' . $w . 'px;height:' . $h . 'px;line-height:' . $h . 'px;font-size:14px;" value="' . $value . '" />';
		$html .= '<a href="#" onClick="';
		$html .= "window.open ('admin.php?ac=uploadflash&fileurl=public&name=" . $name . "', ";
		$html .= "'newwindow111', 'height=200, width=480, top=0, left=0, toolbar=no, ";
		$html .= "menubar=no, scrollbars=yes, resizable=no,location=no, status=no'";
		$html .= ')">+' . $title . '</a>';
	} else {
		$html = '<input type="text" name="' . $name . '" class="BigInput" style="width:' . $w . 'px;height:' . $h . 'px;line-height:' . $h . 'px;font-size:14px;" value="' . $value . '" />';
		$html .= '<a href="#" onClick="';
		$html .= "window.open ('admin.php?ac=uploadadd&fileurl=public&name=" . $name . "', ";
		$html .= "'newwindow111', 'height=200, width=480, top=0, left=0, toolbar=no, ";
		$html .= "menubar=no, scrollbars=yes, resizable=no,location=no, status=no'";
		$html .= ')">+' . $title . '</a>';
	}
	echo $html;
}

/**
 * 根据登录人员ID返回部门信息
 * $type=1时 返回部门ID,$type=0时返回部门名称
 */
function get_depauseridname($userid = 0, $type = 0) {
	global $db;
	if (trim ( $userid )) {
		$sql = "SELECT b.cdepname,b.cdepcode FROM " . DB_TABLEPRE . "user a," . DB_TABLEPRE . "department b where a.id=" . $userid . " and a.departmentid=b.cdepcode";
		if ($result = $db->fetch_one_array ( $sql )) {
			if ($type == 1) {
				return $result ['cdepcode'];
			} else {
				return $result ['cdepname'];
			}
		}
	}
}

// 根据部门名称获取相应的部门ID
function get_realdepaid($name = '') {
	if ($name != '') {
		global $db;
		$staff = explode ( ',', $name );
		for($i = 0; $i < sizeof ( $staff ); $i ++) {
			$sql = "SELECT cdepcode FROM " . DB_TABLEPRE . "department where cdepname='" . trim ( $staff [$i] ) . "' limit 0,1";
			$row = $db->fetch_one_array ( $sql );
			if ($row ['cdepcode'] != '') {
				$html .= $row ['cdepcode'] . ',';
			}
		}
	}
	return ',' . $html;
}
function get_usershow($vuidtype = '', $url = '') {
	global $db;
	global $_USER;
	$sql = "SELECT id,keytypeuser FROM " . DB_TABLEPRE . "user where id='" . $_USER->id . "' and keytype='1' ";
	if ($result = $db->fetch_one_array ( $sql )) {
		$html .= '<style type="text/css"> #attachshow{display:none;}</style><a href="#"';
		$html .= 'onClick="showMenus(';
		$html .= "'attachshow'";
		$html .= ')" style="line-height:30px;"><span>查看下属成员信息';
		$html .= '<img src="template/default/images/2EC5tZlqdV.gif"';
		$html .= ' align="absmiddle"></span></a>';
		$html .= '<div class="attach_div" id="attachshow" align="left">';
		$html .= '<a href="' . $url . '&vuidtype="><img src="template/default/images/newfolder.gif" ';
		$html .= 'align="absmiddle" width=16 height=16>只看自己</a>';
		$html .= '<a href="' . $url . '&vuidtype=-1"><img src="template/default/images/movetofolder.gif" ';
		$html .= 'align="absmiddle" width=16 height=16>所有成员</a>';
		$query = $db->query ( "SELECT a.id,b.name FROM " . DB_TABLEPRE . "user a," . DB_TABLEPRE . "user_view b where a.id=b.uid and a.id in (" . get_realid ( $result ['keytypeuser'] ) . ") ORDER BY a.numbers Asc" );
		while ( $row = $db->fetch_array ( $query ) ) {
			$html .= '<a href="' . $url . '&vuidtype=' . $row ['id'] . '"><img src="template/default/images/2EDkuGH6eXMM.gif" ';
			$html .= 'align="absmiddle" width=16 height=16>' . $row ['name'] . '</a>';
		}
		$html .= '</div>';
	}
	return $html;
}
function get_subordinate($uid = 0, $username = '') {
	global $db;
	$whsql = 'ssss';
	$sql = "SELECT keytypeuser FROM " . DB_TABLEPRE . "user where id='" . $uid . "' and keytype='1'";
	if ($result = $db->fetch_one_array ( $sql )) {
		$keytypeuser = explode ( ',', $result ['keytypeuser'] );
		for($i = 0; $i < sizeof ( $keytypeuser ); $i ++) {
			$whsql .= " or " . $username . "=" . get_userid ( $keytypeuser [$i] );
		}
		$sqlstrname = str_replace ( 'ssss or', '', $whsql );
		$html = " AND (" . str_replace ( 'ssss', '', $sqlstrname ) . ")";
	}
	return $html;
}
function get_suborname($uid = 0, $username = '') {
	global $db;
	$whsql = '';
	$sql = "SELECT keytypeuser FROM " . DB_TABLEPRE . "user where id='" . $uid . "' and keytype='1'";
	if ($result = $db->fetch_one_array ( $sql )) {
		$keytypeuser = explode ( ',', $result ['keytypeuser'] );
		for($i = 0; $i < sizeof ( $keytypeuser ); $i ++) {
			$whsql .= $username . "='" . trim ( $keytypeuser [$i] ) . "'" . " or ";
		}
		$sqlstrname = substr ( $whsql, 0, - 3 );
		$html = " AND (" . trim ( $sqlstrname ) . ")";
	}
	return $html;
}
function get_keyuser($ui, $un) {
	global $db;
	global $_USER;
	$sql = "SELECT keytypeuser,keytype FROM " . DB_TABLEPRE . "user where id='" . $_USER->id . "' and keytype='1'";
	if ($row = $db->fetch_one_array ( $sql )) {
		echo '<input type="hidden" name="un"';
		echo ' value="' . $un . '" onpropertychange="sendForm();" />';
		echo "<input type='hidden' name='ui' value='" . $ui . "' />";
		echo '<a href="#" onClick="';
		echo "window.open ('admin.php?ac=keyuser&fileurl=public&keytype=" . $row ['keytype'] . "&un=" . $un . "', 't" . $_USER->id . "', 'height=600, width=500, top=50, left=100, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')";
		echo '">+查看下属人员</a>';
	}
}
function get_exceldown($keys, $type = 0) {
	if (! is_superadmin () && ! check_purview ( $keys )) {
	} else {
		if ($type == 1) {
			return '<button type="button" id="query_export" class="btn btn-info" onClick="javascript:document:excel.submit();">导出查询列表</button>';
		} else {
			return '<a href="javascript:document:excel.submit();" seed="CR-download-top" id="J-download"><img class="v-al-middle" src="template/default/images/2EC5tZlqdV.gif" />下载查询结果</a>';
		}
	}
}
function get_subcontent($str, $start, $end) {
	if ($start == '' || $end == '') {
		return;
	}
	$str = explode ( $start, $str );
	$str = explode ( $end, $str [1] );
	return $str [0];
}
function get_publicfileadd($number, $fileid, $filetype, $officetype, $filename, $fileaddr) {
	global $_USER;
	$fileoffice = array (
			'number' => $number,
			'fileid' => $fileid,
			'filetype' => $filetype,
			'officetype' => $officetype,
			'filename' => $filename,
			'uid' => $_USER->id,
			'date' => get_date ( 'Y-m-d H:i:s', PHP_TIME ),
			'fileaddr' => $fileaddr 
	);
	insert_db ( 'fileoffice', $fileoffice );
	return;
}
function get_logadd($id, $content, $title, $type, $userid) {
	if ($id != '') {
		$oalog = array (
				'uid' => $userid,
				'content' => $content,
				'title' => $title,
				'startdate' => get_date ( 'Y-m-d H:i:s', PHP_TIME ),
				'contentid' => $id,
				'type' => $type 
		);
		insert_db ( 'oalog', $oalog );
	}
	return;
}
function Pinyin($_String, $_Code = 'UTF8') {
	$_DataKey = "a|ai|an|ang|ao|ba|bai|ban|bang|bao|bei|ben|beng|bi|bian|biao|bie|bin|bing|bo|bu|ca|cai|can|cang|cao|ce|ceng|cha" . "|chai|chan|chang|chao|che|chen|cheng|chi|chong|chou|chu|chuai|chuan|chuang|chui|chun|chuo|ci|cong|cou|cu|" . "cuan|cui|cun|cuo|da|dai|dan|dang|dao|de|deng|di|dian|diao|die|ding|diu|dong|dou|du|duan|dui|dun|duo|e|en|er" . "|fa|fan|fang|fei|fen|feng|fo|fou|fu|ga|gai|gan|gang|gao|ge|gei|gen|geng|gong|gou|gu|gua|guai|guan|guang|gui" . "|gun|guo|ha|hai|han|hang|hao|he|hei|hen|heng|hong|hou|hu|hua|huai|huan|huang|hui|hun|huo|ji|jia|jian|jiang" . "|jiao|jie|jin|jing|jiong|jiu|ju|juan|jue|jun|ka|kai|kan|kang|kao|ke|ken|keng|kong|kou|ku|kua|kuai|kuan|kuang" . "|kui|kun|kuo|la|lai|lan|lang|lao|le|lei|leng|li|lia|lian|liang|liao|lie|lin|ling|liu|long|lou|lu|lv|luan|lue" . "|lun|luo|ma|mai|man|mang|mao|me|mei|men|meng|mi|mian|miao|mie|min|ming|miu|mo|mou|mu|na|nai|nan|nang|nao|ne" . "|nei|nen|neng|ni|nian|niang|niao|nie|nin|ning|niu|nong|nu|nv|nuan|nue|nuo|o|ou|pa|pai|pan|pang|pao|pei|pen" . "|peng|pi|pian|piao|pie|pin|ping|po|pu|qi|qia|qian|qiang|qiao|qie|qin|qing|qiong|qiu|qu|quan|que|qun|ran|rang" . "|rao|re|ren|reng|ri|rong|rou|ru|ruan|rui|run|ruo|sa|sai|san|sang|sao|se|sen|seng|sha|shai|shan|shang|shao|" . "she|shen|sheng|shi|shou|shu|shua|shuai|shuan|shuang|shui|shun|shuo|si|song|sou|su|suan|sui|sun|suo|ta|tai|" . "tan|tang|tao|te|teng|ti|tian|tiao|tie|ting|tong|tou|tu|tuan|tui|tun|tuo|wa|wai|wan|wang|wei|wen|weng|wo|wu" . "|xi|xia|xian|xiang|xiao|xie|xin|xing|xiong|xiu|xu|xuan|xue|xun|ya|yan|yang|yao|ye|yi|yin|ying|yo|yong|you" . "|yu|yuan|yue|yun|za|zai|zan|zang|zao|ze|zei|zen|zeng|zha|zhai|zhan|zhang|zhao|zhe|zhen|zheng|zhi|zhong|" . "zhou|zhu|zhua|zhuai|zhuan|zhuang|zhui|zhun|zhuo|zi|zong|zou|zu|zuan|zui|zun|zuo";
	$_DataValue = "-20319|-20317|-20304|-20295|-20292|-20283|-20265|-20257|-20242|-20230|-20051|-20036|-20032|-20026|-20002|-19990" . "|-19986|-19982|-19976|-19805|-19784|-19775|-19774|-19763|-19756|-19751|-19746|-19741|-19739|-19728|-19725" . "|-19715|-19540|-19531|-19525|-19515|-19500|-19484|-19479|-19467|-19289|-19288|-19281|-19275|-19270|-19263" . "|-19261|-19249|-19243|-19242|-19238|-19235|-19227|-19224|-19218|-19212|-19038|-19023|-19018|-19006|-19003" . "|-18996|-18977|-18961|-18952|-18783|-18774|-18773|-18763|-18756|-18741|-18735|-18731|-18722|-18710|-18697" . "|-18696|-18526|-18518|-18501|-18490|-18478|-18463|-18448|-18447|-18446|-18239|-18237|-18231|-18220|-18211" . "|-18201|-18184|-18183|-18181|-18012|-17997|-17988|-17970|-17964|-17961|-17950|-17947|-17931|-17928|-17922" . "|-17759|-17752|-17733|-17730|-17721|-17703|-17701|-17697|-17692|-17683|-17676|-17496|-17487|-17482|-17468" . "|-17454|-17433|-17427|-17417|-17202|-17185|-16983|-16970|-16942|-16915|-16733|-16708|-16706|-16689|-16664" . "|-16657|-16647|-16474|-16470|-16465|-16459|-16452|-16448|-16433|-16429|-16427|-16423|-16419|-16412|-16407" . "|-16403|-16401|-16393|-16220|-16216|-16212|-16205|-16202|-16187|-16180|-16171|-16169|-16158|-16155|-15959" . "|-15958|-15944|-15933|-15920|-15915|-15903|-15889|-15878|-15707|-15701|-15681|-15667|-15661|-15659|-15652" . "|-15640|-15631|-15625|-15454|-15448|-15436|-15435|-15419|-15416|-15408|-15394|-15385|-15377|-15375|-15369" . "|-15363|-15362|-15183|-15180|-15165|-15158|-15153|-15150|-15149|-15144|-15143|-15141|-15140|-15139|-15128" . "|-15121|-15119|-15117|-15110|-15109|-14941|-14937|-14933|-14930|-14929|-14928|-14926|-14922|-14921|-14914" . "|-14908|-14902|-14894|-14889|-14882|-14873|-14871|-14857|-14678|-14674|-14670|-14668|-14663|-14654|-14645" . "|-14630|-14594|-14429|-14407|-14399|-14384|-14379|-14368|-14355|-14353|-14345|-14170|-14159|-14151|-14149" . "|-14145|-14140|-14137|-14135|-14125|-14123|-14122|-14112|-14109|-14099|-14097|-14094|-14092|-14090|-14087" . "|-14083|-13917|-13914|-13910|-13907|-13906|-13905|-13896|-13894|-13878|-13870|-13859|-13847|-13831|-13658" . "|-13611|-13601|-13406|-13404|-13400|-13398|-13395|-13391|-13387|-13383|-13367|-13359|-13356|-13343|-13340" . "|-13329|-13326|-13318|-13147|-13138|-13120|-13107|-13096|-13095|-13091|-13076|-13068|-13063|-13060|-12888" . "|-12875|-12871|-12860|-12858|-12852|-12849|-12838|-12831|-12829|-12812|-12802|-12607|-12597|-12594|-12585" . "|-12556|-12359|-12346|-12320|-12300|-12120|-12099|-12089|-12074|-12067|-12058|-12039|-11867|-11861|-11847" . "|-11831|-11798|-11781|-11604|-11589|-11536|-11358|-11340|-11339|-11324|-11303|-11097|-11077|-11067|-11055" . "|-11052|-11045|-11041|-11038|-11024|-11020|-11019|-11018|-11014|-10838|-10832|-10815|-10800|-10790|-10780" . "|-10764|-10587|-10544|-10533|-10519|-10331|-10329|-10328|-10322|-10315|-10309|-10307|-10296|-10281|-10274" . "|-10270|-10262|-10260|-10256|-10254";
	$_TDataKey = explode ( '|', $_DataKey );
	$_TDataValue = explode ( '|', $_DataValue );
	$_Data = array_combine ( $_TDataKey, $_TDataValue );
	arsort ( $_Data );
	reset ( $_Data );
	if ($_Code != 'gb2312')
		$_String = _U2_Utf8_Gb ( $_String );
	$_Res = '';
	for($i = 0; $i < strlen ( $_String ); $i ++) {
		$_P = ord ( substr ( $_String, $i, 1 ) );
		if ($_P > 160) {
			$_Q = ord ( substr ( $_String, ++ $i, 1 ) );
			$_P = $_P * 256 + $_Q - 65536;
		}
		$_Res .= _Pinyin ( $_P, $_Data );
	}
	return preg_replace ( "/[^a-z0-9]*/", '', $_Res );
}
function _Pinyin($_Num, $_Data) {
	if ($_Num > 0 && $_Num < 160) {
		return chr ( $_Num );
	} elseif ($_Num < - 20319 || $_Num > - 10247) {
		return '';
	} else {
		foreach ( $_Data as $k => $v ) {
			if ($v <= $_Num)
				break;
		}
		return $k;
	}
}
function _U2_Utf8_Gb($_C) {
	$_String = '';
	if ($_C < 0x80) {
		$_String .= $_C;
	} elseif ($_C < 0x800) {
		$_String .= chr ( 0xC0 | $_C >> 6 );
		$_String .= chr ( 0x80 | $_C & 0x3F );
	} elseif ($_C < 0x10000) {
		$_String .= chr ( 0xE0 | $_C >> 12 );
		$_String .= chr ( 0x80 | $_C >> 6 & 0x3F );
		$_String .= chr ( 0x80 | $_C & 0x3F );
	} elseif ($_C < 0x200000) {
		$_String .= chr ( 0xF0 | $_C >> 18 );
		$_String .= chr ( 0x80 | $_C >> 12 & 0x3F );
		$_String .= chr ( 0x80 | $_C >> 6 & 0x3F );
		$_String .= chr ( 0x80 | $_C & 0x3F );
	}
	return iconv ( 'UTF-8', 'GB2312', $_String );
}
function GetMonth($date, $sign = "1") {
	$tmp_date = date ( $date );
	$tmp_year = substr ( $tmp_date, 0, 4 );
	$tmp_mon = substr ( $tmp_date, 4, 2 );
	$tmp_nextmonth = mktime ( 0, 0, 0, $tmp_mon + 1, 1, $tmp_year );
	$tmp_forwardmonth = mktime ( 0, 0, 0, $tmp_mon - 1, 1, $tmp_year );
	if ($sign == 0) {
		return $fm_next_month = date ( "Y/m", $tmp_nextmonth );
	} else {
		return $fm_forward_month = date ( "Y/m", $tmp_forwardmonth );
	}
}
function input_csv($handle) {
	$out = array ();
	$n = 0;
	while ( $data = fgetcsv_reg ( $handle, 10000 ) ) {
		$num = count ( $data );
		for($i = 0; $i < $num; $i ++) {
			$out [$n] [$i] = $data [$i];
		}
		$n ++;
	}
	return $out;
}
function fgetcsv_reg($handle, $length = null, $d = ',', $e = '"') {
	$d = preg_quote ( $d );
	$e = preg_quote ( $e );
	$_line = "";
	$eof = false;
	while ( $eof != true ) {
		$_line .= (empty ( $length ) ? fgets ( $handle ) : fgets ( $handle, $length ));
		$itemcnt = preg_match_all ( '/' . $e . '/', $_line, $dummy );
		if ($itemcnt % 2 == 0)
			$eof = true;
	}
	$_csv_line = preg_replace ( '/(?: |[ ])?$/', $d, trim ( $_line ) );
	$_csv_pattern = '/(' . $e . '[^' . $e . ']*(?:' . $e . $e . '[^' . $e . ']*)*' . $e . '|[^' . $d . ']*)' . $d . '/';
	preg_match_all ( $_csv_pattern, $_csv_line, $_csv_matches );
	$_csv_data = $_csv_matches [1];
	for($_csv_i = 0; $_csv_i < count ( $_csv_data ); $_csv_i ++) {
		$_csv_data [$_csv_i] = preg_replace ( '/^' . $e . '(.*)' . $e . '$/s', '$1', $_csv_data [$_csv_i] );
		$_csv_data [$_csv_i] = str_replace ( $e . $e, $e, $_csv_data [$_csv_i] );
	}
	return empty ( $_line ) ? false : $_csv_data;
}

function get_basename($filename)
{
	return preg_replace('/^.+[\\\\\\/]/', '', $filename);
}
?>