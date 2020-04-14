<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$name = $_POST["name"];
$sql="select house.name,house.place from record join house on record.houseid = house.id join userdata on record.userid = userdata.id where userdata.name = '$name'";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo $row['name'].",".$row['place'].",";
	}
}else{
  	echo "fail";
}
$conn->close();
?>