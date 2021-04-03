<?php
include 'db.php';
include 'header.php';
$result=mysqli_query($con, "select * from user_master");
?>
<h1>Alumni Detail</h1>
<hr>
<table border="2" width="100%">
	<tr>
		<th>User Id</th>
		<th>User Name</th>
		<th>Password</th>
		<th>Email</th>
		
	</tr>

<?php 
while($data=mysqli_fetch_assoc($result)):
 ?>
 <form >
 	<tr>
 		<td><?php echo $data["user_id"]; ?></td>
 		<td><?php echo $data["user_name"]; ?></td>
 		<td><?php echo $data["password"]; ?></td>
 		<td><?php echo $data["Email_id"]; ?></td>
 		
 	</tr>
 </form>
 <?php
 endwhile;
 ?>
 </table>