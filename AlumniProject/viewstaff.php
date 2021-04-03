<?php
include 'db.php';
include 'adminhome.php';
$result=mysqli_query($con, "select * from staff_master");
?>
<h1>Staff Detail</h1>
<hr>
<table border="2" width="100%">
	<tr>
		<th>Staff Id</th>
		<th>Staff Name</th>
		<th>Address</th>
		<th>Email</th>
		<th>Gender</th>
		<th>action</th>
	</tr>

<?php 
while($data=mysqli_fetch_assoc($result)):
 ?>
 <form action="manage1.php">
 	<tr>
 		<td><?php echo $data["user_id"]; ?></td>
 		<td><?php echo $data["user_name"]; ?></td>
 		<td><?php echo $data["address"]; ?></td>
 		<td><?php echo $data["Email_id"]; ?></td>
 		<td><?php echo $data["gender"]; ?></td>
 		<td>
 			<input type="hidden" value="<?php echo $data["user_id"]; ?>" name="user_id">
 			<input type="submit" value="Delete" name="b1" >
 			<input type="submit" value="Edit" name="b1">
 		</td>
 	</tr>
 </form>
 <?php
 endwhile;
 ?>
 </table>