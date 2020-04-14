<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$name = $_POST["username"];
$shopname = $_POST["shopname"];
$place = $_POST["place"];
$sql="select id from userdata where userdata.name = '$name' ";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		 $userid = $row['id'];
	}
}else{
  	echo "fail";
}
$sql="select house.id from house where name = '$shopname' and place = '$place'";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		 $houseid = $row['id'];
	}
}else{
  	echo "fail";
}
$sql="DELETE FROM gwc where uid = '$userid' and hid = '$houseid'";
$result = $conn->query($sql);
if($result){
	echo "success";
}
$conn->close();
?>