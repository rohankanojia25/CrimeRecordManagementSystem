<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta data-name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/viewcomplaints.css">
    
    <!--===== Boxicons CSS =====-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>criminal records</title> 

</head>
<body>

      <!-- page loader start -->
  <div class="page-loader"></div>
  <!-- page loader end -->
 
  <!-- header start -->
  <header class="header">
    <div class="container2">
      <div class="row justify-content-between align-items-center">
        <div class="logo">        
          <a href="adminpage.html"><h1> CMS </h1></a>
        </div>
        <button type="button" class="nav-toggler">
          <span></span>
        </button>
        <nav class="nav">
          <ul>
          <li class="nav-item"><a href="adminpage.php">home</a></li>
            <li class="nav-item"><a href="criminalrecords.php">criminal records </a></li>
            <li class="nav-item"><a href="criminalreg.html">criminal registration</a></li>
            <li class="nav-item"><a href="viewcomplaints.php">view complaints</a></li>
            <li class="nav-item"><a href="adminlogin.php">logout</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- header end -->

    <!-- Criminal Record Section start -->
<div class="container2" >
    <section>

<table>
<br><br><br><br><br>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Aadhaar Number</th>
<th>Email Address</th>
<th>Phone Number</th>
<th>Crime</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "crimerecordmanagement");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID, firstname, lastname, aadhaar, email, number, pleaseselect FROM registration";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["firstname"]. "</td><td>" .$row["lastname"]. "</td><td>" .$row["aadhaar"]. "</td><td>" .$row["email"]. "</td><td>" .$row["number"]. "</td><td>" .$row["pleaseselect"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</section>
</div>
    <script src="js/aos.js"></script> 
    <script src="js/script.js"></script>
    
</body>
</html>