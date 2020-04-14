<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$name = $_POST['name'];
$housename = $_POST['housename'];
$place = $_POST['place'];
$intro = $_POST['intro'];
$demand = $_POST['demand'];
$filename = date("YmdHis");
$fileOldName = $filename.".temp";
$fileTemp = fopen($fileOldName,"w");
$data = base64_decode($_POST['img']);
$fileFinal = $filename.".jpg";
fwrite($fileTemp,$data);
fclose($fileTemp);
rename($fileOldName,$fileFinal);
$sql="select * from userdata where name = '$name'";
$result = $conn->query($sql);
if($result->num_rows>0){
	$res = mysqli_fetch_array($result);
  	$sql="INSERT INTO house VALUES (NULL, {$res['id']}, '$housename', '$fileFinal','$place','$intro','$demand')";
  	$result = $conn->query($sql);
  	echo "success";
}else{
	echo "fail";
}
$conn->close();
?>