<?php
  require 'includes/common.php';

  if (!isset($_SESSION['email'])) {
       header('location: index.php');
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Settings</title>
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
          <h2>Change Password</h2>
          <form method="post" action="settings_script.php" >

            <div class="form-group">
              <input type="password" class="form-control" name="oldPwd" placeholder="Old Password" required>
            </div>
            <p style="color:red">
              <?php if(isset($_GET['error'])){
                echo $_GET['error'];
              } ?>
            </p>
            <div class="form-group">
              <input type="password" class="form-control" name="newPwd" placeholder="New Password" required>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="retypePwd" placeholder="Re-type New Password" required>
            </div>
            <p style="color:red">
              <?php if(isset($_GET['pwd_error'])){
                echo $_GET['pwd_error'];
              } ?>
            </p>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Change">
            </div>
          </form>
        </div>


        <!--**********************Footer**********************-->
      <div style="padding-top:280px">
        <?php
          include'includes/footer.php';
        ?>
      </div>
  </body>
  </html>
