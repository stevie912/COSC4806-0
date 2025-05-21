<?php
  session_start();
  if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != true) {
    header("Location: /login.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Steve</title>
  </head>
  
  <body>
  
    <h1>Assignment 1</h1>

    <p>Welcome, <?php echo $_SESSION['username'] ?></p>
    
  </body>
  <footer>
    <p></p><a href="/logout.php">Click here to logout</a>
  </footer>
</html>