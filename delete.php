<?php
include 'connection.php';

$sql = "DELETE FROM emp  WHERE Id = 258";

$run = mysqli_query($conn, $sql) ;

if($run){
   echo "New record has been added successfully !";
        } 
    else{
        echo "Form not submitted";
        }


?>
