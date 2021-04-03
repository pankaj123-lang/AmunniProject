<?php
include 'db.php';
$admin_id=$_REQUEST['admin_id'];
$new_password=$_REQUEST["new_password"];
// $new_password=md5($new_password);
mysqli_query($con,"update admin_master set password='$new_password' where admin_id='$admin_id' ");
	echo "success";
	?>