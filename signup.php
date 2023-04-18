<?php
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
            <form action="./idCheque.php" method="POST">
              <h4>ID:
                  <input type="text" minlength= '2' name='id' required/>
              </h4>
              <input type="submit" value='Chaque'>
            </form>

  	<form action="./signupMethod.php" method="POST">
	  	<fieldset>

            <h4>Name:
                <input type="text" minlength='2' name="author" required/>
            </h4>


            <h4>PW:
                <input type="password" minlength='2' name="password" required/>
            </h4>

        </fieldset>
	  		<input type="submit" value="Signup"/>
    </form>

  </body>
</html>
