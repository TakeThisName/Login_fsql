<?php

$server = "localhost";
$user = "esti_szoftverf";
$pwd = "esti_szoftverf";
$dbname = "esti_login";
// $port = "3306"

$db = new mysqli($server, $user, $pwd, $dbname);

if ($db -> connect_errno){
    die ("Nem sikerült csatlakozni!");
}

if (!$db -> set_charset("utf8")){
    echo 'A karakterkódolást nem sikerült beállítani';
}