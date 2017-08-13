<?php
	if(isset($_POST['Home']))
		header('location:http://sharav.000webhostapp.com/');
	if(isset($_POST['submit']))
		header('location:http:concrt.php');
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
       <input name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Embed Into NFC" type="submit">
	   <input name="Home" id="submit" class="btn btn-lg btn-primary btn-block" value="Home" type="submit">
	   <div id="message"></div>
      </form>

    </div> <!-- /container -->
	
    </body>
</html>
