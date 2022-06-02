<?php
include 'NewConnect.php';

$sql = "UPDATE employee SET ( 
         Emp_Id = '$Emp_Id',
         Emp_Photo = '$file_name',     
         Emp_First_Name = '$Emp_First_Name',
         Emp_Last_Name = '$Emp_Last_Name',
         Emp_Gender = '$Emp_Gender',
         Emp_Email_id = '$Emp_Email_id',
         Emp_Contact = '$Emp_Contact',
         Emp_Designation = '$Emp_Designation',
         Emp_Salary = '$Emp_Salary')
         WHERE Emp_Id = $Id ;
         
$run = mysqli_query($conn, $sql) ;

if($run){
   echo "New record has been added successfully !";
        } 
    else{
        echo "Form not submitted";
        }


?>
