<?php

include_once 'connection.php';

$sql = "SELECT * FROM emp";

$result = $conn->query($sql);
// $conn->close();
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
                <th>Id</th>
                <th>Name</th>
                <th>Desig</th>
                <th>Salary</th>
                <th>Gender</th>
            </tr>
            <?php 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Id'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Desig'];?></td>
                <td><?php echo $rows['Salary'];?></td>
                <td><?php echo $rows['Gender'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
</body>
 
</html>