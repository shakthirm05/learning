<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection failed:".mysql_connect_error());

}
$sql="DROP DATABASE shakthischool";
if(mysqli_query($conn,$sql)){
    echo"database is deleted successfully";
}else {
    echo"error in creating database:".mysqli_error($conn);
}
mysqli_close($conn);
?>