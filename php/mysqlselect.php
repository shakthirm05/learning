<?php
$servername="localhost";
$username="root";
$password="";
$database="myDB";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="SELECT id,firstname,lastname FROM MYGUEST";

$result=mysqli_query($conn,$sql);                 
    var_dump($result);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result)){
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";}

/*echo "<br>";
$row=mysqli_fetch_assoc($result);
echo"<br>";
var_dump($row);
echo "<br> <br>";
$row=mysqli_fetch_assoc($result);
echo "<br> <br>";
var_dump($row);

$row=mysqli_fetch_assoc($result);
echo"<br>";*/

}
else{
    echo"0 results";
}
mysqli_close($conn);
?>