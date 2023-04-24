
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/adminlogin.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>

  <!-- logo start -->
  <header class="header">
    <div class="container2">
      <div class="row justify-content-between align-items-center">
        <div class="logo">        
        <a href="index.html"><h1> CMS </h1></a>
      </div>
      </div>
    </div>
  </header>

  <!-- logo end -->

  <!-- login page -->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="validation.php" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your Batch ID" name="batchid" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="registration.php" method="post">
                <div class="input-field">
                        <input type="text" placeholder="Enter your First Name" name="fname" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your Last Name" name="lname" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your Batch ID" name="batchid" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Create a password" name="password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Signup">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a Member?
                        <a href="#" class="text login-link">login now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="js/adminlogin.js"></script>

</body>
</html>
