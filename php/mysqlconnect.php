<?php
$servername="localhost";
$tt="root";
$password="";
$conn=mysqli_connect($servername,$tt,$password);
if(!$conn){
    die("connection failed:".mysql_connect_error());

}
var_dump($conn);
echo"connected successfully";
?>