<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$name = $_POST["name"];
$demand = $_POST["demand"];
$introduce = $_POST["introduce"];
$sql="select * from userdata where name = '$name'";
$result = $conn->query($sql);
$res = mysqli_fetch_array($result);
$sql="UPDATE demand SET demand = '{$_POST['demand']}',introduce = '{$_POST['introduce']}' where userid = {$res['id']}";
$result = $conn->query($sql);
echo "success";
$conn->close();
?>