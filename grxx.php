<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$oname=$_POST["oname"];
$name = $_POST["name"];
$sex=$_POST["sex"];
$school = $_POST["school"];
$sql="UPDATE userdata SET  name='$name',sex = '$sex',school = '$school' where name ='$oname'";
$result = $conn->query($sql);
echo $sql;
$conn->close();
?>