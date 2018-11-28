<!DOCTYPE html>
<?php
    session_start();
    require_once 'connect.php';
    
    if (isset($_POST['enter'])){
        $username = $_POST['uname'];
        $password = $_POST['pwd'];
        $sql = "SELECT * FROM user WHERE uname=\"$username\" AND pwd=\"$password\"";
        
        $res = $db -> query($sql);
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($res -> num_rows == 1)
            echo 'Sikeresen bejelenkteztél!';
        ?>
    </body>
</html>
