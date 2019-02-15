<?php
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	if($username==''){
		exit('用户名不能为空');
	}
	if ($pwd=='') {
		exit('密码不能为空');
	}
	echo $username;
	$link=mysql_connect("localhost","root","","thinksite");
	if ($link) {
		mysql_query($link,"set names utf8")
		//$pwd=md5($pwd);
		$sql="select * from user where usernam='{$suername}' and pwd='{$pwd}'";
		$re=mysql_query($link,$sql);
		$data=mysql_fetch_assoc($re);
		if ($data) {
			echo $usernam."登录成功";
		}else
		{
			echo "用户名或密码不正确";
		}
	}

?>