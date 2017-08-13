<?php
	$dp=$_POST['drop'];
	$con=mysqli_connect("localhost","root","","userdetails");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT BoardingPoint FROM nfcworking Where refno= '$_POST['nfc']'   ";
if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
$row=mysqli_fetch_array($result)
    $bp=$row['Board Point'];
  // Free result set
  mysqli_free_result($result);
}
mysqli_close($con);
$con=mysqli_connect("localhost","root","","busroute");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT sno FROM 54 Where station='$dp'   ";
$sq2="SELECT sno FROM 54 Where station='$bp'   ";
$result1=mysqli_query($con,$sql);
$result2=mysqli_query($con,$sq2);  
$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);
$res=($row1-$row2);
  mysqli_free_result($result);
	
mysqli_close($con);
$dbconnect = mysqli_connect("localhost","root","","userdetails");
$sp = "INSERT INTO nfcworking(familyid,BoardingPoint,DropPoint,Amount) VALUES('$_POST['nfc']','$bp','$dp',$res)";
$temp = mysqli_query($dbconnect,$sp);
mysqli_commit($dbconnect);
mysqli_close($dbconnect);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Drop Point</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>
  <body background="admin.jpg">
    <div class="container">

      <form class="form-signin" name="form1" method="post" action="">
        <h2 class="form-signin-heading"><b>ENTER DETAILS<b></h2><br><br><br>
        <input name="nfc" id="nfc" type="text" class="form-control" placeholder="NFC CODE" autofocus required>
        <input name="drop" id="drop" type="text" class="form-control" placeholder="DROP POINT" required><br>
        <input name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">

        <div id="message"></div>
      </form>

    </div>
  </body>
</html>
