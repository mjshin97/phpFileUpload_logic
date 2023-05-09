<?php
  session_start();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
    
    if(!isset($_SESSION['is_login'])){
        header('location: ./authentication.php'); //this logic will check the global variable is_login, if it's true value header will bring you to authentication.php
    }
  
?>

<!DOCTYPE html">
<html>
  <head>
    <meta charset="UTF-8" />
    <title>It works</title>
  </head>
  <body>
    <header>
      <?php echo $_SESSION['nickname'];?> welcome! <br>
      <a href="./logout.php">logout</a>
    </header>
    <br>
    <hr>

    <nav>
      <ol>
  
      </ol>
    </nav>

    <a href="create.php">create</a>

  </body>
</html>

<?php
    $conn = mysqli_connect("localhost", "test_user", 1111);
    mysqli_select_db($conn,"test_db");
    $result = mysqli_query($conn, "SELECT * FROM test_table");


  
    // while( $row = mysqli_fetch_assoc($result)){
    //   echo '<li><a href="./logout.php">'.$row['id']. '</a></li>'."\n";
    //   echo '<li><a href="./logout.php">'.$row['title']. '</a></li>'."\n";
    //   echo "<br/>";
    // }
?>