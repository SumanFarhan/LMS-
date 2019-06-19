<?php
$servername="localhost";
$user="root";
$password="";
$db="web";
$conn=new mysqli($servername,$user,$password,$db);

if($conn){
echo  "";
}else{
die("connection failed".$conn->error);
}
?>