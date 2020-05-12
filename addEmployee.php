<?php
require 'includes/common.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Employee</title>
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

        <!--*****************Body***************-->

        <div id="banner_image">
          <div class="container-fluid">
          <div class="content">
            <div class="background" width=50px height=50px>


                  <div id="employee_content">
                      <?php include 'includes/leftContent.php'; ?>
                      <div class="rcontent">
                        <h3>To view employee details, <a href="viewEmployeeDetails.php" style="color:blue;text-decoration:underline;">Click here</a></h3>
                        <h3>To add employee, <a href="fiEmployeeDetails.php" style="color:blue;text-decoration:underline;">Click here</a></h3>
                      </div>
              </div>
            </div>
          </div>
          </div>
        </div>


  <!--**********************Footer**********************-->
  <div >
    <?php
      include'includes/footer.php';
    ?>
  </div>
</body>
</html>
