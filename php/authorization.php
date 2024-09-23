<?php

if (isset($_POST['login'])
&& isset($_POST['password'])
&& isset($_POST['submit'])
&& !empty($_POST['login'])
&& !empty($_POST['password'])) {
    $result="";
    require_once '../db/connection.php';

    $checkUser = $conn -> prepare("SELECT id, name FROM users WHERE (login=? OR email=?) AND password=?");
    $checkUser -> execute(array($_POST['login'], $_POST['login'], $_POST['password']));
    $checkUser = $checkUser -> fetch();

    if ($checkUser) {
        session_start();
        $_SESSION['auth'] = true;
        $_SESSION['user_id'] = $checkUser['id'];
        $_SESSION['user_name'] = $checkUser['name'];
        $result="../index.php";
    } else {
        $result="../public/login.php?err=1";
    }
}

header('location:'.$result);
?>