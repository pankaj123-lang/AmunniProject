<?php
include 'db.php';
mysqli_query($con, "update user_master set user_id='".$_REQUEST["user_id"]."', password='".$_REQUEST["password"]."', where user_id='".$_REQUEST["user_id"]."'");
header('location:editviewalumni.php');
echo "sucess";
?>