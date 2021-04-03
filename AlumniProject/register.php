<?php 
 	$user_id=$_POST["userid"];
    $user_name=$_POST["username"];
    $password=$_POST["userpass"];
    $email=$_POST["useremail"];

    if(!empty($userid) || !empty($user_name) || !empty($password) || !empty($email)){
    	include "db.php";
    	mysqli_query($con,"INSERT INTO user_master values('$user_name','$user_id','$password','$email')");
    	echo "Registered successfully";
    	header('location:home.php');
    }
    else{
    	echo "All fields are required";
    	die();
    }
 ?>
 