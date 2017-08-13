<?php
$amount=$_POST['amount'];
if(isset($_POST['submit']))
{
$dbconnect = mysqli_connect("localhost","root","","userdetails");
$sp = "INSERT INTO amountdetails(amount) VALUES('$amount')";
$temp = mysqli_query($dbconnect,$sp);
mysqli_commit($dbconnect);
mysqli_close($dbconnect);

header('location:https://www.payumoney.com/webfronts/#/index/shubhvaahan');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>

  <body background="modi.jpg">
    <div class="container">
		<h2 align=center>RAJKOT TRANSPORT SYSTEM</h2><hr>
      <form class="form-signup" id="usersignup" name="usersignup" method="post" autocomplete="on" action="">
        <h2 class="form-signup-heading">Shubhvaahan Wallet</h2>
        <input name="amount" id="amount" type="int" class="form-control" placeholder="AMOUNT"><br>
        <input name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="PAYMENT GATEWAY" type="submit">
        <div id="message"></div>
      </form>

    </div> <!-- /container -->
	
    </body>
</html>
