<?php
   $username=$_POST['username'];
   $pwd=$_POST['pwd'];
   if($username==''){
       exit('用户名不能为空');
   }
   if ($pwd=='') {
       exit('密码不能为空');
   }

   $link=mysqli_connect("localhost","root","","thinksite");
	if ($link) {
		mysqli_query($link,"set names utf8");
		//$pwd=md5($pwd);
		$sql="insert into user (username,pwd) values {$username}','{$pwd}'";
		mysqli_query($link,$sql);
		if (mysqli_affected_rows($link)==1) {
			echo $username."成功";
		}else
		{
			echo "不成功";
		}

}
?>