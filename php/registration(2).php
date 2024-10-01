<?php
//РЕГИСТРАЦИЯ ПОЛЬЗОВАТЕЛЯ
require_once 'functions.php';
if (isset($_POST['regButton'])
	&& isset($_POST['fio']) 
	&& isset($_POST['email']) 
	&& isset($_POST['login']) 
	&& isset($_POST['password']) 
	&& checkPost($_POST)){	

		require_once '../db/connection.php';

		$userData = array($_POST['login'], $_POST['email']);

		$checkData=$conn->query("select login, email from users where login='$userData[0]' or email='$userData[1]'");

		$checkData=$checkData->fetch();

		if ($_POST['password']==$_POST['repeatPassword']) 
			$pasOk=true;
		else 
			$pasOk=false;
		
		if (!checkRegistration($checkData['login'], $checkData['email'], $pasOk)){

			if(
				$conn->prepare("insert into users (fio, email, login, password) values (?,?,?,?)")->execute(array($_POST['fio'],$_POST['email'],$_POST['login'],$_POST['password']))
			){

				$folderPath=$_SERVER['DOCUMENT_ROOT'].'/users/'.$_POST['login'];
				mkdir($folderPath);

				session_start();
				$_SESSION['regOk']=true;
				$location='../index.php';
			}
		} else {
			session_start();
			$_SESSION['regFail']=true;
			$_SESSION['hint'] = checkRegistration($checkData['login'], $checkData['email'], $pasOk);
			$location='../registration.php';
		}
}
header('location:'.$location);
?>