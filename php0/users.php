<?php
	$conn=mysqli_connect("localhost","root","","thinksite");
	$query="SELECT * from user";
	//$sql="select * from user where usernam='{$username}' and pwd='{$pwd}'";
	$result=mysqli_query($conn,$query);
	var_dump($result);
	$list=[];
	echo '<table align="center" width="800" border="1">';//获取的数据用表格显示出来
    echo '<cabtion><h1>演示表</h1></cabtion>';
	while($data=mysqli_fetch_assoc($result))
	{
		$list[]=$data;
		echo '<tr>';
        foreach($data as $col){//遍历数据
            echo '<td>'.$col.'</td>';
        }
        echo "</tr>";
	}
	echo $str=json_encode($list);
	//$user=mysqli_fetch_assoc($result);
	//var_dump($list);
	//echo $list;
	
	//echo json_encode($list);
?>