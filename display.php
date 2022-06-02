<?php



error_reporting(0);
$query = "SELECT * FROM emp";
$data = mysqli_connect($conn,$query);
$result = mysqli_num_rows($data);
echo "$result";

?>
