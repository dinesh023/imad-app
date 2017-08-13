
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>

  <body background="modi.jpg">
    <div class="container">

      <form class="form-signin" name="form1" method="post" action="loginlink.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus required>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password" required>
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <input name="Signin" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">
	    <a href="signup.php" name="Sign Up" id="signup" class="btn btn-lg btn-primary btn-block" type="submit">Create new account</a>

        <div id="message"></div>
      </form>

    </div>
  </body>
</html>