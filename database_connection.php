<?php
$db = mysqli_connect ("localhost", "root" , "" , "login_db");

if (mysqli_connect_errno())

{
echo "failed to connect to MySQL: " . mysqli_connect_error() ;
}

// echo "connection success" ;

?>