<?php
$func=$_REQUEST["b1"];
$func();
function delete(){
	include 'db.php';
	$i=mysqli_query($con,"delete from staff_master where user_id='".$_REQUEST["user_id"]."'");
	header('location:viewstaff.php');
}
function edit(){
	header('location:edit1.php?user_id='.$_REQUEST["user_id"]);
}
?>