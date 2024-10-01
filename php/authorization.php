<?php
require_once 'functions.php';
if (isset($_POST['submit'])
	&& isset($_POST['login']) 
	&& isset($_POST['password'])  
	&& checkPost($_POST)){

    $result="";
    require_once '../db/connection.php';

    $checkUser = $conn -> prepare("SELECT * FROM users WHERE (login=? OR email=?) AND password=?");
    $checkUser -> execute(array($_POST['login'], $_POST['login'], $_POST['password']));
    $checkUser = $checkUser -> fetch();

    if ($checkUser) {
        
        session_start();
			$_SESSION['userLogin']=$checkUser['login'];
			$_SESSION['userRole']=$checkUser['role'];
			$_SESSION['userId']=$checkUser['id'];
            $_SESSION['userName']=$checkUser['name'];
			$location='../index.php';

    } else {
        session_start();
		$_SESSION['authFail']=true;
		$location='../public/login.php?err=1';
    }
}

header('location:'.$location);
?>