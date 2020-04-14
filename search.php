<?php
include('conn.php');
header("content-type:text/html;charset=utf-8");
$sql="select place from house";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo $row['place'].",";
	}
}else{
  	echo "fail";
}
$conn->close();
?>