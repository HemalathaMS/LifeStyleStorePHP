<?php
  require'includes/common.php';

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
  <title>Success</title>
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
          <!--**********************Body****************-->


          <table class="table table-style">

            <?php
              $sum=0;
              $item_id="";
              $brand="";

                 if (isset($_SESSION['email'])) {
                      $user_id=$_SESSION['user_id'];
                      $join_query="select * from users_items inner join items on user_id='$user_id' and status='Added to cart' and item_id=items.id";
                      $result=mysqli_query($con,$join_query) or die(mysqli_error($con));

                      if(mysqli_num_rows($result)==0){
                      
                        echo "<br><h4 style=\"padding-left:100px;color:red\">You have not purchased any items.<h4>";
                      }
                      else{

                        echo"<div style=\"margin:100px;\">
                          <h4 style=\"padding-left:20px\">  Your order is confirmed.Thank you for shopping with us.
                            <a href=\"products.php\" style=\"color:blue\">Click here</a>  to purchase any other item. </h4>
                        </div>
                        <br><h4 style=\"padding-left:100px;\">Your bill : <h4><thead><td>Item No.</td><td>Brand</td><td>Price</td></thead>";
                        while($row=mysqli_fetch_array($result)){
                           $sum+=$row['price'];
                           $item_id=$item_id.",".$row['item_id'];
                           $brand=$brand.",".$row['name'];
                           echo "<tr>
                              <td>".$row['item_id']." </td>

                                <td>". $row['name']." </td>

                               <td>  ".$row['price']." </td>
                            </tr>";

                       }

             echo "<tr> <td></td> <td>Total :</td> <td>  ".$sum."  </td></tr>";

                  $item_list=substr($item_id,1);
                  $brand_list=substr($brand,1);
                  $date=date('Y-m-d');
                  $insert_query="insert into bill (user_id,price,item_id,brand,date) values ('$user_id','$sum','$item_list','$brand_list','$date');";

                  mysqli_query($con,$insert_query) or die(mysqli_error($con));
             }
           }?>
          </table>
          <?php
               $id=$_GET['id'];
               $i=1;
               while($i<strlen($id)){
                 $update_query="Update users_items set status='Confirmed' where item_id=".substr($id,$i,1);
                 mysqli_query($con,$update_query) or die(mysqli_error($con));
                 $i=$i+2;
               }
 ?>

            <div style="padding-top: 380px">
              <?php
                include'includes/footer.php';
              ?>
            </div>
        </body>
        </html>
