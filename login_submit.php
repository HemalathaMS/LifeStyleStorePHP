<?php
  require 'includes/common.php';

  $password=md5(mysqli_real_escape_string($con,$_POST['pwd']));
  $email=mysqli_real_escape_string($con,$_POST['email']);

  $select_query="Select id,email from users where email='$email' and password='$password'";

  $result=mysqli_query($con,$select_query) or die(mysqli_error($con));

  if(mysqli_num_rows($result)==0){
    header('location:login.php?error=Invalid email or password');
  }
  else{
    $row=mysqli_fetch_array($result);
    $_SESSION['user_id']=$row['id'];
    $_SESSION['email']=$row['email'];
    header("location:products.php");
  }









?>
