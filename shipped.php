<?php
  require'includes/common.php';
  $id=$_GET['id'];

  $delete_query="delete from users_items where id='$id'";
  mysqli_query($con,$delete_query) or die(mysqli_error($con));
  header('location:shipping.php');
?>
