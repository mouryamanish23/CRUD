<?php
if(isset($_FILES('file'))){
echo "<pre>";
print_r($_FILES);
echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE-UPLOAD</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">

        UPLOAD A FILE: <input type="file" name="file" id="filetoupload">
        <input type="submit" name="submit" value="UPLOAD">
        <!-- <input type="submit" name="submit" value="DOWNLOAD"> -->
    </form>
</body>
</html>
