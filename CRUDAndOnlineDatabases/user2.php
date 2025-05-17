<?php
 include 'connect.php';
 if(isset($_POST['submit']))
 {  $title=$_POST['title'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $homeaddressline1=$_POST['homeaddressline1'];
    $homeaddressline2=$_POST['homeaddressline2'];
    $hometown=$_POST['hometown'];
    $homecountycity=$_POST['homecountycity'];
    $homeeircode=$_POST['homeeircode'];
    $shippingaddressline1=$_POST['shippingaddressline1'];
    $shippingaddressline2=$_POST['shippingaddressline2'];
    $shippingtown=$_POST['shippingtown'];
    $shippingcountycity=$_POST['shippingcountycity'];
    $shippingeircode=$_POST['shippingeircode'];
    //Again, the above is just the different elements.
    
    $sql="insert into assignment4 (title, firstname, lastname, mobile, email, homeaddressline1, homeaddressline2, hometown, homecountycity, homeeircode, shippingaddressline1, shippingaddressline2, shippingtown, shippingcountycity, shippingeircode) values ('$title','$firstname','$lastname','$mobile', '$email','$homeaddressline1', '$homeaddressline2', '$hometown', '$homecountycity', '$homeeircode', '$shippingaddressline1', '$shippingaddressline2', '$shippingtown', '$shippingcountycity', '$shippingeircode')";
    $result=mysqli_query($con,$sql);

    //If result is working, display2.php will pop up. If it isn't, we get an error message.
    if($result){
        header('location:display2.php');
    }else{
        die(mysqli_error($con));
    }
    
 }
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Assignment 4</title>
  </head>
<body>
    <!-- Below is the front end, just the usual stuff. We've got labels, placeholders are the ones that are required are marked with a star -->
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <!--<input type="text" class="form-control" placeholder="Enter your Title" name= "title" autocomplete="off">-->

                <label>Choose a Title:</label>
                
                <select name="title" id="title">
                <option value="Mx">Mx</option>
                <option value="Ms">Ms</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
                <option value="Dr">Dr</option>
                <option value="Other (specify)">Other (specify)</option>
                
            </select>
            </div>
            <div class="form-group">
                <label>First Name*</label>
                <input type="text" class="form-control" placeholder="Enter your First Name" name= "firstname" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Last Name*</label>
                <input type="text" class="form-control" placeholder="Enter your Last Name" name= "lastname" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Mobile*</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile" name= "mobile" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Email*</label>
                <input type="email" class="form-control" placeholder="Enter your Email" name= "email" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Home Address Line 1*</label>
                <input type="text" class="form-control" placeholder="Address Line 1" name= "homeaddressline1" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Home Address Line 2</label>
                <input type="text" class="form-control" placeholder="Address Line 2" name= "homeaddressline2" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Home Town*</label>
                <input type="text" class="form-control" placeholder="Home Town" name= "hometown" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Home County/City*</label>
                <input type="text" class="form-control" placeholder="Home County/City" name= "homecountycity" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Home Eircode</label>
                <input type="text" class="form-control" placeholder="Home Eircode" name= "homeeircode" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Shipping Address Line 1*</label>
                <input type="text" class="form-control" placeholder="Address Line 1" name= "shippingaddressline1" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Shipping Address Line 2</label>
                <input type="text" class="form-control" placeholder="Address Line 2" name= "shippingaddressline2" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Shipping Town*</label>
                <input type="text" class="form-control" placeholder="Shipping Town" name= "shippingtown" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Shipping County/City*</label>
                <input type="text" class="form-control" placeholder="Shipping County/City" name= "shippingcountycity" autocomplete="off" required = "">
            </div>
            <div class="form-group">
                <label>Shipping Eircode</label>
                <input type="text" class="form-control" placeholder="Shipping Eircode" name= "shippingeircode" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <!-- Button to submit the new user data/ -->
        </form>
    </div>
</body>
</html>