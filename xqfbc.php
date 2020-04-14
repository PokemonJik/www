<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$name = $_POST["name"];
$sql="select * from userdata where name = '$name'";
$result = $conn->query($sql);
if($result->num_rows>0){
	$res = mysqli_fetch_array($result);
	$sql="select * from demand where userid = {$res['id']}";
	$resulttwo = $conn->query($sql);
	if($resulttwo->num_rows>0){
		while($row = $resulttwo->fetch_assoc()){
			echo $row['demand'].",".$row['introduce'].",";
		}
	}else{
		echo "fail";
	}
}else{
	echo "fail";
}
$conn->close();
?>