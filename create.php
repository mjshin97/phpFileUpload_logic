<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        $conn = mysqli_connect("localhost", "test_user", "1111", "test_db");
        
        $id = $_GET['id'];
        $id = mysqli_real_escape_string($conn, $id);

        $query = "select * from test_board where id='$id' ";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_array($result);

    ?>



    <form action="process_create.php" method="POST">
        <?php if(isset($_GET['id'])) { ?>
            <input type="hidden" name="id" value="<?=$id?>">
            <p><input type="text" name="title"  value="<?=$data['title']?>"  placeholder="title" ></p>
            <p><textarea name="description" placeholder="description"><?=$data['description']?></textarea></p> 
            <p><input type="submit"></p>
        <?php } else { ?>
            <p><input type="text" name="title"  placeholder="title" ></p>
            <p><textarea name="description" placeholder="description"></textarea></p> 
            <p><input type="submit"></p>
        <?php } ?>
        
    </form>
</body>
</html> 