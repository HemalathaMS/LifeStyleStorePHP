<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Header</title>

</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse"
          datatarget="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
             </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            </div>
          <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="nav navbar-nav navbar-right">
            <?php
              if (isset($_SESSION['email'])) {
                  if($_SESSION['email']=="admin@gmail.com"){
                      ?>
                      <li><a href="" data-toggle="modal" data-target="#myModal">
                           <span class = "glyphicon glyphicon-plus"></span> Add Products </a></li>
                      <li><a href="employee.php">
                           <span class = "glyphicon glyphicon-user"></span> Employees </a></li>*
                      <li><a href = "shipping.php">
                           <span class = "glyphicon glyphicon-saved"></span> Shipping</a></li>
                      <li><a href = "logout_script.php">
                           <span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
            <?php }else{ ?>
               <li><a href = "cart.php">
                    <span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
               <li><a href = "setting.php">
                    <span class = "glyphicon glyphicon-user"></span> Settings</a></li>
               <li><a href = "logout_script.php">
                    <span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
            <?php }
            }else {?>
                        <li><a href="signup.php">
                          <span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php">
                          <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               <?php     }  ?>
              </ul>
            </div>
          </div>
        </div>
      <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add Products</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div id="modal-style">
                  <p style="padding-left:40px;">Upload the image of the product, price and brand.</p>
                    <form action="" method="post">
                      <div id="modal-style">
                        <div class="form-group">
                          <input class="form-control" type="number" name="price" placeholder="Price">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" name="brand" placeholder="Brand">
                        </div>
                        <div class="form-group">
                          <input type="file" name="imageUpload" id="imageUpload">
                        </div>
                      </div>
                  </div>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name ="submit" value="Submit">
              </div>
            </form>
            </div>
          </div>
        </div>

        <?php
        if(isset($_POST['submit'])) {

        }
         ?>
</body>
</html>
