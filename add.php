<html>
<head>
	<title>Add News</title>
<!-- 	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script> -->
  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
</head>
  <br/><h3 align="center">Add News</h3><br />
<body><center>
	<a href="indexlogin.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Judul</td>
				<td><input type="text" name="name" required=""></td>
			</tr>
			<tr> 
				<td>Konten</td>
				<td><textarea rows="20" cols="100" name="email"></textarea></td>
					<!-- <textarea> Konten </textarea> -->
			</tr>
			<tr> 
				<td>Tag</td>
				<td><input type="text" name="mobile" required=""></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form></center>


	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "User added successfully. <a href='indexlogin.php'>View Users</a>";
	}
	?>
</body>
</html>