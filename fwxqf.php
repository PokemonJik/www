<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$own = $_POST["own"];
$uname = $_POST["username"];
$hname = $_POST["housename"];
$sql="select id from userdata where name = '$own'";
$result = $conn->query($sql);
if($result->num_rows>0){
	$row = $result->fetch_assoc();
	$a = $row['id'];
}
$sql="select house.id from house join userdata on house.userid = userdata.id where house.name = '$hname' and userdata.name = '$uname'";
$result = $conn->query($sql);
if($result->num_rows>0){
	$row = $result->fetch_assoc();
	$b = $row['id'];
}
$sql="INSERT INTO gwc VALUES (NULL, '$a', '$b')";
$result = $conn->query($sql);
echo "success";
$conn->close();
?>