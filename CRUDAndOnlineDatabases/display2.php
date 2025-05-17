<!-- 
Browser: Google Chrome
Operating System: Windows 11

Sites/Videos that helped me:
https://bootsnipp.com/forms
https://www.w3schools.com/php/
https://www.w3schools.com/tags/tag_select.asp
https://www.youtube.com/watch?v=7Dwsa7aWfN8
https://www.youtube.com/watch?v=zFS1UvYOLhI
https://www.youtube.com/watch?v=3PjpxkPA0zg
https://www.youtube.com/watch?v=wxWKj-dWnZY
https://www.youtube.com/watch?v=72U5Af8KUpA&t=2s
https://www.youtube.com/watch?v=3BqKicuNgjI
https://youtu.be/72U5Af8KUpA

 
-->

<?php
  include 'connect.php'; ?> 
 
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment 4</title>
         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    </head>
    <body>
    <!-- This is the Add User Button -->
    <div class="container">
        <button class = "btn btn-primary my-5"><a href="user2.php" class="text-light">Add user</a></button>

        <table class="table">
  <thead>
    <tr>
      <!-- Labels --> 
      <th scope="col">S1 no</th>
      <th scope="col">Title</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Home Address Line 1</th>
      <th scope="col">Home Address Line 2</th>
      <th scope="col">Home Town</th>
      <th scope="col">Home County City</th>
      <th scope="col">Home Eircode</th>
      <th scope="col">Shipping Address Line 1</th>
      <th scope="col">Shipping Address Line 2</th>
      <th scope="col">Shipping Town</th>
      <th scope="col">Shipping County City</th>
      <th scope="col">Shipping Eircode</th>
      <th scope="col">Operations </th>
    </tr>
  </thead>
  <tbody>

  <?php 

  $sql="Select * from assignment4"; //Select all from the assignment4 DB
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result))
    {
       //This gets the values themselves and 'echo' displays the values onto the screen. 
        $id=$row['id'];
        $title=$row['title'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $mobile=$row['mobile'];
        $email=$row['email'];
        $homeaddressline1=$row['homeaddressline1'];
        $homeaddressline2=$row['homeaddressline2'];
        $hometown=$row['hometown'];
        $homecountycity=$row['homecountycity'];
        $homeeircode=$row['homeeircode'];
        $shippingaddressline1=$row['shippingaddressline1'];
        $shippingaddressline2=$row['shippingaddressline2'];
        $shippingtown=$row['shippingtown'];
        $shippingcountycity=$row['shippingcountycity'];
        $shippingeircode=$row['shippingeircode'];

        
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$title.'</td>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$mobile.'</td>
        <td>'.$email.'</td>
        <td>'.$homeaddressline1.'</td>
        <td>'.$homeaddressline2.'</td>
        <td>'.$hometown.'</td>
        <td>'.$homecountycity.'</td>
        <td>'.$homeeircode.'</td>
        <td>'.$shippingaddressline1.'</td>
        <td>'.$shippingaddressline2.'</td>
        <td>'.$shippingtown.'</td>
        <td>'.$shippingcountycity.'</td>
        <td>'.$shippingeircode.'</td>
        <td>
        <button class="btn btn-primary"><a href="update2.php?updateid='.$id.'" class="text-light">Update</a></button> 
        <button class="btn btn-danger"><a href="delete2.php?deleteid='.$id.'" class="text-light">Delete</a></button>
        </td>
        </tr>';
        // The above are the delete & update redirect buttons.
    }
  }
  ?>

  
  </tbody>
</table>
</div>

</body>
</html>
