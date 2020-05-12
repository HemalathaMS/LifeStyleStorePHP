<?php
  require'includes/common.php';

  if (isset($_SESSION['email'])) {
       header('location: products.php');
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!--*****************Header***************-->
    <?php
      include'includes/header.php';
    ?>
  <!--***********************Body*****************-->

    <div class="content-style">
      <h2>SIGN UP</h2>
      <form method="post" action="signup_script.php" >

        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Name" pattern="*[A-Za-z]" required >
        </div>

        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" pattern="*[A-Za-z_-!#$%^&*]+@[A-Za-z]+\.[A-Za-z]{2,3}" required>
        </div>
        <p style="color:red">
          <?php if(isset($_GET['email_error'])){
            echo $_GET['email_error'];
          } ?>
        </p>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </div>
        <p style="color:red">
          <?php if(isset($_GET['length_error'])){
            echo $_GET['length_error'];
          } ?>
        </p>
        <div class="form-group">
          <input type="text" class="form-control" name="contact" placeholder="Contact" pattern="[0-9]{10}" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="city" placeholder="City" pattern="*[A-Za-z]" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="address" placeholder="Address" pattern="*[A-Za-z @#,'"0-9]" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>
      </form>
    </div>

    <!--**********************Footer**********************-->
  <div style="padding-top:120px;">
    <?php
      include'includes/footer.php';
    ?>
  </div>

</body>
</html>
