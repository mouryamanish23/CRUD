<?php
include 'connection.php';

$sql = "UPDATE emp SET Name='Jaggu' WHERE Id = 121";

$run = mysqli_query($conn, $sql) ;

if($run){
   echo "New record has been added successfully !";
        } 
    else{
        echo "Form not submitted";
        }


?>
