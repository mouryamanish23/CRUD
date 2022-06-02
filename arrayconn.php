<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'manish';

$conn = mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo "success";

}else{
    echo "failed";
}



?>
