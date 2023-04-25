<?php
    session_start();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    $host = 'localhost';
    $user = 'test_user'; 
    $pw = '1111'; 
    $db_name = 'test_db'; 
    $conn = mysqli_connect($host,$user,$pw,$db_name); 
    
    $userId = $_POST['id'];
    $userPw = $_POST['password'];
    
    $q = "SELECT * FROM test_table WHERE userId='$userId'";
    $result = mysqli_query($conn,$q);

    if(mysqli_num_rows($result) > 0) {
        $row =  mysqli_fetch_array($result);
        $password = $row['userPw'];
        if($userPw==$password){
            //login success
            session_regenerate_id();
            header("location: ./main.php");
        } else {
            //login fail by authentication
            echo "wrong password!";
        }
    } else {
        //login fail by identification
        echo "ID not exist";
    }
?>