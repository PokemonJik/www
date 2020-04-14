<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$name = $_POST['name'];
$filename = date("YmdHis");
$fileOldName = $filename.".temp";
$fileTemp = fopen($fileOldName,"w");
$data = base64_decode($_POST['img']);
$fileFinal = $filename.".jpg";
fwrite($fileTemp,$data);
fclose($fileTemp);
rename($fileOldName,$fileFinal);
$sql="UPDATE userdata SET img = '$fileFinal' WHERE name = '$name'";
$result = $conn->query($sql);
echo "success";
$conn->close();
?>