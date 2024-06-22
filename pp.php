<?php

$server="localhost";
$username="root";
$password="";
$dbname="web coder";

$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    echo " not connect";
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];



$sql="INSERT INTO `name`(`fname`, `lname`) VALUES ('$fname','$lname')";
$result=mysqli_query($con,$sql);
if($result){
    echo "data submitted";
}
else{
    echo "error...";
}
?>