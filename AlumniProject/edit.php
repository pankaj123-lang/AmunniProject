<?php
if(isset($_REQUEST["user_id"]))
{
	include 'db.php';
	$result=mysqli_query($con,"select * from user_master where user_id='".$_REQUEST['user_id']."'");
	$data=mysqli_fetch_assoc($result);
}
?>
<center><h1>Registation Detail</h1>

<hr>
<form action="update.php">
<h3>Users:<?php echo $data["user_id"] ?></h3>
<table border="2">
<tr>
<th>User_Id</th>
<td><input type="text" name="user_id" value="<?php echo $data["user_id"] ?>"></td>
</tr>
<tr>
<th>password</th>
<td><input type="password" name="password" value="<?php echo $data["password"] ?>"></td>
</tr>
<tr>
<th>User_Name</th>
<td><input type="text" name="user_name" value="<?php echo $data["user_name"] ?>"></td>
</tr>
<tr>
<th>EMAIL</th>
<td><input type="text" name="Email_id" value="<?php echo $data["Email_id"] ?>"></td>
</tr>
<th>Action</th>
<tr>
<td><input type="hidden" name="user_id" value="<?php echo $data["user_id"] ?>"></td>
<td><input type="submit" value="update">
</td>
</tr>
</table>
</form>
</center>