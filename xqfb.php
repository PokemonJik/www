<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$name = $_POST["name"];
$demand = $_POST["demand"];
$introduce = $_POST["introduce"];
$sql="select * from userdata where name = '$name'";
$result = $conn->query($sql);
if($result->num_rows>0){
	$res = mysqli_fetch_array($result);
  	$sql="INSERT INTO demand VALUES (NULL, {$res['id']}, '$demand', '$introduce')";
  	$result = $conn->query($sql);
  	echo "success";
}else{
	echo "用户信息不存在";
}
$conn->close();
?>