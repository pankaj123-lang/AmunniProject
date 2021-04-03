<?php
$admin_id=strip_tags($_REQUEST['admin_id']);
$sql="select * from admin_master where admin_id='".$admin_id."' ";
include 'db.php';
$i=mysqli_query($con,$sql);
if($arr=mysqli_fetch_array($i))
{
	echo "success";
	header('location:adminforgotnew.php');
}else{
	echo "invalid Admin id ";
}