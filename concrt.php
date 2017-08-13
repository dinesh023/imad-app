
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
		<h2 align=center>RAJKOT TRANSPORT SYSTEM</h2><hr><br><br><br><br>
		<p align=center><b>CONGRATULATIONS DETAILS ARE SUCCESSFULLY INSERTED</b><p><br>
		<p align=center><b>YOUR NFC CODE:</b>
		<?php 
		$num=rand(1,9999999999);echo($num);
		?> <p><br><br><br><br>
      <a class="btn btn-lg btn-primary btn-block" href ="http://lmntrix.webstarts.com">BACK TO HOME</a>
    </div> <!-- /container -->
	
    </body>
</html>