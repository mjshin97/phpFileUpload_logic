<?php
    session_start();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    $host = 'localhost';
    $user = 'test_user'; 
    $pw = '1111'; 
    $db_name = 'test_db'; 
    $mysqli = new mysqli($host,$user,$pw,$db_name); //connecting Database
    $conn = mysqli_connect('localhost', 'test_user', '1111', 'test_db');//

    $author = $_POST['author'];
    $userId = $_POST['id'];
    $userPw = $_POST["password"];
    $userAd = $_POST["address"];

    $q = "SELECT * FROM test_table WHERE userId = '$userId'"; //query for check 'id' already exist
    $result = $mysqli -> query($q); 
    $row = $result -> fetch_array(MYSQLI_ASSOC); //
    if($row != null){
        //if 'id' already exist in database
        echo "already exist";
        exit;
    } else {
        //if 'id' not esist in database
        $sql = "INSERT INTO `test_table` (title, description, author, created, userId, userPw, userAd) VALUES ('about', 'name is', '$author', NOW(), '$userId', '$userPw', '$userAd')"; //sql test!
        // $sql = "INSERT INTO test_table WHERE ('author', 'userId', 'userPw') VALUE ($author, $userId, $userPw)";
        mysqli_query($conn,$sql);//
        //$q = "INSERT INTO test_table WHERE (author, userId, userPw) VALUE ($author, $userId, $userPw)"; 
        header('Location: ./signupSuccess.php');
    }
?>