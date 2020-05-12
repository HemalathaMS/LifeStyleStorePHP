<?php
  require 'includes/common.php';
$name=$_POST['name'];
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$md5_password=md5($password);
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=mysqli_real_escape_string($con,$_POST['address']);


$select_query="Select id,email from users where email='$email'";

$result=mysqli_query($con,$select_query) or die(mysqli_error($con));

  $insert_query="Insert into users(name,email,password,contact,city,address) values ('$name','$email','$md5_password','$contact','$city','$address')";
  mysqli_query($con,$insert_query) or die(mysqli_error($con));
  $_SESSION['user_id']=mysqli_insert_id($con);
  header('location:products.php');


?>
