<?php session_start();

include('database_connection.php');

if(isset($_POST['login_user']));
{
    $username_unsafe=$_POST['username'];
    $password_unsafe=$_POST['password'];

    $username = mysqli_real_escape_string($db,$username_unsafe);
    $password = mysqli_real_escape_string($db,$password_unsafe);

    $query=mysqli_query($db,"select * from login where username='$username' and password='$password'")or die(mysqli_error($db));

    $row=mysqli_fetch_array($query);

         $name=$row['username'];
         $counter=mysqli_num_rows($query);
         $id=$row['id'];

         if ($counter == 0)
         {
            echo "<script type='text/javascript'>alert('Invalid Usrename or Password!');
            document.location='login.php'</script>";
         }
         else
         {
            $_SESSION['id']=$id;
            $_SESSION['username']=$name;

            echo "<script type='text/javascript'>document.location='home.php'</script>";
         }

}

?>