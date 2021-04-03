<?php
include 'db.php';
mysqli_query($con, "update user_master set user_id='".$_REQUEST["T2"]."', password='".$_REQUEST["P1"]."',user_name='".$_REQUEST["T1"]."',gender='".$_REQUEST["Gen"]."',job_position='".$_REQUEST["JP"]."',company='".$_REQUEST["company"]."' where user_id='".$_REQUEST["user_id"]."'");
header('location:profile.php');
echo "sucess";
?>