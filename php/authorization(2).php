<?php
//АВТОРИЗАЦИЯ ПОЛЬЗОВАТЕЛЯ
require_once 'functions.php';
if (isset($_POST['authButton'])
	&& isset($_POST['login']) 
	&& isset($_POST['password'])  
	&& checkPost($_POST)){

		require_once '../db/connection.php';

		$userData = array($_POST['login'], $_POST['password']);

		$checkUser=$conn->query("select * from users where (login='$userData[0]' and password='$userData[1]') or (email='$userData[0]' and password='$userData[1]')");

		$checkUser=$checkUser->fetch();

		if ($checkUser){
			session_start();
			$_SESSION['userLogin']=$checkUser['login'];
			$_SESSION['userRole']=$checkUser['role'];
			$_SESSION['userId']=$checkUser['id'];
			$location='../index.php';
		} else {
			session_start();
			$_SESSION['authFail']=true;
			$location='../index.php';
		}
}
//ПЕРЕНАПРАВЛЕНИЕ НА ИТОГОВУЮ СТРАНИЦУ
header('location:'.$location);
?>