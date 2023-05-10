<table width= 800 border="1">
    <tr>
        <th>No</th>
        <th>title</th>
        <th>created</th>
    </tr>
<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    $conn = mysqli_connect("localhost", "test_user", "1111", "test_db");
    $sql = "select * from test_board order by id desc";
    $result = mysqli_query($conn, $sql);
    echo $sql;
    echo "<hr>";
    while($data = mysqli_fetch_array($result)){
?> 
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td> <a href="view.php?id=<?=$data['id'] ?>"> <?php echo $data['title'] ?> </a> </td>
            <td><?php echo $data['created'] ?></td>
        </tr>
<?php   } ?>

</table>

<button> <a href="./create.php">create</a> </button>