

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cart</title>
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
        require'includes/header.php';
      ?>
      <!--***********************Body*****************-->

      <div class="content-style">
        <table class="table table-bordered">
          <thead>
            <td>Item Number</td>
            <td>Item Name</td>
            <td>Price</td>
            <td></td>
          </thead>
          <?php
            require'includes/common.php';
            $sum=0;
            $id="";
            if (isset($_SESSION['email'])) {
                 $user_id=$_SESSION['user_id'];
                 $join_query="select * from users_items inner join items on user_id='$user_id' and status='Added to cart' and item_id=items.id";
                 $result=mysqli_query($con,$join_query) or die(mysqli_error($con));
                 if(mysqli_num_rows($result)==0){
                   echo"<br><h4 style=\"padding-left:100px;color:red\">Add items to the cart first!<h4>";
                 }
                 else{

                   while($row=mysqli_fetch_array($result)){
                      $sum+=$row['price'];
                      $id=$id.",".$row['item_id'];?>
                      <tr>
                        <td><?php echo $row['item_id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td> <a href="cart-remove.php?id=<?php echo $row['id'] ?>" style="color:blue;"> Remove</a> </td>
                      </tr>
                  <?php }

                 }
          }

          ?>


          <tr>
            <td></td>
            <td>Total</td>
            <td>Rs <?php echo $sum ?>/-</td>
            <td><a href="success.php?id=<?php echo $id ?>"><button class="btn btn-primary">Confirm Order</button></a></td>
          </tr>
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
