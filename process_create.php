<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    $conn = mysqli_connect("localhost", "test_user", "1111", "test_db");
    $sql = "INSERT INTO test_board (title, description , created) VALUES('{$_POST['title']}', '{$_POST['description']}', NOW() )";
    mysqli_query($conn, $sql);
    echo $sql;
?>