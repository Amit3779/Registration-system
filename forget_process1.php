<?php

include ("database_connection.php") ;

if (isset($_POST['update_password'])) {

    

    if (mysqli_query ( $db, "Update login set password ='$_POST[password]' where email = '$_POST[email] ' ")) 
  {

    
    ?>


echo "<script type='text/javascript'>alert('Password Updated successfully');
            document.location='login.php'</script>";

    
  <?php
    }
     
}

?>