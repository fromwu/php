<?php
	$username='wu';
	$pwd='123456';
	$link=mysqli_connect("localhost","root","","thinksite");
	if ($link) {
		mysqli_query($link,"set names utf8");
		//$pwd=md5($pwd);
		$sql="select * from user where usernam='{$username}' and pwd='{$pwd}'";
		$re=mysqli_query($link,$sql);
		$data=mysqli_fetch_assoc($re);
		if ($data) {
			echo $usernam."登录成功";
		}else
		{
			echo "用户名或密码不正确";
		}
	}

?>