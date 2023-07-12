<?php 
$ser="localhost";
$user="root";
$pass="";
$dbname="stdmngtapp";
$con=new mysqli($ser,$user,$pass,$dbname);
if($con)
{
    // echo "connection successfully";
}
else 
{
    die(mysqli_error($con));
}
?>