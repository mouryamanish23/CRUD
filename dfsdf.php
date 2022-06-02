<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'employee';
echo "Manish";
$conn = mysqli_connect($servername,$username,$password,$database) or die("unsuccessful".$conn->error);
echo $_SERVER['REQUEST_METHOD'];
?>