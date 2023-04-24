<?php
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$city = $_POST['city'];
	$crime = $_POST['crime'];
	$charges = $_POST['charges'];
	$aadhaar = $_POST['aadhaar'];
	$gender = $_POST['gender'];

    // Database connection
	$conn = new mysqli('localhost','root','','crimerecordmanagement');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into criminalreg(firstname, lastname, city, crime, charges, aadhaar, gender) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssis", $firstname, $lastname, $city, $crime, $charges, $aadhaar, $gender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		header('location:criminalregistered.php');
		$stmt->close();
		$conn->close();
	}
?>