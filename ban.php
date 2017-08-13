<?php
	include 'loginlink.php';
?>
<?php
	$db = mysqli_connect("localhost","root","","userdetails");
	$info = "SELECT amount FROM registereddetails WHERE username=$username and password=$password ";
	$query = mysqli_query(mysqli ,$info,$db);
	if(!$query)
	{
		echo'Something Went Wrong';
	}
	else
	{
	$amount=mysqli_fetch_object($query,'amount');
	echo'$amount';
	}
	mysqli_close($dbconnect);

	
?>