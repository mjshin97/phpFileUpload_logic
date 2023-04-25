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
  	<form action="./signupMethod.php" method="POST">

            <h4>Name:
              <input type="text" minlength='2' name="author" required/>
            </h4>
            <h4>ID:
              <input type="text" minlength= '2' name='id' required/>
            </h4>
            <h4>PW:
              <input type="password" minlength='2' name="password" required/>
            </h4>
            <p><div class=subject>Address</div>
              <input class=textform type="text" name="join_address" id="address" onclick="addressSerch();" placeholder="Please write your address." readonly required>
            <p>  
        
	  		<input type="submit" value="Signup"/>
    </form>

    <!--new function start-->
    <script>
      function addressSerch(){
        url = "address.php";
        window.open(url,"address",'width=400,height=400, scrollbars=no,resizable=no');
      };
    </script>
    <!--new function done-->


  </body>
</html>