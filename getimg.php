<?php
include('conn.php');
$conn->query("SET NAMES 'UTF8'");
$name = $_POST["name"];
$sql="select img from userdata where name = '$name'";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		if(empty($row['img'])){
			echo 'fail';
		}else{
			echo $row['img'].",";
		}
	}
}else{
  	echo "fail";
}
$conn->close();
?>