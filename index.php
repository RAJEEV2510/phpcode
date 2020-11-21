<?php
session_start();

if(isset($_SESSION['rajeev']))
   { 
       echo "INCREAMENT";
       echo "<h1>COUNTER INCREAMENT</h1>";
       echo ++$_SESSION['rajeev'];   
   }

else
{
    echo "rajeev";
    $_SESSION['rajeev']=2;
    echo $_SESSION['rajeev'];
}    


function run()
{

    echo "run function";

}
run();


$name=array("RAJEEV","NIKHIL","ROHIT","NEHA");

for($i=0;$i<4;$i++)
echo $name[$i];

$asr=array("rajeev"=>1,"nikhil"=>2,"neha"=>3);

foreach($asr as $x=>$value)
{
    echo $x;
    echo $value;

}


?>