<!DOCTYPE html>
<!--

-->
<?php
    session_start();
    require_once 'connect.php';
    
    if (isset($_SESSION['userId'])) {
       $uid = $_SESSION['userId'];
    }
    else {
     header('Location: hiba.html');
     die();
    }
    
    $sql = "SELECT uname FROM user WHERE uid=$uid";
    $res = $db -> query($sql);
    
    if (!$res){
        die();
    }
    
    $row = $res -> fetch_row();
    $name = $row[0];
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Szép estét!  {$name}";
        echo '<br><a href="logout.php">Kilép</a>';
        ?>
    </body>
</html>
