<?php
  session_start();
//check if user is authenticated
//if not send to login.php...header(...)
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Steve</title>
  </head>
  
  <body>
  
    <h1>Assignment 1</h1>

    <p>Welcome, <?php $_SESSION['username'] ?></p>
    
  </body>
</html>