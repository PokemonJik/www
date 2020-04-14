<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$nm = $_POST["name"];
echo "PhPname: $nm";
echo "1234556";
$sql="DELETE FROM house where name = '$nm' ";
$result = $conn->query($sql);
if($result){
	echo "success";
}
$conn->close();
?>