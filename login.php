<?php
  require'includes/common.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
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
<!--***********************login Body*****************-->
<div class="content-style">
  <div class="panel panel-primary">
    <div class="panel-heading">
        <p class="text">Login to make a purchase</p>
    </div>

    <div class="panel-body">
      <form method="post" action="login_submit.php">
        <div class="form-group">
          <div style="color:red">
            <?php if(isset($_GET['error'])){
              echo $_GET['error'];
            } ?>
          </div>
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="pwd">
        </div>
        <input type="submit" class="btn btn-primary" value="Login">
      </form>
    </div>

    <div class="panel-footer">
        <p>Don't have an account?<a href="signup.php" style="color:blue;"> Register</a></p>
    </div>

  </div>
</div>
  <!--**********************Footer**********************-->
  <div style="padding-top:200px">
    <?php
      include'includes/footer.php';
    ?>
</div>

</body>
</html>
