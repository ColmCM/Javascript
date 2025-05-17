<?php
 include 'connect.php';

 //This code is very similar to user2.php, matter is, most of it is copied from there.

 $id=$_GET['updateid'];
 $sql="SELECT * FROM `assignment4` WHERE id=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 $title=$row['title'];
 $firstname=$row['firstname'];
 $lastname=$row['lastname'];
 $mobile=$row['mobile'];
 $email=$row['email'];
 $homeaddressline1=$row['homeaddressline1'];
 $homeaddressline2=$row['homeaddressline2'];
 $homecountycity=$row['homecountycity'];
 $hometown=$row['hometown'];
 $homeeircode=$row['homeeircode'];
 $shippingaddressline1=$row['shippingaddressline1'];
 $shippingaddressline2=$row['shippingaddressline2'];
 $shippingtown=$row['shippingtown'];
 $shippingcountycity=$row['shippingcountycity'];
 $shippingeircode=$row['shippingeircode'];
 

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
    //When the submit button is hit, all the elements get posted.

    //SQL that's updating everything
    $sql="UPDATE assignment4 SET title='$title', firstname='$firstname', lastname='$lastname', mobile='$mobile', email='$email', homeaddressline1='$homeaddressline1', homeaddressline2='$homeaddressline2', hometown='$hometown', homecountycity='$homecountycity', homeeircode='$homeeircode', shippingaddressline1='$shippingaddressline1', shippingaddressline2='$shippingaddressline2', shippingtown='$shippingtown', shippingcountycity='$shippingcountycity', shippingeircode='$shippingeircode' WHERE id=$id";



    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
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
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
        
                <!--<input type="text" class="form-control" placeholder="Enter your Title" name= "title" autocomplete="off">-->

                <label for="cars">Choose a Title:</label>
                
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
            <!-- What is changed is a ?php echo is added to show the previous values of that user had. -->
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="Enter your First Name" name= "firstname" autocomplete="off" required = "" value=<?php echo $firstname; ?>>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Enter your Last Name" name= "lastname" autocomplete="off" required = ""  value=<?php echo $lastname; ?>>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile" name= "mobile" autocomplete="off" required = "" value=<?php echo $mobile; ?>>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" name= "email" required = "" autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <div class="form-group">
                <label>Home Address Line 1</label>
                <input type="text" class="form-control" placeholder="Address Line 1" name= "homeaddressline1" required = "" autocomplete="off" value=<?php echo $homeaddressline1; ?>>
            </div>
            <div class="form-group">
                <label>Home Address Line 2</label>
                <input type="text" class="form-control" placeholder="Address Line 2" name= "homeaddressline2"  autocomplete="off" value=<?php echo $homeaddressline2; ?>>
            </div>
            <div class="form-group">
                <label>Home Town</label>
                <input type="text" class="form-control" placeholder="Home Town" name= "hometown" required = "" autocomplete="off" value=<?php echo $hometown; ?>>
            </div>
            <div class="form-group">
                <label>Home County/City</label>
                <input type="text" class="form-control" placeholder="Home County/City" name= "homecountycity" required = "" autocomplete="off" value=<?php echo $homecountycity; ?>>
            </div>
            <div class="form-group">
                <label>Home Eircode</label>
                <input type="text" class="form-control" placeholder="Home Eircode" name= "homeeircode" autocomplete="off" value=<?php echo $homeeircode; ?>>
            </div>
            <div class="form-group">
                <label>Shipping Address Line 1</label>
                <input type="text" class="form-control" placeholder="Address Line 1" name= "shippingaddressline1" required = ""  autocomplete="off" value=<?php echo $shippingaddressline1; ?>>
            </div>
            <div class="form-group">
                <label>Shipping Address Line 2</label>
                <input type="text" class="form-control" placeholder="Address Line 2" name= "shippingaddressline2" autocomplete="off" value=<?php echo $shippingaddressline2; ?>>
            </div>
            <div class="form-group">
                <label>Shipping Town</label>
                <input type="text" class="form-control" placeholder="Shipping Town" name= "shippingtown" autocomplete="off" required = ""  value=<?php echo $shippingtown; ?>>
            </div>
            <div class="form-group">
                <label>Shipping County/City</label>
                <input type="text" class="form-control" placeholder="Shipping County/City" name= "shippingcountycity" required = "" autocomplete="off" value=<?php echo $shippingcountycity; ?>>
            </div>
            <div class="form-group">
                <label>Shipping Eircode</label>
                <input type="text" class="form-control" placeholder="Shipping Eircode" name= "shippingeircode" autocomplete="off" value=<?php echo $shippingeircode; ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>