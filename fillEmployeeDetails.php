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

                          <form action="addEmployeeDetails.php" method="post" style="padding-left:60px;">
                            <h2>Enter employee details</h2>
                            <div class="form-group" >
                              <input type="text" class="form-control form-background" name="name" placeholder="Name" pattern="*[A-Za-z]" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control form-background" name="dob" placeholder="DOB(dd-mm-yyyy)" pattern="[0-9]{2}[-][0-9]{2}[-][0-9]{4}" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control form-background" name="address" placeholder="Address" pattern="*[A-Za-z @#,'"0-9]" required>
                            </div>
                            <div class="form-group">
                              <input type="number" class="form-control form-background" name="phoneNo" placeholder="Phone No"  pattern="[0-9]{10}" required>
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control form-background" name="email" placeholder="Email Id" pattern="*[A-Za-z_-!#$%^&*]+@[A-Za-z]+\.[A-Za-z]{2,3}" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control form-background" name="salary" placeholder="Salary" pattern="*[0-9].*[0-9]" required>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control form-background" name="eid" placeholder="Employee Id" pattern="*[A-Za-z @#,'"0-9]" required>
                            </div>
                            <div class="form-group">
                              <select name='dept' class="form-control form-background" placeholder="Department">
    					                      <option value='0'>Front-End Maintainance</option>
                                    <option value='1'>Backend Maintainance</option>
                                    <option value='2'>Sales and Marketing</option>
                                    <option value='3'>Enquiry</option>
    					                </select>
                            </div>
                            <div class="form-inline">
                              <input type="submit" class="form-control form-background" value="Submit">
                              <input type="reset" class="form-control form-background" value="Cancel">
                            </div>
                          </form>
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
