
<?php
session_start();
if(isset($_POST["login"]))
{
	$admin_id=$_POST["adminid"];
	$password=$_POST["password"];
	include "db.php";
	$sql=mysqli_query($con,"SELECT * FROM `admin_master` where admin_id='".$admin_id."' and password='".$password."'");
	$data=mysqli_fetch_assoc($sql);
	if($data)
	{
		if($admin_id==$data["admin_id"])
		{
			$_SESSION["admin_id"]=$admin_id;
			header('location:adminhome.php');
			echo "sucess";
		}
		else
		{
			//$msg="Invalid admin_id or password";
			echo "not sucess";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/usercss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
    img{
        height: 600px;
        min-height: 100vh;
        background-size: cover;
        width: 100%;
    }
</style>
<body>
	<div class="bg">
		<img src="images/sun.jpg">
		<div class="container">
			<div class="admin">
				<p>ADMIN LOGIN</p>
			</div>
			<form id="login" class="input-group" method="post">
            	<input type="text" class="input-field" name="adminid" placeholder="Enter Admin Id" required>
            	<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
            	<a href="forgotadmin.php" style="font-size: 12px; margin-left: 140px;">FORGOT PASSWORD?</a>
            	<button type="submit" name="login" class="submit-btn">Submit</button>
        	</form>
		</div>
	</div>

</body>
</html>