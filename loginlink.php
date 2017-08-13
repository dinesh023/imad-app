<?php
$nam = $_POST['myusername'];
$pass =$_POST['mypassword'];
$con=mysqli_connect("localhost","root","","userdetails");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT username,password,amount,name FROM registereddetails   ";
$x=0;
if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_array($result))
    {
		if($row['username']==$nam and $row['password']==$pass)
		{
		printf("%s (%s) \n",$row['name'],$row['amount']);$x=5;
			
		}
    }
  // Free result set
  mysqli_free_result($result);
}
if($x==5)
	header('Location:http://lmntrix.webstarts.com');
else
	printf("Enter A valid Username and Password");

mysqli_close($con);
	
?>