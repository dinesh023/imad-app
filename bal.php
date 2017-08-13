<?php
$con=mysqli_connect("localhost","root","","userdetails");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT username,password,amount,name FROM registereddetails   ";
	if ($result=mysqli_query($con,$sql))
	{
      $row=mysqli_fetch_array($result);
	  printf(" The Balance Amount is %s",$row['amount']);
	}
	  mysqli_free_result($result);
	  mysqli_close($con);
	
?>
