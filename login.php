<?php
include ("database_connection.php")

?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system </title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <script type="text/javascript">

	function validate()
{
	var username = document.getElementById("uname") ;
	var password = document.getElementById("pass")  ;

	if ( username.value.trim() == "" ) 

	 {
		alert("Please Enter Username") ;
		return false;
	}
	else if ( password.value.trim() =="") 
	{
		alert("Please Enter Password") ;
		return false;
	}

	else
	{
		true;
	}

}

  </script>
</head>

<body>
  <div class="header1">
  	<h2>Login</h2>
  </div>
	 
  <form onsubmit="return validate()" method="post" action="login_process.php">
  	<div class="input">
  		<label>Username</label>
  		<input type="text" id="uname" name="username"  >
  	</div>
  	<div class="input">
  		<label>Password</label>
  		<input type="password" id="pass" name="password" >
  	</div>
	   <a href="forget_password.php">Forget Password?</a>

  	<div class="input">
  		<button type="submit" class="btn" name="login_user"><h4>Login</h4></button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Register</a>
  	</p>
  </form>
</body>
</html>