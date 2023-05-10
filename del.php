<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $conn = mysqli_connect("localhost", "test_user", "1111", "test_db");

    $id = $_GET['id'];
    $id = mysqli_real_escape_string($conn, $id);
    
    $query = "delete from test_board where id='$id' ";

    mysqli_query($conn,$query);
?>

<script>
    location.href='list.php'
</script>