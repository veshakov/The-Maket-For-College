<?php
$dbHost="mysql:host=localhost;dbname=filmax;charset=utf8";
$dbUser="root";
$dbPass="root";
$dbErrMode=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$conn=new PDO($dbHost, $dbUser, $dbPass, $dbErrMode);
?>