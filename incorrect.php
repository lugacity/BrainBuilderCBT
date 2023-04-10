<?php

$connect = mysqli_connect("localhost", "root", "", "testing");

?>
<html>  
      <head>  
           <title>Webslesson Tutorial</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <style>
   
   .box
   {
    width:750px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
      </head>  
      <body>  
        <div class="container box">
          <h3 align="center">G</h3><br />
          <h4>Please Select Programming Language</h4><br />  
          <form method="post">
           <p><input type="checkbox" name="subject[] ssf" value="C" /> C</p>
           <p><input type="checkbox" name="subject[] sfsd" value="C++" /> C++</p>
           <p><input type="checkbox" name="subject[] sdfsd" value="C#" /> C#</p>
           <p><input type="checkbox" name="subject[] sfd" value="Java" /> Java</p>
           <p><input type="checkbox" name="subject[] fds" value="PHP" /> PHP</p>
           <p><input type="submit" name="submit" class="btn btn-info" value="Submit" /></p>
          </form>
          <?php
          if(isset($_POST["submit"]))
          {
          
           if(!empty($_POST['subject'])){
             foreach ($_POST['subject'] as $subject){
             echo $subject;
           }
          }
          }
          ?>
     <br />
         </div>  
      </body>  
 </html>


 <?php
session_start();
include 'config.php';

if(!isset($_SESSION['reg_no'])){
    header('location:loginstart.php');
}
  else{
    $reg_no = $_SESSION['reg_no'];
    
    
    }
    
  
 if(isset($_POST["submit"])){
    $col1 = '';
    $col2 = '';
    $col3 = '';

    // Loop through each checkbox
    foreach($_POST['checkbox'] as $value){
        // Determine which column to insert the value into
        if($value == 'literaure-in-english'){
            $col1 = 'literaure-in-english';
        } elseif($value == 'government') {
            $col2 = 'government';
        } elseif($value == 'yoruba') {
            $col3 = 'yoruba';
        }
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO myTable (column1, column2, column3) VALUES ('$col1', '$col2', '$col3')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Checkbox values inserted successfully.";
    
    }
}

                        
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        section.sticky{
            background: #fef0ec;
            /* background: #fde1d9; */
            transition: 0.9s;
        }

        .my-dropdown {
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        color: #555;
        background-color: #fff;
        box-shadow: none;
        }

        .my-dropdown option {
        font-size: 16px;
        color: #555;
        background-color: #fff;
        }

        .my-checkboxes {
        padding: 10px;
        /* border: 2px solid #ccc; */
        border-radius: 4px;
        font-size: 16px;
        color: #555;
        background-color: #fff;
        box-shadow: none;
        }

        .my-checkboxes label {
        display: block;
        margin-bottom: 10px;
        }

        .my-checkboxes input[type="checkbox"] {
        margin-right: 10px;
        }

    </style>
</head>
<body>
      <!-- Header -->
      <div class="context">
        <section class="context-details">
            <div class="cbt-logo">
                <a href="./index.html"><img src="img//brainlogo.png" alt="BrainLogo"></a>
                <!-- <ul><li><a href="https://www.brainbuildersfirm.org/" target="_blank">Offical Portal</a></li></ul> -->
            </div>
            <ul class="cbt-details">
                <li><a href="./index.html">Home</a></li>
                <!-- <li><a href="./loginstart.php">Login</a></li> -->
                <!-- <li><a class="official-details" href="./getstarted.php">Get Started</a></li> -->
            </ul>
        </section>
        </div>
    <!-- End Header -->
    

    <div class="dropDown">
        <div class="practice-details">
            <h1>Brain Builders Jamb CBT Practice 2023</h1>
            <p>Welcome to <i style="color:#f46b45; font-weight: 500;"> Brain Builders I.T Firm </i> where we offer a wide range of online training mock exams</p>
        </div>
        <select id="mySelect" onchange="showCheckboxes()" class="my-dropdown">
            <option>Select your department</option>
            <option value="option1">Art</option>
            <option value="option2">Commercial</option>
            <option value="option3">Science</option>
        </select>
        <div id="checkboxes" style="display:none;" class="my-checkboxes">
        <form method="post">
            <div id="option1Checkboxes" style="display:none;">
            <label><input type="checkbox" class="check" name="subject[] option1Checkbox2 " value="English Language"checked disabled>English Language</label>
            <label><input type="checkbox" class="check"  name="subject[] option1Checkbox1 " value="Literature-In-English">Literature-In-English</label>
            <label><input type="checkbox" class="check"  name="subject[] option1Checkbox2 " value="Government">Government</label>
            <label><input type="checkbox" class="check"  name="subject[] option1Checkbox2 " value="I.R.S">I.R.S</label>
            <label><input type="checkbox" class="check"  name="subject[] option1Checkbox2 " value="Yoruba">Yoruba</label>
            <label><input type="checkbox" class="check"  name="subject[] option1Checkbox2 " value="Civic Education">Civic Education</label>
            <label><input type="checkbox" class="check"  name="subject[] option1Checkbox2 " value="Economics">Economics</label>
            </div>
           
            <div id="option2Checkboxes" style="display:none;">
                <label><input type="checkbox" class="check"  name="option1Checkbox2 subject_1" checked disabled>English Language</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox1">Mathematics</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Commerce</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Financial Accounting</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Geography</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Yoruba</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Biology</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Economics</label>
            </div>
            <div id="option3Checkboxes" style="display:none;">
                <label><input type="checkbox" class="check"  name="option1Checkbox2 subject_1" checked disabled>English Language</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox1">Mathematics</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Chemistry</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Physics</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Biology</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Geography</label>
                <label><input type="checkbox" class="check"  name="option1Checkbox2">Agricultural Science</label>
                <!-- <label><input type="checkbox" name="option1Checkbox2">Economics</label> -->
            </div>
           
            
        </div>
        <div class="cbt-details">
            
            <button class="official-details" name="submit" value="submit">Continue</button>
            </form>
            
        </div>
    </div>
        <!-- <label><input type="checkbox" class="check" /> Checkbox 1</label>
        <label><input type="checkbox" class="check" /> Checkbox 2</label>
        <label><input type="checkbox" class="check" /> Checkbox 3</label>
        <label><input type="checkbox" class="check" /> Checkbox 4</label>
        <label><input type="checkbox" class="check" /> Checkbox 5</label> -->
      <script>
    function showCheckboxes() {
    var selectElement = document.getElementById("mySelect");
    var checkboxes = document.getElementById("checkboxes");
    var option1Checkboxes = document.getElementById("option1Checkboxes");
    var option2Checkboxes = document.getElementById("option2Checkboxes");
    var option3Checkboxes = document.getElementById("option3Checkboxes");

    if (selectElement.value === "option1") {
        option1Checkboxes.style.display = "block";
        option2Checkboxes.style.display = "none";
        option3Checkboxes.style.display = "none";
    } else if (selectElement.value === "option2") {
        option1Checkboxes.style.display = "none";
        option2Checkboxes.style.display = "block";
        option3Checkboxes.style.display = "none";
    } else if (selectElement.value === "option3") {
        option1Checkboxes.style.display = "none";
        option2Checkboxes.style.display = "none";
        option3Checkboxes.style.display = "block";
    } else {
        option1Checkboxes.style.display = "none";
        option2Checkboxes.style.display = "none";
        option3Checkboxes.style.display = "none";
        
    }
    checkboxes.style.display = "block";
    }

    // let option1Checks = document.querySelectorAll("#option1Checkboxes label > input");
    // let option2Checks = document.querySelectorAll("#option2Checkboxes label > input");
    // let option3Checks = document.querySelectorAll("#option3Checkboxes label > input");
    // let max = 4;

    // option1Checks.forEach((option, ind) => {
    // option1Checks[ind].onclick = (e) => selectiveCheck(e, "#option1Checkboxes")
    // }) 
    // option2Checks.forEach((option, ind) => {
    // option2Checks[ind].onclick = (e) => selectiveCheck(e, "#option2Checkboxes")
    // }) 
    // option3Checks.forEach((option, ind) => {
    // option3Checks[ind].onclick = (e) => selectiveCheck(e, "#option3Checkboxes")
    // }) 

    // function selectiveCheck(event, optionParentId) {
    // var checkedChecks = document.querySelectorAll(`${optionParentId} label > input:checked`);
    // console.log(checkedChecks)
    // if (checkedChecks.length >= max + 1)
    //     return false;
    // }

    var checks = document.querySelectorAll(".check");
    var max = 6;
    for (var i = 0; i < checks.length; i++)
    checks[i].onclick = selectiveCheck;

    function selectiveCheck(event) {
    var checkedChecks = document.querySelectorAll(".check:checked");
    if (checkedChecks.length >= max + 1)
        return false;
    }
;

  </script>
</body>
</html>