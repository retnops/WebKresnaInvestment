<?php
$connection = mysqli_connect('localhost', 'root', '1');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'crud_db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}