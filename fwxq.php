<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$uname = $_POST["username"];
$hname = $_POST["housename"];
$sql="select userdata.name,house.introduction,house.picture,house.requirement from house join userdata on house.userid = userdata.id where userdata.name = '$uname' and house.name = '$hname'";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo $row['name'].",".$row['introduction'].",".$row['picture'].",".$row['requirement'].",";
	}
}else{
  	echo "fail";
}
$conn->close();
?>