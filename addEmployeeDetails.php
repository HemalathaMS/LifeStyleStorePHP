<?php
  require 'includes/common.php';
  $name=$_POST['name'];
  $dob=$_POST['dob'];
  $address=mysqli_real_escape_string($con,$_POST['address']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $phone=$_POST['phoneNo'];
  $eid=$_POST['eid'];
  $salary=$_POST['salary'];
  $dept=$_POST['dept'];
  $insert_query="insert into employee_details(name,dob,address,phone_no,email,employee_id,salary,department)
   values('$name','$dob','$address','$phone','$email','$eid','$salary','$dept')";

  $result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
  header('location:employee.php');
?>
