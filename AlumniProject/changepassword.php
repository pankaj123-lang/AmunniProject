<?php
session_start();
include 'adminhome.php';
if(isset($_POST['changepwd']))
{
	$password=$_POST["password"];
	$npassword=$_POST["npassword"];
	$admin_id=$_SESSION['admin_id'];
	include 'db.php';
	$sql="update admin_master set password='".$npassword."' where admin_id='".$admin_id."' and password='".$password."'";
	$i=mysqli_query($con,$sql);
	if($i)
	{
		echo "change password sucessfully";
	}else{
		echo "error";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PASSWORD</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
</head>
<style type="text/css">
  body{
    text-align: center;
  }
</style>
<body>
	<div class="container">
  <div class="row">
    <div class="col-md-12">      
        <h1 class="entry-title"><span>Change password</span> </h1>
        <hr>
        <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" >        
       
      <div class="form-group">
          <label class="">Current Password</label>
          <div>
            <div class="input-group">
              
              <input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="">
           </div>   
          </div>
        </div>

      <div class="form-group">
          <label class="">Set Password </label>
          <div >
            <div class="input-group">
              
              <input type="password" class="form-control" name="npassword" id="password" placeholder="Choose password (5-15 chars)" value="">
           </div>   
          </div>
        </div>

        <div class="form-group">
          <label class="">Confirm Password </label>
          <div class="">
            <div class="input-group">
              
              <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password" value="">
            </div>  
          </div>
        </div>
        
      <div class="form-group">
          <div >
              <input name="changepwd" type="submit" value="Submit" class="btn btn-primary">
          </div>
      </div>

  </form>
</div>
</div>

</div></body></html>
