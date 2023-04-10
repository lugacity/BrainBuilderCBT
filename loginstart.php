<?php
session_start();
include 'config.php';

if(isset($_POST['login'])){
    $reg_no = $_POST['reg'];
    $_SESSION['reg_no'] = $reg_no;
    $sqli = mysqli_query($conn, "Select * from user where reg_no = '$reg_no'");
    if(mysqli_num_rows($sqli)>0){
        header('location:mock.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="img/brainlogo.webp"/>
    <link rel="stylesheet" href="Vendors/css/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        section.sticky{
            background: #fef0ec;
            /* background: #fde1d9; */
            transition: 0.9s;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="context">
        <section class="context-details" style="background-color: #fef0ec;">
            <div class="cbt-logo">
                <a href="./index.html"><img src="img//brainlogo.png" alt="BrainLogo"></a>
                <ul>
                    <li><a href="https://www.brainbuildersfirm.org/" target="_blank">Offical Portal</a></li>
                </ul>
            </div>
            <ul class="cbt-details">
                <li><a href="./index.html">Home</a></li>
                <li><a  style="border-bottom: 2px solid #f46b45;" href="./loginstart.php">Login</a></li>
                <li><a class="official-details" href="./getstarted.php">Get Started</a></li>
            </ul>
        </section>
        </div>
    <!-- End Header -->

    <!-- Main Page -->
    <div class="getstarted-details">
        <div class="getstarted-details-1">
            <!-- Large Screen -->
            <div class="getstarted-details-2" style="background-color: #fff;">
                    <img src="img/ictstudent.png" alt="ictstudent">
                    <h1 style="font-size: 1rem; text-align: center;">Belongs to the people who prepare today</h1>
                </div>
                
                <!-- SMall Screen -->
                <div class="getstarted-details-small">
                    <img src="img/brainlogo.png" alt="BrainLogo">
                    <!-- <h1 style="font-size: 1rem; text-align: center;">Belongs to the people who prepare today</h1> -->
                </div>
            <div class="getstarted-details-3">
                <div style="margin-bottom: 1rem;"><h1>Welcome Back</h1></div>
                <form action="#" class="form-getstarted" method="post">
                   <p style="margin-bottom: .8rem;">Jamb Registration Number</p>
                    <input type="text" placeholder="Enter your Jamb Reg No" name="reg" required>
                    <div class="cbt-details">
                        <button class="official-details" style="padding: 1rem 3rem;" name="login">LogIn</button>
                    </div>
                </form>
                
            </div>
        </div>     
    </div>
    <!-- End Main Page -->


<!-- Footer -->
<div class="footer-details">
    <div class="footer-details-1">
      <ul class="menus" style="font-weight: 500; font-size: 1.2rem;">
        <li><a href="./getstarted.html">GetStarted</a></li>
        <!-- <li><a href="./about.html">About</a></li> -->
        <!-- <li><a href="./contact.html" >Contact</a></li> -->
        <li><a href="./blog.html">Blog</a></li>
        <li><a href="./loginstart.html">Login</a></li>
        <!-- <li><a href="#" data-after="Project">Projects</a></li> -->
      </ul>
      <div class="footer-social-link">
        <a href="https://web.facebook.com/adeshina.olayinka2" target="_blank"><i class="fa fa-facebook" style="font-size:24px"></i></a>
        <a href="#"><i class="fa fa-linkedin" style="font-size:24px" ></i></a>
        <a href="#"><i class="fa fa-twitter" style="font-size:24px"></i></a>
        <a href="#"><i class="fa fa-instagram" style="font-size:24px"></i></a>   
      </div> <hr><br>
      <div class="footer-social-content"> 
        <p style="color: #fff;">Copyright 2023. Brain Builders IT Firm. All Rights Reserved</p>
      </div>
    </div>
  </div>
  <!--End Footer -->

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
      <!-- <script src="script.js"></script> -->
      <script type="text/javascript">
        window.addEventListener('scroll', function(){
            var context = document.querySelector('section');
            context.classList.toggle('sticky', window.scrollY > 200);
        });
    </script>
</body>
</html>