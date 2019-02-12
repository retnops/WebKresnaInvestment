<?php
// Display selected user data based on id
// Getting id from url
include_once("config.php");
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
}
?>
<html>
<head>	
	
	</head>
 
<body><center>
	<a href="indexlogin.php">Home</a>
	<br/><br/>
		<table width="70%" border="1">
			<tr>
				<th width="100px" align="left"><h1><?php echo $name;?></h1> </th>
				
			</tr>
			<tr>
				<td align="justify"><?php echo $email;?></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
			</tr>
		</table></center>
</body>
</html>