<?php
$servername="localhost";
$username = "root";
$password ="";
$dbname = "myDB";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed:".mysql_connect_error());

}
$sql = "INSERT INTO MYGUEST(firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MYGUEST (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MYGUEST (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>