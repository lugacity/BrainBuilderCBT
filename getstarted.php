<?php

include 'config.php';
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $reg = $_POST['reg'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
 

 
    $select = mysqli_query($conn, "select * from user where reg_no = '$reg'");
    if(mysqli_num_rows($select)> 0){
         echo '<script>alert("User already registered with this JAMG reg no")</script>';
        //  $error = 'User already registered with this JAMG reg no';
    }
    else{
 
    $sql = mysqli_query($conn, "insert into user (fullname,reg_no,department,phone) values ('$fullname','$reg','$department','$phone')");
    if(!$sql){
        echo '<script>alert("Error inserting user record, please try later")</script>';
    }
    
    else{
        // echo '<script>alert("Record inserted successfully")</script>';
        header('location:loginstart.php');
    }

}
       
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started</title>
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
        .my-dropdown {
        padding: 6px;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        color: #555;
        background-color: #fff;
        box-shadow: none;
        width: 100%;
        }

        .my-dropdown option {
        font-size: 16px;
        color: #555;
        background-color: #fff;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="context">
        <section class="context-details">
            <div class="cbt-logo">
                <a href="./index.html"><img src="img//brainlogo.png" alt="BrainLogo"></a>
                <ul>
                    <li><a href="https://www.brainbuildersfirm.org/" target="_blank">Offical Portal</a></li>
                </ul>
            </div>
            <ul class="cbt-details">
                <li><a href="./index.html">Home</a></li>
                <li><a href="./loginstart.php">Login</a></li>
                <li><a class="official-details" href="./getstarted.php">Get Started</a></li>
            </ul>
        </section>
        </div>
    <!-- End Header -->

    <!-- Main Page -->
    <div class="getstarted-details">
        <div class="getstarted-details-1">
            <!-- Large Screen -->
            <div class="getstarted-details-2">
                    <img src="img/ictstudent.png" alt="ictstudent">
                    <h1 style="font-size: 1rem; text-align: center;">Belongs to the people who prepare today</h1>
                </div>
                
                <!-- SMall Screen -->
                <div class="getstarted-details-small">
                    <img src="img/brainlogo.png" alt="BrainLogo">
                    <!-- <h1 style="font-size: 1rem; text-align: center;">Belongs to the people who prepare today</h1> -->
                </div>
            <div class="getstarted-details-3">
                <div style="margin-bottom: 1rem;"><h1>Create Account</h1></div>
                <form action="#" class="form-getstarted" method="post">
                    <p>Full Name</p>
                    <input type="text" placeholder="Enter your fullname" name="fullname" required>
                   <p>Jamb Registration Number</p>
                    <input type="text" placeholder="Enter your Jamb Reg No" name="reg" maxlength="12" 
                    pattern="[0-9]{10}[A-Za-z]{2}" title="Must contain atleast 10 numbers and Two Letters" required>
                    
                    <br>
                    <p>Select Department</p>
                    <select class="my-dropdown" name="department"> <option value="art">Art</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Science">Science</option>
                    </select> <br><br>
                    <p>Phone No</p>
                    <input type="text" placeholder="Enter your Phone No" name="phone" required> <br>
                    <input type="checkbox" value="true" required> I agreed with the Term and Services <br>
                    <div class="cbt-details">
                        <button class="official-details" name="submit">Create Account</button>
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