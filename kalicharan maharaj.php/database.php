<?php
$servername="localhost";
$username="root";
$password="";
$database="kalicharan_db";

$con = mysqli_connect($servername,$username,$password,$database);

if($con)
{
    echo"connection stablished successfully";
    
}
else{
    die("error detected".mysqli_error($con));
}
?>