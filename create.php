<?php
include_once 'NewConnect.php';

// $sql1 = "SELECT max(Emp_Id) as Emp_Id FROM employee";
// $res = mysqli_query($conn,$sql1);
// function photo(){
//     if(isset($_FILES['file'])){
//     $file_name=$_FILES['file']['name'];
//     $file_size=$_FILES['file']['size'];
//     $file_tmp=$_FILES['file']['tmp_name'];
//     $file_type=$_FILES['file']['type'];

//     move_uploaded_file($file_tmp,"uploads/".$file_name);
//     }
// }


// if(isset($_FILES['file'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    // $file_name=$_FILES['file']['name'];
    // $file_size=$_FILES['file']['size'];
    // $file_tmp=$_FILES['file']['tmp_name'];
    // $file_type=$_FILES['file']['type'];
    // if($_FILES['file']['name']==""){
    //     echo"error";
    // }else {
    //     move_uploaded_file($file_tmp,"uploads/".$file_name);
    // }

    // if(move_uploaded_file($file_tmp,"uploads/".$file_name)){
    //     // echo "File uploaded successfully";
    //     // header('Location: index4.php');

    // }else{
    //     echo "there was an error uploading file";
    // }
    // }


// $row = mysqli_fetch_array($res);


// $lastid= $row['Emp_Id'];

// $Emp_Id = $_POST["Emp_Id"];
// $Emp_Photo = $_FILES['file']['name'];

// $Emp_Photo = photo();
$Emp_First_Name = $_POST["Emp_First_Name"];
$Emp_Last_Name = $_POST["Emp_Last_Name"];
$Emp_Gender = $_POST["Emp_Gender"];
$Emp_Email_id = $_POST["Emp_Email_id"];
$Emp_Contact = $_POST["Emp_Contact"];
$Emp_Designation = $_POST["Emp_Designation"];
$Emp_Salary = $_POST["Emp_Salary"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $file_name = $_FILES["file"]["name"];
        $filetype = $_FILES["file"]["type"];
        $file_tmp = $_FILES['file']['tmp_name'];
        $filesize = $_FILES["file"]["size"];


        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");


        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        if(in_array($filetype, $allowed)){
            // if(file_exists("upload/" . $file_name)){
                // echo $file_name . " is already exists.";
            // } else{
                if(move_uploaded_file($file_tmp,"uploads/".$file_name)){
                    // $sql="INSERT INTO employee(file,type,size) VALUES('$file_name','$filetype','$filesize')";

                    // mysqli_query($conn,$sql);
                    echo "Your file was uploaded successfully.";
                }else{
                   echo "File is not uploaded";
                }

            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }
    } else{
        echo "Error: " . $_FILES["file"]["error"];
    }






// $file_name=$_FILES['file']['name'];
// $fileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));


// if(isset($_POST["submit"]) && !empty($_FILES['file']['name'])){
//     $ext_arry = array("jpg","jpeg","png","gif","heic");
//      if(in_array($fileType,$ext_arry)){
//         move_uploaded_file($file_tmp,"uploads/".$file_name);

//      }


// }



// $file_size=$_FILES['file']['size'];
//     $file_tmp=$_FILES['file']['tmp_name'];
//     $file_type=$_FILES['file']['type'];
//     // if(in_array($fileType,$ext_arry)){
// if($_FILES['file']['name']==""){
//     echo"error";
// }else {
//     move_uploaded_file($file_tmp,"uploads/".$file_name);
// }


$sql = "INSERT INTO employee(
         Emp_Id,
         Emp_Photo,
         Emp_First_Name,
         Emp_Last_Name,
         Emp_Gender,
         Emp_Email_id,
         Emp_Contact,
         Emp_Designation,
         Emp_Salary
     )
     VALUES(
       '$_POST[Emp_Id]',
         -- '$Emp_Id',
         '$file_name',
         '$Emp_First_Name',
         '$Emp_Last_Name',
         '$Emp_Gender',
         '$Emp_Email_id',
         '$Emp_Contact',
         '$Emp_Designation',
         '$Emp_Salary'
     )";

$run = mysqli_query($conn,$sql);

if($run){
header('Location: index2.php');
        }
    else{
        echo "Form not submitted";
        }
?>
