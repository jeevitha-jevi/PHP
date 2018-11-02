<?php
$conn=mysqli_connect('localhost','root','root','browse');
$brow=mysqli_query($conn,'SELECT `name`, `status` FROM `browser`');
$data=array();
foreach ($brow as $value) {

	$data[]=$value;
}
echo json_encode($data);
?>