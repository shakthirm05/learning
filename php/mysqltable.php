<?php
$servername="localhost";
$username="root";
$password="";
$database="shakthischool";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="CREATE TABLE shakthimarks(
    rollnumber INT(6) ,
    studentname VARCHAR(30) NOT NULL,
    english VARCHAR(35) NOT NULL,
    tamil VARCHAR(39) NOT NULL,
    social VARCHAR(40) NOT NULL,
    science VARCHAR(45) NOT NULL,
maths VARCHAR(48) NOT NULL
    )";
if(mysqli_query($conn,$sql)){
    echo"table MYguests created successfully";
    
}else{
    echo"Error creating table:".mysqli_error($conn);

}
mysqli_close($conn);
?>  