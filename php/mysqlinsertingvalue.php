<?php
$servername="localhost";
$username="root";
$password="";
$database="shakthischool";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection failed:".mysqli_error());
}
$sql="INSERT INTO shakthimarks(rollnumber,studentname,english,tamil,social,science,maths)
VALUES('1001','shakthi','100','99','98','97','100')";
if(mysqli_query($conn,$sql)){
    echo"new record is crearted successfully";}
else{
    echo"error:".$sql."<br>".mysql_error($conn);

}
mysqli_close($conn);
?>
