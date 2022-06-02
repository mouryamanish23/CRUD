<?php

include_once 'connection.php';

$Id = $_POST["Id"];
$Name = $_POST["Name"];
$Desig = $_POST["Desig"];
$Salary = $_POST["Salary"];
$Gender = $_POST["Gender"];

$sql = "INSERT INTO emp ( `Id`, `Name`, `Desig`, `Salary`, `Gender`)
                 VALUES ( '$Id','$Name','$Desig','$Salary','$Gender')";

$run = mysqli_query($conn, $sql) ;

if($run){
   echo "New record has been added successfully !";
        } 
    else{
        echo "Form not submitted";
        }

$conn->close();
?>
