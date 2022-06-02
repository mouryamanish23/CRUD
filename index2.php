<?php include_once 'NewConnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form action="create.php" method = "POST"  enctype="multipart/form-data">
        <h2><strong><u> Emp Data :-</u></strong></h2>


        <!-- <label for="Id">Emp_Id : </label><br> -->
        Emp_Id : <input type="text"  name="Emp_Id" id=<?php echo "TREE-" . rand(10,100)  ?> value= <?php echo "TREE-" . rand(10,100)  ?>  style = "height:30px"><br><br>
        <!-- <label for="fname">Emp_First_Name :  </label><br> -->
        Emp_First_Name : <input type="text"   name="Emp_First_Name"  style = "height:30px"><br><br>

        <!-- <label for="lname"> Emp_Last_Name : </label><br> -->
        Emp_Last_Name :<input type="text"    name="Emp_Last_Name"  style = "height:30px"><br><br>

        Emp_Gender :- <br>
            <!-- <label for="male">Male</label> -->
            Male<input type="radio" name="Emp_Gender" value="Male">
            <!-- <label for="female">Female</label> -->
            Female<input type="radio" name="Emp_Gender" value="Female" >
            <!-- <label for="other">Other</label> -->
            Other<input type="radio" name="Emp_Gender"  value="other" ><br><br>

        <!-- <label for="email"> Emp_Email_id : </label><br> -->
        Emp_Email_id :<input type="email"    name="Emp_Email_id"  style = "height:30px"><br><br>

        <!-- <label for="contact">Emp_Contact : </label><br> -->
        Emp_Contact : <input type="number"    name="Emp_Contact"  style = "height:30px"><br><br>

        <!-- <label for="desig">Emp_Designation :-</label><br> -->
        Emp_Designation :-<select name="Emp_Designation" style = "height:30px">
                <option value="Front-end-Developer">Front-end-Developer</option>
                <option value="Back-end-Developer">Back-end-Developer</option>
                <option value="Full-stack-Developer">Full-stack-Developer</option>
                <option value="Manager">Manager</option>
                <option value="Executive" selected>Executive</option>
                <option value="Admin">Admin</option>
                <option value="Marketing">Marketing</option>
                <option value="Team Leader">Team Leader</option>
                <option value="HR">HR</option>

            </select><br><br>
        <!-- <label for="salary">Emp_Salary : </label><br> -->
        Emp_Salary : <input type="text"  name="Emp_Salary" style = "height:30px"><br><br>
        <div>
        Emp_Photo :   <input type="file" name="file" id="filetoupload"><br><br>
        </div>
        <!-- <label for="Submit"></label> -->
        <input type="Submit"    name="Submit" style = "height:30px; width:100px">

        <!-- <label for="reset"></label> -->
        <input type="reset"    name="reset" style = "height:30px; width:100px"><br><br>

         </form>

    <?php
        $sql = "SELECT * FROM employee";

        $result = $conn->query($sql);
        $conn->close();
    ?>
        <table>
            <tr>
                <th>Emp_Id</th>
                <th>Emp_Photo</th>
                <th>Emp_First_Name</th>
                <th>Emp_Last_Name</th>
                <th>Emp_Gender</th>
                <th>Emp_Email_id</th>
                <th>Emp_Contact</th>
                <th>Emp_Designation</th>
                <th>Emp_Salary</th>
                <th>Action</th>

            </tr>
    <?php
        while($rows=$result->fetch_assoc())
          {
    ?>
            <tr>
                <td><?php echo $rows['Emp_Id'];?></td>
                <td>
    <?php

		$img_name = $rows['Emp_Photo'];
		$img_src = 'uploads/'.$rows['Emp_Photo'];
	?>

	<img src="<?php echo $img_src; ?>" title="<?php echo $img_name; ?>"  width="150" height="75"/>



                </td>
                <!-- <td><img src="\uploads'<?php $row["Emp_Photo"];?>' "/></td> -->
                <td><?php echo $rows['Emp_First_Name'];?></td>
                <td><?php echo $rows['Emp_Last_Name'];?></td>
                <td><?php echo $rows['Emp_Gender'];?></td>
                <td><?php echo $rows['Emp_Email_id'];?></td>
                <td><?php echo $rows['Emp_Contact'];?></td>
                <td><?php echo $rows['Emp_Designation'];?></td>
                <td><?php echo $rows['Emp_Salary'];?></td>
                <td>
                    <!-- <input type="button" class= 'btn btn-secondary' value='EDIT' > -->
                    <a href='create.php?id='<?php".$data['Emp_Id']"?>
                    <input type="button" class= 'btn btn-secondary' value='EDIT' ></a>
                    <?php$id=$_GET['Emp_Id'];



$query="SELECT * FROM employee WHERE Emp_Id='$id'";


$result = mysqli_query($db,$query) or die( "My query ($query) generated an error: ".mysql_error());

$data=mysqli_fetch_array($result);
?>
                    <input type="button" class= 'btn btn-danger' value='DELETE' >

                </td>
            </tr>
    <?php
           }
    ?>
        </table>
</body>
</html>
