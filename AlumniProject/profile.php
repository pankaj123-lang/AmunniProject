<?php
if(isset($_REQUEST["user_id"]))
{
	include 'db.php';
	$result=mysqli_query($con,"select * from user_master where user_id='".$_REQUEST['user_id']."'");
	$data=mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	form{
		text-align: center;
		background-color: #444;
		margin-left: 30%;
		margin-right: 30%;
		margin-top: 10%;
	}
</style>
<body style="background-color: #999;">
	
	<form action="profileupdate.php" ">
		<p>Name<input type="Text" name="T1" value="<?php echo $data["user_name"]?>"></p>
		<p>User id<input type="Text" name="T2" value="<?php echo $data["user_id"]?>"></p>
		<p>Password<input type="Password" name="P1" value="<?php echo $data["password"] ?>"></p>
		<p>Gender<input type="Radio" name="Gen" value="male">Male
		<input type="Radio" name="Gen" value="female">Female</p>
		<p>Job Position<input type="text" name="JP" value="<?php echo $data["job_position"]?>"></p>
		<p>Company<input type="text" name="company"> value="<?php echo $data["company"]?>"></p>
		<p><input type="button" name="update" value="update"></p>
		<p style="color: white;"><a href="userhome.php">Return to home page</a></p>
	</form>

</body>
</html>