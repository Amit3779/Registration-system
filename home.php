<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet" href="style1.css">
    <a href="logout_process.php"><button type="submit" class="logout_btn" name="logout user">logout</button></a>
   
</head>
<body>
    <header>

<nav class="navbar">


<ul>
        <li> <a href="#">Home</a> </li>
  
        <li><a href="#">About</a></li>

        <li><a href="#">Services</a></li>
        
        <li><a href="#">Contact us</a></li>
    </ul>
    </nav>
    </header>

<div class="bar">
  	
<div class="content">

<h1 style="color:rgb(37, 110, 179);">Login Successful</h1>
</div>
<br><br>
  
</div>
</div>
   
   </div>
     
    
</body>
</html>