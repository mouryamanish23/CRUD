<?php
if(isset($_FILES['file'])){
$file_name=$_FILES['file']['name'];
$file_size=$_FILES['file']['size'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_type=$_FILES['file']['type'];

if(move_uploaded_file($file_tmp,"uploads/".$file_name)){
    echo "File uploaded successfully";
    }else{
      echo "there was an error uploading file";
        }
  }
?>
<html>
<body>
    <form action="" method="POST" enctype="multipart/form-data">

        UPLOAD A FILE: <input type="file" name="file" id="filetoupload" >
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>
