
<!DOCTYPE html>
<html>
<head>


    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h2>Admin Login</h2>
</div>
<form method="POST">
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="uname" value="">
    </div>
    
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="pass">
    </div>
        <div class="input-group">
        <button type="submit" class="btn" name="sub">Login</button>
    </div>
</form>
<?php 

 // this will trigger when submit button click
 if(isset($_POST['sub'])){


 $db = new mysqli("localhost","root","1","crud_db");
 // create query
 $query = "SELECT * FROM masuk WHERE username='".$_POST['uname']."' AND password='".$_POST['pass']."'";
 // execute query
 $sql = $db->query($query);
 // num_rows will count the affected rows base on your sql query. so $n will return a number base on your query
 $n = $sql->num_rows;
 // if $n is > 0 it mean their is an existing record that match base on your query above 
 if($n > 0){
   $username;
    header("location: indexlogin.php");
 //echo "Loggin";
 } else {
    echo "Incorrect username or password";
    
 }
 }
?>
</body>
</html>