<?php
session_start();
include "db.php";
if(isset($_POST["login"]))
{
    $user_id=$_POST["userid"];
    $password=$_POST["userpass"];
    
    $sql=mysqli_query($con,"SELECT * FROM `user_master` where user_id='".$user_id."' and password='".$password."'");
    $data=mysqli_fetch_assoc($sql);
    if($data)
    {
        if($user_id==$data["user_id"])
        {
            $_SESSION["user_id"]=$user_id;
            header('location:userhome.php');
            // echo "sucess";
        }
        else
        {
            //$msg="Invalid admin_id or password";
            echo "not sucess";
        }
    }
}
// if(isset($["register"]))
// {
//     $user_id=$_POST["userid"];
//     $user_name=$_POST["username"];
//     $password=$_POST["userpass"];
//     $email=$_POST["useremail"]
   
//     mysqli_query($con,"INSERT INTO `user_master`(`user_name`, `user_id`, `password`, `Email_id`) VALUES ([$user_name],[$user_id],[$password],[$email])");
//     echo"register success";

// }
?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/cssstyle.css">
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
    <div class="bg" >
        <img src="images/sun.jpg">
        <div class="navbar">
            <nav>
               <input type="checkbox" id="check" >
               <label for="check" class="checkbtn" onclick="hide()">
                 <i class="fa fa-bars"></i>
                   <!-- <i class="fas fa-bars"></i> -->
               </label>
                <a href="https://www.igitsarang.ac.in">IGIT SARANG</a>

                <ul id="menuitems">
                    <li><a class="active" href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="news.php">Latest News</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="adminlogin.php">ADMIN</a></li>
                     
                </ul>
            </nav>
        </div>
        

        <div class="form-box"  id="login-form">
            
            <div class="btn-box">
                <div id="btn"></div>
                <button type="button" class="toggle-button" onclick="login()">Login</button>
                <button type="button" class="toggle-button" onclick="register()">Sign up</button>
            </div>

        <form id="login" class="input-group" method="post">
            <input type="text" class="input-field" name="userid" placeholder="Enter User Id" required>
            <input type="password" class="input-field" name="userpass" placeholder="Enter Password" required>
            <button type="submit" name="login" class="submit-btn">Submit</button>
        </form>
        <form id="register" class="input-group" action="register.php" method="post">
            <input type="text" class="input-field" name="userid" placeholder="User Id" required>
            <input type="text" class="input-field" name="username" placeholder="Full Name" required>
            <input type="email" class="input-field" name="useremail" placeholder="Email Id" required>
            <input type="password" class="input-field" name="userpass" placeholder="Enter Password" required>
            <button type="submit" name="register" class="submit-btn">Register</button>
        </form>
     </div>
    
</div>
<footer>
    <div class="main-content">
        <div class="left box">
            <h2>About Us</h2>
            <div class="content">
                <p>ha hu ug uyga gugug fggga ygygy guyguyg ugygauy gkuawahh iuhh uahuhuya uy auh</p>
                <div class="social">
                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>

                </div>
            </div>
        </div>
        <div class="center box">
            <h2>Address</h2>
            <div class="content">
                <div class="place">
                    <span class="fa fa-map-marker"></span>
                    <span class="text">IGIT SARANG</span>
                </div>
                <div class="phone">
                    <span class="fa fa-phone"></span>
                    <span class="text">+91985331188</span>
                </div>
                <div class="email">
                    <span class="fa fa-envelope"></span>
                    <span class="text">dasdhagg@gmail.com</span>
                </div>
            </div>
        </div>
        <div class="right box">
            <h2>Contact Us</h2>
            <div class="content">
                <form action="#">
                    <div class="email">
                        <div class="text">Email</div>
                        <input type="email" name="" required="">
                    </div>
                    <div class="msg">
                        <div class="text">Message</div>
                        <textarea rows="2" cols="25" required=""></textarea>
                    </div>
                    <div class="button">
                        <button type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
	<script >
	 var x=document.getElementById("login");
         var y=document.getElementById("register");
         var z=document.getElementById("btn");
         function register(){
             x.style.left="-400px";
             y.style.left="50px";
             z.style.left="110px";
         }
         function login(){
             x.style.left="50px";
             y.style.left="450px";
             z.style.left="0px";
         }

     </script>
  
</body>
</html>
