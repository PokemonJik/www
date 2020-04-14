<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$name = $_POST["name"];
$sql="select userdata.id from userdata where userdata.name = '$name' ";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		 $userid = $row['id'];
	}
	$sql="select house.name as hname,userdata.name as uname,house.place,house.picture from gwc join house on gwc.hid = house.id join userdata on house.userid=userdata.id where gwc.uid = '$userid' ";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			 echo $row['uname'].",".$row['hname'].",".$row['place'].",".$row['picture'].",";
		}
	}else{
	  	echo "fail";
	}
}else{
  	echo "fail";
}
$conn->close();
?>