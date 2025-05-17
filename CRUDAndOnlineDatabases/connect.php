<?php

//Root to my localSQL
//$con = new mysqli('localhost', 'root', '', 'assignment4operation'); //localhost, username, password, database.

$con = new mysqli('webcourse.cs.nuim.ie', 'u210148', 'Ees3aec1ATh3Lai6', 'cs230_u210148');

if(!$con) //This is an error message. Is there's an error, this goes off.
{
    die(mysqli_error($con)); 
}


?>