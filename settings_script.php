<?php
  require'includes/common.php';

  if (!isset($_SESSION['email'])) {
       header('location: index.php');
   }

   $old_password=md5($_POST['oldPwd']);
   $new_password=md5($_POST['newPwd']);
   $retype_password=md5($_POST['retypePwd']);

   //backend validation
   if(strcmp($new_password,$retype_password)!==0){
     header('location:setting.php?pwd_error=password mismatch');
   }

   $select_query="select * from users where password='$old_password'";

   $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
   if(mysqli_num_rows($result)>0){
     $row=mysqli_fetch_array($result);
     $email=mysqli_real_escape_string($con,$row['email']);
     $update_query="update users set password='$new_password' where email='$email'";
     mysqli_query($con,$update_query) or die(mysqli_error($con));
     header('location:products.php');
   }
   else{
     header('location:setting.php?error=Invalid password');
   }

?>
