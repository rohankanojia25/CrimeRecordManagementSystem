<?php
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$aadhaar = $_POST['aadhaar'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$pleaseselect = $_POST['pleaseselect'];
    $commentcontent = $_POST['commentcontent'];

    // Database connection
	$conn = new mysqli('localhost','root','','crimerecordmanagement');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstname, lastname, aadhaar, email, number, pleaseselect, commentcontent) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisiss", $firstname, $lastname, $aadhaar, $email, $number, $pleaseselect, $commentcontent);
		$execval = $stmt->execute();
		echo $execval;
		header('location:registrationsuccess.php');
		$stmt->close();
		$conn->close();
	}
?>