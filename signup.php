<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>

<!DOCTYPE html">
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <!--api authentication start-->
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=75f2a83ec766b3ac7ea902e40b083956">//Javascript key</script>
    <!--api authentication done-->
  </head>
  <body>
  	<form action="./signupMethod.php" method="POST">
	  	<fieldset>
            <h4>Name:
              <input type="text" minlength='2' name="author" required/>
            </h4>
            <h4>ID:
              <input type="text" minlength= '2' name='id' required/>
            </h4>
            <h4>PW:
              <input type="password" minlength='2' name="password" required/>
            </h4>
            <h4>Address:
              <input type="text" name="address" id="address" readonly>
              <button type="button" onclick="openAddressSerch()">Serch address</button>
            </h4>  
        </fieldset>
	  		<input type="submit" value="Signup"/>
    </form>
<!--api script start-->
    <script>
      function openAddressSerch() {
        new daum.Postcode({
          oncomplete: function(data) {
            var fullAddress = data.address; //move all selected address to variable
            document.getElementById('address').value = fullAddress; //put the value in address box
          }
        }).open();
      }
    </script>
    <script type="text/javascript" src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<!--api scirpt done-->
  </body>
</html>