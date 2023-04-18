<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    $host = 'localhost';
    $user = 'test_user'; //Database user name
    $pw = '1111'; //Database user password
    $db_name = 'test_db'; //Database name
    $mysqli = new mysqli($host,$user,$pw,$db_name); //connecting Database
    $conn = mysqli_connect('localhost', 'test_user', '1111', 'test_db');//

    $userId = $_POST['id'];

    $q = "SELECT * FROM test_table WHERE userId = '$userId'"; //query for check 'id' already exist
    $result = $mysqli -> query($q); //sending a query to mysql
    $row = $result -> fetch_array(MYSQLI_ASSOC); //
    if($row != null){
        //if 'id' already exist in database
        echo "already exist";
    } else {
        echo "you can use this ID";
    }
?>