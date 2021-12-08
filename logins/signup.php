<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Zaneprah Sign Up</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="../plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">

</head>

<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.php">
            <img src="images/logo.png" alt="">
          </a>
          <h2 class="text-center">Create Your Account</h2>
          <form class="text-left clearfix" action="signupprocess.php" method="POST">
            <div class="form-group">
              <input type="text" name="fname" class="form-control"  placeholder="First Name*" required>
            </div>
            <div class="form-group">
              <input type="text" name="lname" class="form-control"  placeholder="Last Name*" required>
            </div>
            <div class="form-group">
              <input type="text" name="address" class="form-control"  placeholder="Address*" required>
            </div>
            <div class="form-group">
              <input type="text" name="city" class="form-control"  placeholder="City*" required>
            </div>
            <div class="form-group">
              <input type="text" name="country" class="form-control"  placeholder="Country*" required>
            </div>
            <div class="form-group">
              <input type="tel" name="contact" class="form-control"  placeholder="Phone Number*" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control"  placeholder="Email*" required>
            </div>
            <div class="form-group">
              <input name ="passwd" type="password" class="form-control"  placeholder="Password*" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            </div>
            <div class="form-group">
              <input name = "confPasswd" type="password" class="form-control"  placeholder="Password*" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
              <small>Your password must be at least 8 characters long, have a capital letter, number and symbol</small>
            </div>
            <div class="text-center">
              <button name="submit" value="submit" type="submit" class="btn btn-main text-center">Sign Up</button>
            </div>
            <small>* Means that the field is required</small>
          </form>
          <p class="mt-20">Already have an account ?<a href="login.php"> Login</a></p>
          <p><a href="forget-password.php"> Forgot your password?</a></p>
        </div>
      </div>
    </div>
  </div>
</section>


<script>

// client side validation
// function validate() {
//     if(document.forms["signupForm"]["uid"].value == "") {
//         document.getElementById("userName").innerHTML = "Please provide your Username";
//         document.forms["signupForm"]["uid"].focus();
//         return false;
//     }
//     if(document.forms["signupForm"]["mail"].value == "") {
//         document.getElementById("userMail").innerHTML = "Please provide your E-mail";
//         document.forms["loginForm"]["mail"].focus();
//         return false;
//     }
//     if(document.forms["signupForm"]["pwd"].value == "") {
//         document.getElementById("userPwdd").innerHTML = "Please provide your Password";
//         document.forms["signupForm"]["pwd"].focus();
//         return false;
//     }
//     if(document.forms["signupForm"]["pwd-repeat"].value == "") {
//         document.getElementById("userPwddRep").innerHTML = "Please repeat your Password";
//         document.forms["signupForm"]["pwd-repeat"].focus();
//         return false;
//     }
// }

// </script>

<!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="../plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="../plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="../plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="../plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="../plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="../plugins/slick/slick.min.js"></script>
    <script src="../plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>