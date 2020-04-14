<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$phone = $_POST["phone"];
$paswd = $_POST["paswd"];
$sql="select * from userdata where userid = '$phone'";
$result = $conn->query($sql);
if($result->num_rows>0){
  	echo "该用户已经注册";
}else{
	unset($res);
	$commen="C:\Users\Nanaya\Anaconda3\\envs\\zsy\python.exe C:/zsy/zsy.py {$phone} {$paswd}";
	exec($commen,$res,$ret);
	if($ret==0){
		$sql="INSERT INTO userdata VALUES (NULL, '$res[1]', '$phone', '$paswd', '$res[2]', '$res[3]', '$phone')";
		$result = $conn->query($sql);
  		echo "success";
	}else{
		echo "学信网账号有误";
	}
}
$conn->close();
?>