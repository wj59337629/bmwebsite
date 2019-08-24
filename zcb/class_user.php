<?php

class User {
	
	var $db;
	var $id = 0;
	var $groupid = 3;
	var $name = '';
	var $ip;
	var $referer;
	var $groupname;
	var $purview;
	var $unionid;
	
	function __construct() {
		$this->user();
	}
	
	function User() {
		$this->db = $GLOBALS['db'];
// 		$this->ip = get_onlineip();
		$this->referer = empty($_SERVER['HTTP_REFERER']) ? '' : $_SERVER['HTTP_REFERER'];
		$this->check_user();
		if ( !@include(CACHE_ROOT.'cache_usergroup_'.$this->groupid.'.php') ) {
			include_once(TOA_ROOT.'include/function_cache.php');
			recache('usergroup');
			//exit('成功缓存用户组信息，请刷新页面！');
		} else {
			$this->groupname = $groupname;
			$this->purview = $purview;
		}
	}
	
	//用户登录
	//返回：1  登录成功, -1 用户不存在, -2 密码错误, -3 未通过审核	-4admin不能参与业务 -6请选择账套
	function login($username, $password, $remember = 0) {
		if ( empty($username) || empty($password) ) return 0;
		
		$sql = "SELECT * FROM ".DB_TABLEPRE."user WHERE username = '$username'";
		if ( $user = $this->db->fetch_one_array($sql) ) {
			if ( $user['password'] == md5($password) ) {
				$userkey = random(10);
				$auth = authcode("$user[id]\t".md5($user['password'].$userkey.$_SERVER['HTTP_USER_AGENT']));
				
				$expire = $remember ? 86400 * 365 : 0;
				set_cookie('auth', $auth, $expire);

				$updatearr = array(
					'userkey' => $userkey
				);
				$this->update($user['id'], $updatearr);
				//写入登录日记
				 $insertarr = array(
					'uid' => $user['id'],
					'name' => $user['username'],
					'logindate' => get_date('Y-m-d H:i:s',PHP_TIME),
					'enddate' => get_date('Y-m-d H:i:s',PHP_TIME),
// 					'ip' => get_onlineip()
				);
				$this->db->insert('loginlog', $insertarr);
				return 1;
					
			}
			return -2;
		}
		return -1;
	}
	
	//检查用户状态
	function check_user() {
		if ( !$auth = get_cookie('auth') ) return false;
		list($uid, $password ) = explode("\t", authcode($auth, 'DECODE'));
		
		if (is_numeric($uid)){
			$sql = "SELECT * FROM ".DB_TABLEPRE."session WHERE uid = '$uid' AND password = '".addslashes($password)."'";
			if ( $result = $this->db->fetch_one_array($sql) ) {
				$this->id = $result['uid'];
				$this->name = addslashes($result['username']);
				$this->groupid = $result['groupid'];
			}else {
				$sql = "SELECT id AS uid,username,password,groupid,userkey FROM ".DB_TABLEPRE."user WHERE  id = '$uid'";
				if ( $result = $this->db->fetch_one_array($sql) ) {
					if ( $password == md5($result['password'].$result['userkey'].$_SERVER['HTTP_USER_AGENT']) ) {
						$this->id = $result['uid'];
						$this->name = addslashes($result['username']);
						$this->groupid = $result['groupid'];
						$result['password'] = $password;
						unset($result['userkey']);
						$this->add_session($result);
					}
				}
			}
		}
		if (!$this->id ) {
			$this->logout();
		}
		
	}
	
	//更新
	function update($userid, $updatearr) {
		return $this->db->update('user', $updatearr, array('id' => $userid));
	}
	
	function get_pv($key) {
		return $this->purview[$key];
	}

	//退出登录
	function logout() {
		global $db;
		$sql="SELECT * FROM ".DB_TABLEPRE."loginlog where uid='".$this->id."' ORDER BY id desc limit 0,1";
		$query = $db->query($sql);
		$html = '';
		while ($rowuser = $db->fetch_array($query)) {
			$html .= $rowuser[id];
		}
		$updatedate = array(
			'enddate' => get_date('Y-m-d H:i:s',PHP_TIME)
		);
		$this->db->update('loginlog',$updatedate, array('id' => $html));
		$updateuser = array(
			'enddate' => get_date('Y-m-d H:i:s',PHP_TIME)
		);
		$this->db->update('online',$updateuser, array('uid' => $this->id));
		$this->id = 0;
		set_cookie('auth');
	}
	
	//插入session
	function add_session($data) {
// 		$data['ip'] = ip2long(get_onlineip());
		$this->db->insert('session', getsql($data), true);
	}
	function getsql($content){
		$str='select,join,union,where,insert,delete,and,drop,create,script,alert,concat';
		$strvalue=explode(',',$str);
		$m=0;
		for($i=0;$i<sizeof($strvalue);$i++){
			if(substr_count(strtolower($content),$strvalue[$i])>0){
				$m++;
			}
		}
		if($m>0){
			return '系统安全检测到'.$m.'个系统关键词，请更改内容！';
		}else{
			return $content;
		}
	}
	
	//注册用户
	//返回 1 注册成功 2 用户名重复
	function register($username,$pwd,$name,$district,$tel,$type,$identity,$usertype,$email){
		if ( empty($username) || empty($pwd) ) return 0;
		
		$repeat = $this->db->result("select count(*) from ".DB_TABLEPRE."user where username='".$username."'");
		
		if($repeat>=1){
			return 2;
		}else{
			//生成用户信息
			$userinfo = array(
				'username' => $username,
				'password' => md5($pwd),
				'companytype' => $usertype,
				'groupid' => 6,
				'ischeck' => 0,
				'date' => get_date('Y-m-d H:m:s',PHP_TIME),
				'online' => 0,
				'numbers' => 999
			);
			
			$this->db->insert('user',$userinfo);
			
			$uid = $this->db->insert_id();
			
			$userview = array(
				'name' => $name,
				'uid' => $uid,
				'province' => $district,
				'identity_type' => $type,
				'identity' => $identity,
				'phone' => $tel,
				'email' => $email
			);
			
			$this->db->insert('user_view',$userview);
			
			return 1;
		}
	}
	
}
?>