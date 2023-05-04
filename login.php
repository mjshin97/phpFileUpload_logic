<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>

<!DOCTYPE html">
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  </head>
  <body>
  	<form action="./authentication.php" method="POST">
        <div class="text-center">
          <h4>ID:
              <input type="text" name='id' />
            </h4>
            <h4>PW:
              <input type="password" name="password"/>
            </h4>
            <input type="submit" class="btn btn-Primary" value="Login"/>    
      </div>
    </form>
  </body>
</html>