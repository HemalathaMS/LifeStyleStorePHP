<?php
  require'includes/common.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Products</title>
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
    include'includes/check-if-added.php';
  ?>

    <!--***********************Body*****************-->

    <div class="container">
        <div class="jumbotron">
          <h1>Welcome to our Lifestyle Store!</h1>
          <p> We have the best shades, watches and dresses for you. No need to hunt around, we have all in one place.</p>
        </div>

    <!--*************************Products*********************-->

        <div class="row text-center">
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/watch1.jpg" alt="watch image">
              <div class="caption">
                  <h5>Brand : Yazole</h5>
                  <h6>Price : 2000</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/watch2.jpg" alt="watch image">
              <div class="caption">
                <h5>Brand : FastTrack</h5>
                <h6>Price : 4000</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/watch3.jpg" alt="watch image">
              <div class="caption">
                <h5>Brand : Titan</h5>
                <h6>Price : 3000</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/watch4.jpg" alt="watch image">
              <div class="caption">
                <h5>Brand : Rolex</h5>
                <h6>Price : 8000</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/shades1.jpg" alt="shades image">
              <div class="caption">
                  <h5>Brand : Ray-Ban</h5>
                  <h6>Price : 1000</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/shades2.jpg" alt="shades image">
              <div class="caption">
                  <h5>Brand : Tory Burch</h5>
                  <h6>Price : 2000</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/shades3.jpg" alt="shades image">
              <div class="caption">
                  <h5>Brand : Sferoflex</h5>
                  <h6>Price : 2400</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/shades4.jpg" alt="shades image">
              <div class="caption">
                  <h5>Brand : Versace</h5>
                  <h6>Price : 3800</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/dress1.jpg" alt="dress image">
              <div class="caption">
                  <h5>Brand : Shein</h5>
                  <h6>Price : 3800</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/dress2.jpg" alt="dress image">
              <div class="caption">
                  <h5>Brand : RowMe</h5>
                  <h6>Price : 2000</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/dress3.jpg" alt="dress image">
              <div class="caption">
                  <h5>Brand : Denizen</h5>
                  <h6>Price : 1000</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img src="images/dress4.jpg" alt="dress image">
              <div class="caption">
                  <h5>Brand : Kalanjali</h5>
                  <h6>Price : 4000</h6>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                  } else {
                     //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)

                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                     } else {?>
                       <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                     <?php
                   }
                 }
                 ?>
            </div>
          </div>
        </div>
      </div>

      <!--**********************Footer**********************-->
      <?php
        include'includes/footer.php';
      ?>
</body>
</html>
