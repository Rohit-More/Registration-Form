<?php
 $con = mysqli_connect('localhost','root','','registrationform');
require_once('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $countrycode= mysqli_real_escape_string($con, $_POST['countrycode']); 
    $phone= mysqli_real_escape_string($con,$_POST['phonenumber']);
    $country= mysqli_real_escape_string($con,$_POST['country']);
    $department= mysqli_real_escape_string($con,$_POST['courses']);
   
    $sql = "insert into studentdata(name,email,countrycode,phonenumber,country,courses) values('$name', '$email', '+$countrycode', $phone, '$country', '$department')";
    $result=mysqli_query($con,$sql);
}

