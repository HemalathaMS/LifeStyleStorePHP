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
                        <form class="form-inline" action="viewEmployeeDetails.php" method="post">
                          <input type="text" class="form-control" name="employee" placeholder="Enter employee name..">
                          <input type="submit" class="form-control btn btn-primary" value="Search">
                        </form>

              <?php if($_POST['employee']!=null){
                        $select_query="select * from employee_details where name=".$_POST['employee'];
                        $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
                        if(mysqli_num_rows($result)>0){?>
                          <table>
                            <thead>
                              <td>Name</td>
                               <td>DOB</td>
                               <td>Address</td>
                               <td>Phone No</td>
                               <td>Email Id</td>
                               <td>Salary</td>
                               <td>Employee Id</td>
                                <td>Department</td>
                            </thead>
                            <?php while($row=mysqli_fetch_array($result)){?>
                              <tr>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['dob']?></td>
                                <td><?php echo $row['address']?></td>
                                <td><?php echo $row['phone_no']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['salary']?></td>
                                <td><?php echo $row['employee_id']?></td>
                                <td><?php echo $row['department']?></td>
                              </tr>
                            <?php}
                            echo "</table>";
                          }
                          else{
                                echo "<p style=\"color:red\">Employee with the name $_POST['employee'] does not exist.</p>";
                          }

                }
                else{
                          $select_query="select * from employee_details";
                          $result=mysqli_query($con,$select_query) or die(mysqli_error($con));
                          if(mysqli_num_rows($result)>0){?>
                            <table>
                              <thead>
                                <td>Name</td>
                                 <td>DOB</td>
                                 <td>Address</td>
                                 <td>Phone No</td>
                                 <td>Email Id</td>
                                 <td>Salary</td>
                                 <td>Employee Id</td>
                                  <td>Department</td>
                              </thead>
                              <?php while($row=mysqli_fetch_array($result)){?>
                                <tr>
                                  <td><?php echo $row['name']?></td>
                                  <td><?php echo $row['dob']?></td>
                                  <td><?php echo $row['address']?></td>
                                  <td><?php echo $row['phone_no']?></td>
                                  <td><?php echo $row['email']?></td>
                                  <td><?php echo $row['salary']?></td>
                                  <td><?php echo $row['employee_id']?></td>
                                  <td><?php echo $row['department']?></td>
                                </tr>
                              <?php}
                                echo"</table>";
                            }
                            else{
                              echo "<p style=\"color:red\">Employee details does not exists.</p>";
                            }
                          }

                       ?>
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
