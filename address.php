<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>

<!DOCTYPE html">
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Address</title>
  </head>
  <body>
    <form action="addressSerch.php" method="GET" >
        <input name="address" type='text' placeholder="ex) 한강대로, 한강대로 416">
        <input type=submit value="Serch">
    </form>
  </body>
</html>