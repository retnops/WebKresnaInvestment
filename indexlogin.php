
<?php
$connect = mysqli_connect("localhost", "root", "1", "crud_db");
$record_per_page = 5;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}
$start_from = ($page-1)*$record_per_page;

$query = "SELECT * FROM users order by tglup DESC LIMIT $start_from, $record_per_page";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Admin Page</title>
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
  <h3 class="mb-5"><em>Welcome to Admin Page</em></h3>
  </div>
<div class="overlay"></div>
</header>
<div class="container text-justify">
  <div class="row">
      <br/>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <style>
  a {
   padding:8px 10px;
   border:0px solid #230C4F;
   color:#333;
  }
  </style>
 </head>
 <body>
  <br/><br/>
  <div class="container">
   <br/><h3 align="center">KRESNA News</h3><br />
   <div class="table-responsive">
    <table class="table table-bordered">

    <p align="left">
        <a href="indexlogin.php">Logout</a>
        <a href="add.php">Create Post</a>
    </p>

     <tr>
      <p align="center">
     <th>Judul</th> <th>Tag</th> <th>Konten</th> <th>Status</th> <th>Tanggal</th> <th>Tanggal Update</th> <th>Action</th>
     </tr>
     <?php
     while($user_data = mysqli_fetch_array($result))
     { 
    echo "<td>".$user_data['name']."</td>";   
    echo "<td>".$user_data['mobile']."</td>";
    echo "<p><td>".substr($user_data ['email'], 0, 100)."<a href='more.php?id=$user_data[id]'>See More</a></td></p>";
    echo "<td>".$user_data['status']."</td>";
    echo "<td>".$user_data['tgl']."</td>"; 
    echo "<td>".$user_data['tglup']."</td>"; 
    echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a></td></tr> ";
     }
     ?>

    </table>
    <div align="center">
    <br />
    <?php
    $page_query = "SELECT * FROM users ORDER BY tglup DESC";
    $page_result = mysqli_query($connect, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5)
    {
     $start_loop = $total_pages -1;
    }
    $end_loop = $start_loop + 4;
    if($page > 1)
    {
     echo "<a href='indexlogin.php?page=1'>First</a>";
     echo "<a href='indexlogin.php?page=".($page - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='indexlogin.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='indexlogin.php?page=".($page + 1)."'>>></a>";
     echo "<a href='indexlogin.php?page=".$total_pages."'>Last</a>";
    }
    
    ?>
    </div>
    <br /><br />
   </div>
  </div>
 </body>
</html>
