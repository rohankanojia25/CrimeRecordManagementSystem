<?php 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'crimerecordmanagement');

$username= $_POST['username'];
$password= $_POST['password'];

$s = " select * from adminaccess where username = '$username' && password = '$password'";

$result= mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:adminlogin.php');
}else{
    header('location:adminaccess.html');
}

?> 