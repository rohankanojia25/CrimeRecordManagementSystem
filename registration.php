<?php 

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'crimerecordmanagement');

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$batchid= $_POST['batchid'];
$password= $_POST['password'];

$s = " select * from userregistration where batchid = '$batchid'";
$result= mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Batch ID already Taken";
}else{
    $reg = " insert into userregistration (fname, lname, batchid, password) values ('$fname','$lname','$batchid','$password')";
    mysqli_query($con, $reg);
    header('location:userregistersuccess.php');
}

?> 