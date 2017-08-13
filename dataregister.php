<?php
$con=mysqli_connect("localhost","root","","userdetails");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT username,amount FROM registereddetails   ";
$x=0;$sum=0;
if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_array($result))
    {
		$sum+=$row['amount'];
		$x++;
    }
  // Free result set
  mysqli_free_result($result);
}
printf("Total Amount :%d",$sum);
printf("Total Person Logined : %d",$x);

mysqli_close($con);
	
?>