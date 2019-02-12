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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>KRESNA</title>
<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/stylish-portfolio.css" rel="stylesheet">
</head>
<body id="page-top">
<!-- Header -->
<header class="submasthead d-flex">
<div class="container text-center my-auto">
	<h1 class="mb-1">Kresna Graha Investama</h1>
	<h3 class="mb-5"><em>Welcome to Kresna Securities</em></h3>
	
</div>
<div class="overlay"></div>
</header>
<div class="container text-justify">
	<div class="row">
		<div class="col-lg-10 mx-auto">
			<br/>
			<h2><?php echo $name;?></h2>
			<p class="lead mb-5">
			<p class="lead mb-3">
			<p class="lead mb-2">
			<font size="3"><?php echo $email;?></font>
			</p>
			</div>
			</div>
			</div>
			</html>
			<!-- <LINK BACK> -->
			<p align="right">
				<a class="btn btn-subprimary btn-xl" href="index.php">Home</a>
			</p>
			<!-- Footer -->
			<footer class="footer text-center">
			<p class="text-muted small mb-0">Copyright &copy;</p>
		</div>
		</footer>