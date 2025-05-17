<?php
include 'connect.php';
if(isset($_GET['deleteid']))
{ //This code finds all the elements and deletes them when the delete button is pressed in the display2.php.
    $id=$_GET['deleteid'];
    $sql="delete from assignment4 where id=$id"; 
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display2.php'); //Delete Works
    }
    else{
        die(mysqli_error($con)); //Delete doesn't work.
    }
}
