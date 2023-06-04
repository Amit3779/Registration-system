<?php 

$username = "";
$email    = "";


session_start();

include('database_connection.php');

if(isset ( $_POST['reg_user'])) {

 // receive all input values from the form
 $username = mysqli_real_escape_string($db, $_POST['username']);
 $email = mysqli_real_escape_string($db, $_POST['email']);
 $password_1 = mysqli_real_escape_string($db, $_POST['password1']);



 // if user already exists
 $user_check_query = "SELECT username FROM login WHERE username='$username'";
  $result = mysqli_query($db, $user_check_query);
  $count = mysqli_num_rows($result) ;

  
  if ($count > 0) { 
     {
      echo "<script type='text/javascript'>alert('Username already taken, please enter another username');
            document.location='register.php'</script>";
      return false;
    }

  }
  // if email already exists
  $email_check_query = "SELECT email FROM login WHERE email='$email' ";
  $result = mysqli_query($db, $email_check_query);
  $count = mysqli_num_rows($result) ;

  
  if ($count > 0) { 
     {
      echo "<script type='text/javascript'>alert('Email already taken, please enter another email');
            document.location='register.php'</script>";
      return false;
    }

  }
// register user 

    // $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO login (username, email, password) 
              VALUES('$username', '$email', '$password_1')";
    mysqli_query($db,$query);
    
    header('location: registered.php');
}
    

?>



