<?php
include_once 'NewConnect.php';

$sql = "SELECT * FROM employee";

$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Employee-Data</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        } 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
     th,td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
    </style>
</head>
 
<body>
        <table>
            <tr>
                <th>Emp_Id</th>
                <th>Emp_First_Name</th>
                <th>Emp_Last_Name</th>
                <th>Emp_Gender</th>
                <th>Emp_Email_id</th>
                <th>Emp_Contact</th>
                <th>Emp_Designation</th>
                <th>Emp_Salary</th>
                
            </tr>
            <?php 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Emp_Id'];?></td>
                <td><?php echo $rows['Emp_First_Name'];?></td>
                <td><?php echo $rows['Emp_Last_Name'];?></td>
                <td><?php echo $rows['Emp_Gender'];?></td>
                <td><?php echo $rows['Emp_Email_id'];?></td>
                <td><?php echo $rows['Emp_Contact'];?></td>
                <td><?php echo $rows['Emp_Designation'];?></td>
                <td><?php echo $rows['Emp_Salary'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
</body>
 
</html>