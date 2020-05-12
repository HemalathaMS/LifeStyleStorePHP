<?php
  require 'includes/common.php';

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
  <title>Lifestyle Store</title>
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
  include 'includes/header.php';
?>
  <!--**************Body*******************-->
<div id="banner_image">
  <div class="container-fluid">
  <div class="content">
    <div class="banner-image">
      <div class="inner-banner-image">
        <center>
          <div id="banner_content">
              <h1>We sell lifestyle</h1>
              <p>Flat 40% OFF on premium brands</p>
              <a href="products.php" class="btn btn-danger btn-lg active">Shop now</a>
          </div>
        </center>
      </div>
    </div>
  </div>
  </div>
</div>

    <div id="container">
      <div class="items">

          <img src="images/watches.jpg" alt="watch image" class="thumbnail" width=500px height=300px>
          <div class="caption">
              <h2>Watches</h2>
              <p>Original watches from the best brands.</p>
          </div>

      </div>

      <div class="items">

          <img src="images/shades.jpg" alt="shades image" class="thumbnail" width=500px height=300px>
          <div class="caption">
              <h2>Shades</h2>
              <p>Choose among the best available.</p>
          </div>

      </div>

      <div class="items">

          <img src="images/dress.jpg" alt="dress image" class="thumbnail" width=500px height=300px>
          <div class="caption">
              <h2>Dress</h2>
              <p>Grab the new trendy wear.</p>
          </div>

      </div>

    </div>
    <?php
      include'includes/footer.php';
    ?>

</body>
</html>
