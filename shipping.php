<?php
require 'includes/common.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shipping</title>
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
          <div class="content-style">
            <table class="table table-bordered">
              <tr>
                <td>User Name</td>
                <td>Item Name</td>
                <td>Price</td>
                <td>Adress</td>
                <td></td>
              </tr>
        <?php

            if (isset($_SESSION['email'])) {
              $user_id=$_SESSION['user_id'];
              $select_query="SELECT * FROM users_items, users, items WHERE user_id=users.id and item_id=items.id";
              $result=mysqli_query($con,$select_query) or die(mysqli_error($con));

              if(mysqli_num_rows($result)==0){
                echo"<br><h4 style=\"padding-left:100px;color:red\">No Items purchased.<h4>";
              }
              else{

                while($row=mysqli_fetch_array($result)){

                 ?>
                 <tr>
                   <td><?php echo $row[5] ?></td>
                   <td><?php echo $row[12] ?></td>
                   <td><?php echo $row['price'] ?></td>
                   <td><?php echo $row['address'] ?></td>
                   <td><a href="shipped.php?id=<?php echo $row[0] ?>"><button class="btn btn-primary">Shipped</button></a></td>
                 </tr>
            <?php
                }
              }
            }
            ?>
           </table>

          </div>

  <!--**********************Footer**********************-->
  <div style="padding-top:400px;">
    <?php
      include'includes/footer.php';
    ?>
  </div>
</body>
</html>
