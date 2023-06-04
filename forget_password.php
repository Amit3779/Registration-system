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
	var email = document.getElementById("email") ;
	var password1 = document.getElementById("passnew")  ;
    var password2 = document.getElementById("confnew")  ;
	if ( email.value.trim() == "" ) 

	 {
		alert("Please Enter Registered Email") ;
		return false;
	}
	else if ( password1.value.trim() =="") 
	{
		alert("Please Enter New Password") ;
		return false;
	}
	else if ( password2.value.trim() =="") 
	{
		alert("Please Enter confirm New Password") ;
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
  	<h2>Forget Passsword</h2>
  </div>
	 
  <form onsubmit="return validate()" method="post" action="forget_process.php">
  	<div class="input">
  		<label>Registered email</label>
  		<input type="text" id="email" name="email"  >
  	</div>
  	<div class="input">
  		<label>New Password</label>
  		<input type="password" id="passnew" name="password1" >
  	</div>

	 <div class="input">
			<label>Confirm New Password</label>
			<input type="password" id="confnew" name="password2">
		</div>
      
  	
  
  	<div class="input">
  		<button type="submit" class="btn" name="update_password"><h4>Update</h4></button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Register</a>
  	</p>
  </form>
</body>
</html>