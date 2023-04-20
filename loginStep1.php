<?php
  session_destroy();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>

<!DOCTYPE html">
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
  	<form action="./identification.php" method="POST">
	  	<fieldset>
        <h4>ID:
	  		    <input type="text" name='id' />
        </h4>
      </fieldset>
	  		<input type="submit" value="Login"/>
    </form>
  </body>
</html>