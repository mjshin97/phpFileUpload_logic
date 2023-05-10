<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    $id = $_POST['id'];

    $conn = mysqli_connect("localhost", "test_user", "1111", "test_db");

    if($id){
        $query = "UPDATE test_board SET title='{$_POST['title']}' , 
        description='{$_POST['description']}' 
        where id='$id' ";

        mysqli_query($conn, $query);
    } else {
        $query = "INSERT INTO test_board (title, description , created) VALUES('{$_POST['title']}', '{$_POST['description']}', NOW() )";
        mysqli_query($conn, $query);
    }

?>

<script>
    location.href="list.php"
</script>