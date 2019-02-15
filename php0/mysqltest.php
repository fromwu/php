<?php
    $link=mysqli_connect("localhost","root","","thinksite");
    //var_dump($link);
    if ($link) {
		mysqli_query($link,"set names utf8");
		//$pwd=md5($pwd);
        //$sql="select * from user where usernam='{$username}' and pwd='{$pwd}'";
        //$sql="insert into user (usernam,pwd)values('carel','123456')";
        $re=mysqli_query($link,"insert into user (username,pwd)values('carel','123456')");
        var_dump($re);
        $rows=mysqli_affected_rows($link);
        var_dump($rows);
    }
?>