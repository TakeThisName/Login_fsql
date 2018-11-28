<!DOCTYPE html>
<!--

-->
<?php
    session_start();
    require_once 'connect.php';
    session_destroy();
    $db -> close();
    header("location: index.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'Jócakát!';
        ?>
    </body>
</html>
