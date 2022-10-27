<?php
$UserName="";
    session_start();
    include "connection.php";
    if(!isset($_SESSION['name']))
    {
        header("Location: login.php");
    }
    if(isset($_POST['cmdDone']))
    {
        header("Location: loginPage.php");
    }
    if(isset($_POST['cmdSubmit']))
    {
        include "connection.php";


        $firstName=$_POST['fName'];
        $lastName=$_POST['lName'];
        $UserName=$_POST['userName'];
        $email=$_POST['email'];
        $address1=$_POST['address'];
        $address2=$_POST['address2'];
        $country=$_POST['country'];
        $paymentMethod=$_POST['paymentMethod'];
        $nameOnCard=$_POST['nameOnCard'];
        $creditCardNumber=$_POST['creditCardNumber'];
        $expiry=$_POST['Exipry'];
        $CCV=$_POST['ccv'];
        $shippingOption=$_POST['shippingOption'];
        $rating=$_POST['rating'];
        $total="818,000";

        $query="insert into cart (FirstName, LastName, UserName, Email, Address1, Address2, Country, PaymentMethod, nameOnCard, creditCardNumber, expiry, CCV, shppingMethod, Total, rating) values ('$firstName','$lastName','$UserName','$email','$address1','$address2','$country','$paymentMethod','$nameOnCard','$creditCardNumber','$expiry','$CCV','$shippingOption','$total','$rating')";

        $result=mysqli_query($conn,$query);
        if(!$result)
        {
            echo "Order Placement Failed";
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
<style>
body, html {
  height: 100%;
  margin: 0;
      /* The image used */
  background-image: url("images/abc.jpg");

  


  height: 100%; 


  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>





  <title>Customer Detail</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h2 style="color: white;">Order Details</h2>
  <table class="table table-bordered table-hover table-dark">
    
      <tr style="color:white ; background-color: black;">
        <td>Customer Name</td>
        <td><?php echo  "$firstName"?></td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>User Name</td>
        <td><?php echo  $UserName?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>Email</td>
        <td><?php echo  $email?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>Address 1</td>
        <td><?php echo  $address1?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>Address 2</td>
        <td><?php echo  $address2 ?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>Country</td>
        <td><?php echo  $country ?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>Payment Method</td>
        <td><?php echo  $paymentMethod ?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>Name On Card</td>
        <td><?php echo  $nameOnCard ?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>Credit Card Number</td>
        <td><?php echo  $creditCardNumber ?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>Exiration</td>
        <td><?php echo  $expiry ?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>CCV</td>
        <td><?php echo  $CCV ?> </td>
      </tr>
      <tr style="color:white ; background-color: black;">
        <td>Shipping Method</td>
        <td><?php echo  $shippingOption ?> </td>
      </tr>

      <tr style="color:white ; background-color: black;">
        <td>Grand Total</td>
        <td><?php echo  $total ?> </td>
      </tr>

      <tr style="color:white ; background-color: black;">
        <td>Rating</td>
        <td><?php echo  $rating ?> </td>
      </tr>
      <form action="" method="POST">
      <tr>
          <td></td>
          <td>
              
                    <input type="submit" name="cmdDone" value="Done">
              
              
          </td>
      </tr>
      </form>
  </table>
</div>
</body>
</html>