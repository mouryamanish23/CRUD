<?php
include ("arrayconn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-DB</title>
</head>
<body>
    <form action="arraydb.php" method="POST">
        NAME : <input type="text" name="name"><br><br>
        AGE : <input type="number" name="age"><br><br>
        STATE : <input type="text" name="state"><br><br>
        CONTACT : <input type="number" name="contact"><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>
<?php
$info = array("Manish",31,"UK",895689568);
$run = serialize($info);


?>