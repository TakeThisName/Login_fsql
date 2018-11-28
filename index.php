<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Belépés</title>
    </head>
    <body>
        <div id="content">
            <form action="login.php" method="post">
                <input type="text" name="uname" placeholder="Felhasználónév" required>
                <br>
                <input type="password" name="pwd" placeholder="Jelszó" required>
                <br>
                <input type="submit" name="enter" value="Belép">
            </form>
        </div>
    </body>
</html>
