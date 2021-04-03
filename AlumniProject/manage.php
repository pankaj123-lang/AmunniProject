<?php
$func=$_REQUEST["b1"];
$func();
function delete(){
	include 'db.php';
	$i=mysqli_query($con,"delete from user_master where user_id='".$_REQUEST["user_id"]."'");
	header('location:editviewalumni.php');
}
function edit(){
	header('location:edit.php?user_id='.$_REQUEST["user_id"]);
}
?>