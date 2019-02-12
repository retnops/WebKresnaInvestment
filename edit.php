<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$status=$_POST['status'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile', status='$status' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: indexlogin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
	$status = $user_data['status'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
	 <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>
 <br/><h3 align="center">Edit News</h3><br/>
<body><center>
 <!-- <h3 align="center">Edit Post</h3> -->
	
	<form name="update_post" method="post" action="edit.php">
		<div class="container" style="width: 60%">
		<div class="table-responsive">
   		<table class="table table-bordered">
			<tr><td>Title</td></tr>
			<tr>
				<td><input type="text" style="width: 70%" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr><td>Content</td></tr>
			<tr>
				<td><textarea type="text" rows="13" cols="104" name="email"><?php echo $email;?></textarea></td>
			</tr>
			<tr><td>Tag</td></tr>
			<tr>
				<td><input type="text" style="width: 70%" name="mobile" value="<?php echo $mobile;?>"></td>
			</tr>
			<tr><td><input type="radio" name="status" value="aktif" checked=""> Aktif <input type="radio" name="status" value="nonaktif"> Nonaktif </td></tr>
			<tr>
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<td><input type="submit" name="update" value="Update"><input type="reset" value="Cancel"></td>
			</tr>
		</table>
	</div>
</div>
	</form></center>