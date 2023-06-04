<?php

include ("database_connection.php")
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <script type="text/javascript">
function validate()
{
	var username = document.getElementById("uname") ;
	var email = document.getElementById("email")  ;
	var password1 = document.getElementById("pass")  ;
	var password2 = document.getElementById("confpass")  ;

	if ( username.value.trim() == "" ) 

	 {
		alert("Please Enter Username") ;
		return false;
	}
	else if ( email.value.trim() =="") 
	{
		alert("Please Enter email") ;
		return false;
	}
	else if ( password1.value.trim() =="") 
	{
		alert("Please Enter Password") ;
		return false;
	}
	
	else if ( password2.value.trim() =="") 
	{
		alert("Please Enter confirm Password") ;
		return false;
	}
    else if(password1.value != password2.value)
	{alert ("passwords are not same") ;
	return false ;

     }
	
	else
	{
		return true;
	}

}

  </script>
</head>

<body>
  <div class="header1">
  	<h2>Create Account</h2>
  </div>
	 
  <form onsubmit="return validate()" method="post" action="register_process.php">

  	<div class="input">
  		<label>Username</label>
  		<input type="text" id="uname" name="username" >
	</div>

	<div class="input">
	  <label>email</label>
	  <input type="email" id="email" name="email">
  </div>
  	
  	<div class="input">
  		<label>Password</label>
  		<input type="password" id="pass" name="password1">
	</div>

		  <div class="input">
			<label>Confirm Password</label>
			<input type="password" id="confpass" name="password2">
		</div>
  	
  	<div class="input">
  		<button type="submit" value="submit" class="btn" name="reg_user"><h4>Register</h4></button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>