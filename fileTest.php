<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>   
<body>
    <p>file download test</p>
    <form enctype="multipart/form-data" action="1.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input name="userfile" type="file" />
        <input type="submit" value="upload" />
    </form>
    <br>
    <hr>

    <p>download test</p>
    <table class="table">
        <thead>
            <th scope="col">#</th>
            <th scope="col">FILE_NAME</th>
        </thead>
        <tbody>
            <?php
            $number = 0;
            $path = "./upload";
            $dh = dir($path);
            while(($file=$dh->read()) !== false) {
                if( $file=="." || $file=="..") continue;
                $realfile = $path . "/" . $file;
                $number++;
                echo "<tr>";
                echo "<th scope='row'>".$number."</th>";
                echo "<td><a href='$realfile' download>$file</a></td>";
                echo "</tr>";
          }	
            ?>
        </tbody>
    </table>
</body>
</html>  