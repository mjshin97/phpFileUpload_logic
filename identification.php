<?php
    session_start();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    $host = 'localhost';
    $user = 'test_user'; 
    $pw = '1111'; 
    $db_name = 'test_db'; 
    
    $userId = $_POST['id'];
/////////////////////////////////////////////////////////////////////////////////////////variety methods
    $q = "SELECT * FROM test_table WHERE userId = '$userId'";
/////////////////////////////////////////////////////////////////////////////////////////
    $result = $mysqli -> query($q);
    $row = $result -> fetch_array(MYSQLI_ASSOC);//

    if($row != null){
        $_SESSION['is_login'] = true; //comunicate by '$_SESSION[is_login]' in 'main.php' line 6 to 8
        $_SESSION['nickname'] = $row['userId'];
        header('Location: ./loginStep2.php');
        exit;
    } else {
        echo"Please sign up first.";
    }
?>
