<?php
session_start();
if(!isset($_SESSION['name']))
{
    $_SESSION['name']=$_POST['name'];
    $_SESSION['class']=$_POST['class'];
    $_SESSION['rollno']=$_POST['rollno'];

    $con=mysqli_connect('localhost','root','',"dcrust");
    if($con)
    {
        $name=$_SESSION['name'];
        $class=$_SESSION['class'];
        $rollno=$_SESSION['rollno'];
        
        $sql="INSERT into dcrusts VALUES ($name,$class,$rollno)";
        $result=mysqli_query($con,$sql);
        echo "result inserted";
    }
} 
else
{
    echo "name"."==".$_SESSION['name'];
    echo "class"."==".$_SESSION['class'];
    echo "rollno"."==".$_SESSION['rollno'];
    session_destroy();

    $con=mysqli_connect('localhost','root','',"dcrust");

    if($con)
    {
        echo "connection connected";

        $sql = "select * from dcrusts ";
        $result=mysqli_query($con,$sql);
    
        if(mysqli_num_rows($result)>0)
        {

            while($rows=mysqli_fetch_assoc($result))
            {

                echo $rows['name']."  ".$rows['phone']." ".$rows['email'].$rows['address'];
                echo "\n";
            }




        }}}    
?>
<?php

    echo "<a href='logut.php'>Destroy</a>";
?>