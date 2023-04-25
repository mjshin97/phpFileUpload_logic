<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Address</title>
</head>
<body>
<?php
    $conn= mysqli_connect('localhost', 'test_user', '1111');
    mysqli_select_db($conn, 'test_db');
    
    $address = $_GET['address'];

    $arr= explode(" ",$address);

    if($arr[1]){
        $sql = "SELECT * FROM ZIPCODE WHERE DORO='$arr[0]' AND BUILD_NO1='$arr[1]'";
    } else {
        $sql = "SELECT * FROM ZIPCODE WHERE DORO='$arr[0]' ORDER BY BUILD_NO1 ASC";
    }
    
    $res = mysqli_query($conn, $sql);
    $num = 1;
?>
    <table>
<?php
    while($row = mysqli_fetch_array($res)){
        $full = $row['SIDO']." ".$row['SIGUNGU']." ".$row['DORO']." ".$row['BUILD_NO1']." ".$row['BUILD_NM']; ?>
        <tbody>
            <td><?=$num?></td>
            <td><a href="detailAddress.php?full=<?=$full?>"><?=$full?></a></td>
        </tbody> <?php
        $num++;
    }
?>
    </table>
</body>
</html>