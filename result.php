<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$place = $_POST["place"];
$sql="select userid,introduction,requirement,picture,name from house  where place ='$place'";
$result = $conn->query($sql);
if($result->num_rows>0){
	$res = mysqli_fetch_array($result);
    $sql="select name from userdata  where id ={$res['userid']}";
    $result2 = $conn->query($sql);
    $res2 = mysqli_fetch_array($result2);
    echo $res2['name'].",".$res['introduction'].",".$res['picture'].",".$res['requirement'].",".$res['name'].",";

}else{
  	echo "fail";
}
$conn->close();
?>