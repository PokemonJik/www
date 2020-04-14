<?php
include('conn.php');
$conn->query("SET NAMES 'UTF8'");
$phone = $_POST["phone"];
$paswd = $_POST["paswd"];
$sql="select name,sex,school from userdata where userid = '$phone' and paswd = '$paswd'";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo $row['name'].",".$row['sex'].",".$row['school'].",";
	}
}else{
  	echo "fail";
}
$conn->close();
?>