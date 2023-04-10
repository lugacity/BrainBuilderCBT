<?php
session_start();
include 'config.php';

if(!isset($_SESSION['reg_no'])){
    header('location: loginstart.php');
    exit();
} else {
    $reg_no = $_SESSION['reg_no'];
}

$select_dept = mysqli_query($conn, "SELECT department FROM user WHERE reg_no = '$reg_no'");
if(mysqli_num_rows($select_dept) > 0) {
    while($rows = mysqli_fetch_assoc($select_dept)){
        $dept = $rows['department'];
    }
    
   
}
if(isset($_POST['submit'])){
    $sub1 = $_POST['first'];
    $sub2 = $_POST['second'];
    $sub3= $_POST['third'];
    $sub4 = $_POST['fourth'];
 

    $sql = mysqli_query($conn, "update user set subject_1 = '$sub1', subject_2 = '$sub2',subject_3 = '$sub3',subject_4 = '$sub4' where reg_no = ''$reg_no");
    if(!$sql){
        echo '<script>alert("Error inserting user record, please try later")</script>';
    }
    
    else{
        // echo '<script>alert("Record inserted successfully")</script>';
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
        <form method="post">
        <select class="my-dropdown" name="first">
            <option>Englsih</option>
        </select>
        <select class="my-dropdown" name="second">
            <option>Second Subject</option>
            <?php  $select_subj = mysqli_query($conn, "SELECT * FROM $dept");
                            if(mysqli_num_rows($select_subj) > 0) {
                                while($row = mysqli_fetch_assoc($select_subj)){?>
            <option value="<?php echo "<p>".$row['subjects']."</p>"; ?>">
                                    <?php echo "<p>".$row['subjects']."</p>";}}?></option>
           

        </select>
        <select class="my-dropdown" name="third">
            <option>Third Subject</option>
            <?php  $select_subj = mysqli_query($conn, "SELECT * FROM $dept");
                            if(mysqli_num_rows($select_subj) > 0) {
                                while($row = mysqli_fetch_assoc($select_subj)){?>
            <option value="<?php echo "<p>".$row['subjects']."</p>";?>">
                                    <?php echo "<p>".$row['subjects']."</p>";}}?></option>
           

        </select>
        <select class="my-dropdown"  name="fourth">
            <option>Fourth Subject</option>
            <?php  $select_subj = mysqli_query($conn, "SELECT * FROM $dept");
                            if(mysqli_num_rows($select_subj) > 0) {
                                while($row = mysqli_fetch_assoc($select_subj)){?>
            <option value="<?php echo "<p>".$row['subjects']."</p>";?>">
                                    <?php echo "<p>".$row['subjects']."</p>";}}?></option>
           

        </select>
       
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