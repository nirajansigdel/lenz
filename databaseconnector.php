<?php 
 $Servername="localhost";
 $Username="root";
 $Password="";
$database="lenz";

$conn=mysqli_connect($Servername,$Username,$Password,$database);

if(!$conn){
    die("connection fail" .mysqli_connect_error());
}
else{
    echo "connection sucess";
}


?>