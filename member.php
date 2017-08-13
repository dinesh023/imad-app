<?php
	if(isset($_POST["submit"]))
	header('Location:memberfinish.php');
	
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

      <form class="form-signup" id="usersignup" name="usersignup" method="post" autocomplete="on" action="">
        <h2 class="form-signup-heading">ADD NEW CARD</h2><br>
		<input name="name" id="name" type="text" class="form-control" placeholder="Name" autofocus >
		<input name="age" id="age" type="age" class="form-control" placeholder="Age" >
		<input name="gender" id="gender" type="text" class="form-control" placeholder="Gender" >
		<input name="relation" id="relation" type="text" class="form-control" placeholder="Relationship" >
		<input name="aadhar" id="aadhar" type="int" class="form-control" placeholder="Aadhar Number" >
		<input name="mobno" id="mobno" type="int" pattern=[0-9]{10} class="form-control" placeholder="Mobile Number" ><br>
		<input name="addacc" id="addacc" class="btn btn-lg btn-primary btn-block" value="Add Account" type="submit">
		<input name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Submit" type="submit">
		</form>

    </div> <!-- /container -->

    </body>