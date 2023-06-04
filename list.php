<table width= 800 border="1">
    

<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    $conn = mysqli_connect("localhost", "test_user", "1111", "test_db");
    $sql = "select * from test_board order by id desc";
    $result = mysqli_query($conn, $sql);
    echo "<hr>";
    while($data = mysqli_fetch_array($result)){
?> 
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td> <a href="view.php?id=<?=$data['id'] ?>"> <?php echo $data['title'] ?> </a> </td>
            <td><?php echo $data['created'] ?></td>
        </tr>
<?php   } ?>

    <tr>
        <form action="./" method = "POST">
            <input type = "search" name = "search">
            <input type = "submit">
        </form>
        <hr>
    </tr>

<?php
    $search = $_POST['search'];
    if($search){$sql = "select * from test_board where title like '%$search%'";}
    else{$sql = "select * from test_board";}

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<a href='search.php?id=" . $row['id'] .  "'>" . $row['title'] . "</a>";
            echo "<br>";
        }
    }
?>

</table>

<button> <a href="create.php">create</a> </button>