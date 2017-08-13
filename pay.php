<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
</head>
<body background="modi.jpg">
	<div>
		<h2>Payment Gateway Testing Sample</h2>
		<h3>Fill the form and submit it for starting the transaction...</h3>
	</div>

<div>
<table>
	<form name="postForm" class="form-signup" action="form_process.php" method="POST" align=center >
	<tr><td>TXNID</td><td><input class="form-control" type="text" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>" /></td></tr>
	<tr><td>AMOUNT</td><td><input class="form-control" type="text" name="amount" value="" /></td></tr>
	<tr><td>FIRSTNAME</td><td><input class="form-control" type="text" name="firstname" value="" /></td></tr>
	<tr><td>EMAIL</td><td><input class="form-control" type="text" name="email" value="" /></td></tr>
	<tr><td>PHONE</td><td><input class="form-control" type="text" name="phone" value="" /></td></tr>
	<tr><td>PRODUCTINFO</td><td><input class="form-control" type="text" name="productinfo" value="" /></td></tr>
	<tr><td>SUCCESS URL</td><td><input class="form-control" type="text" name="surl" value="http://yourdevelopedsite.com/success.php" size="64" /></td></tr>
	<tr><td>FAILURE URL</td><td><input class="form-control" type="text" name="furl" value="http://yourdevelopedsite.com/fail.php" size="64" /></td></tr>
	<tr><td><input type="submit" /></td><td><input type="reset" /></td></tr>
	</form>
</table>
</div>
</body>
</html>