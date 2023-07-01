<?php
$serverrname="localhost";
$username="root";
$password="";
$database="myDB";

$conn=mysqli_connect($serverrname,$username,$password,$database);
if(!$conn){
    die("connection failed:".mysqli)
}
