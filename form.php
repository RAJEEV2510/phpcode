<?php
session_start();
if(isset($_SESSION['name']))
{
    header('location:conect.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='post' action='conect.php'>
    Name
    <input type="text" name='name'>
    CLASS
    <input type="text" name="class">
    Roll no
    <input type="text" name="rollno">
    <input type="submit">
</form>
</body>

</html>

