<?php
  session_start();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
    
    if(!isset($_SESSION['is_login'])){
        header('location: ./authentication.php'); //this logic will check the global variable is_login, if it's true value header will bring you to authentication.php
    }

    /////error occured
  $conn = mysqli_connect("localhost", "test-user", 1111);
  mysqli_select_db($conn,"test_db");
  $result = mysqli_query($conn, "SELECT * FROM test _table");
  mysqli_fetch_assoc($result);
  //////
?>

<!DOCTYPE html">
<html>
  <head>
    <meta charset="UTF-8" />
    <title>It works</title>
  </head>
  <body>
    <?php echo $_SESSION['nickname'];?> welcome! <br>
    <a href="./logout.php">logout</a>
  </body>
</html>