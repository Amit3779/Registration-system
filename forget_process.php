<?php

// $email    = "";

session_start();

include("database_connection.php") ;



if (isset($_POST['update_password'])) {

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);

     // if email already exists
  $email_check_query = "SELECT email FROM login WHERE email='$email' ";
  $result = mysqli_query($db, $email_check_query);
  $count = mysqli_num_rows($result) ;

  
  if ($count > 0) { 

   (mysqli_query ( $db, "Update login set password ='$_POST[password1]' where email = '$_POST[email] ' ")) ;
  {

    
    ?>


echo "<script type='text/javascript'>alert('Password Updated successfully');
            document.location='login.php'</script>";

    
  <?php
    }
     

  }
  else{
    echo "<script type='text/javascript'>alert('Entered email is not registered in database');
    document.location='forget_password.php'</script>";
     
  }




}

?>