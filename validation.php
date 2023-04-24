<?php 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'crimerecordmanagement');

$batchid= $_POST['batchid'];
$password= $_POST['password'];

$s = " select * from userregistration where batchid = '$batchid' && password = '$password'";

$result= mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:adminpage.php');
}else{
    header('location:adminlogin.php');
}

?> 