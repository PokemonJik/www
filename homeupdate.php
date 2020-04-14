<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$oname=$_POST["oname"];
$oplace=$_POST["oplace"];
$name = $_POST["name"];
$place = $_POST["place"];
$introduce = $_POST["introduce"];
$requirement = $_POST["requirement"];

$sql="select id from house where name = '$oname' and place='$oplace'  ";
$result = $conn->query($sql);
$res = mysqli_fetch_array($result);


$sql="UPDATE house SET  name='$name',place = '$place',introduction = '$introduce',requirement='$requirement' where id = {$res['id']}";
$result = $conn->query($sql);
echo $sql;
$conn->close();
?>