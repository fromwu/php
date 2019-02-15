<?php
    $username='wu';
    $pwd='123456';
    $link=mysqli_connect("localhost","root","","thinksite");
    //var_dump($link);
    if ($link) {
		mysqli_query($link,"set names utf8");
		$pwd=md5($pwd);
        //$sql="select * from user where usernam='{$username}' and pwd='{$pwd}'";
        //$sql="insert into user (usernam,pwd)values('carel1','1234567')";
        //$sql="INSERT INTO user (username,pwd)VALUES ('John', 'Doe')";
        $sql="INSERT INTO user (username,pwd)VALUES ('$username', '$pwd')";
        /*mysql_select_db("my_db", $con);
            $sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
        */
        //$re=mysqli_query($link,"insert into user (username,pwd)values('carel','123456')");

        $re=mysqli_query($link, $sql);
        var_dump($re);
        $rows=mysqli_affected_rows($link);
        var_dump($rows);
    }
?>