<html>
<head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>
<body background="bus.jpg">
<br><br><br><br><form class="form-signup" id="usersignup" name="usersignup" method="post" autocomplete="on" action="">
        <h2 class="form-signup-heading">Register</h2>
		<input name="AadharNumber" id="AadharNumber" type="int" class="form-control" pattern="[0-9]{12}" placeholder="Aadhar Number">
        <input name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="submit" type="submit">
		
        <div id="message"></div>
      </form>
</body>
</html>