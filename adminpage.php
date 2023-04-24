<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crime Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/adminpage.css">
</head>
<body>

  <!-- page loader start -->
  <div class="page-loader"></div>
  <!-- page loader end -->
 
  <!-- header start -->
  <header class="header">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="logo">        
          <a href="adminpage.php"><h1> CMS </h1></a>
        </div>
        <button type="button" class="nav-toggler">
          <span></span>
        </button>
        <nav class="nav">
          <ul>
            <li class="nav-item"><a href="#home">home</a></li>
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

    <!-- home section start -->
    <section class="home-section" id="home">
        <div class="home-bg"></div>
        <div class="container">
          <div class="row min-vh-100 align-items-center">
            <div class="home-text" data-aos="fade-up" data-aos-duration="1000">
              <h1>Welcome to the Admin Portal</h1>
              <p>Seva hi Lakshya, A force to Reckon with</p>         
            </div>
          </div>
        </div>
      </section>
      <!-- home section end -->

<script src="js/aos.js"></script> 
<script src="js/script.js"></script>
</body>
</html>