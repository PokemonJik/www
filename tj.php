<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$sql="select userdata.name as username,house.name as housename,house.place,house.picture from house join userdata on house.userid = userdata.id";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo $row['username'].",".$row['housename'].",".$row['place'].",".$row['picture'].",";
	}
}else{
  	echo "fail";
}
$conn->close();
?>