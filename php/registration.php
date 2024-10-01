<?php
require_once '../db/connection.php';
require_once 'functions.php';
if (isset($_POST['name'])
&& isset($_POST['email'])
&& isset($_POST['login'])
&& isset($_POST['password'])
&& isset($_POST['repeatPassword'])
&& isset($_POST['subButton'])
&& !empty($_POST['name'])
&& !empty($_POST['email'])
&& !empty($_POST['login'])
&& !empty($_POST['password'])
&& !empty($_POST['repeatPassword'])
&& checkPost($_POST)) {
	$result="";

	$name = $_POST['name'];
	$fio=explode(" ", $name);
	$UserPatronymic = $fio[2].' '.$fio[3];
	
	$userData = array($_POST['login'], $_POST['email']);

	$checkData=$conn->query("SELECT login, email FROM users WHERE login='$userData[0]' or email='$userData[1]'");
	
	$checkData=$checkData->fetch();


	if ($_POST['password']==$_POST['repeatPassword']){ 
		$pasOk=true;
		}else{ 
		$pasOk=false;
		
	};
	
	if (!checkRegistration($checkData['login'], $checkData['email'], $pasOk)){
			$user=$conn -> prepare("INSERT INTO users (email, login, password, family, name, patronymic) VALUES (?, ?, ?, ?, ?, ?)");
			$user -> execute(array($_POST['email'], $_POST['login'], $_POST['password'], $fio[0], $fio[1], $UserPatronymic));

		if($user == true){

			/* $folderPath=$_SERVER['DOCUMENT_ROOT'].'/users/'.$_POST['login'];
			mkdir($folderPath); */ 
			// Warning: mkdir(): File exists in C:\Distrib\OpenServer\domains\maket-0609\php\registration.php on line 43 
		
			session_start();
			$_SESSION['regOk']=true;
			$location='../index.php';
		}
	} else {
		session_start();
		$_SESSION['regFail']=true;
		$_SESSION['hint'] = array($checkData['login'], $checkData['email'], $pasOk);
		/* $_SESSION['arr-test'] = array(true, true, true); */
		$location='../public/registration.php';

	}
}else{$location='../public/registration.php';}
header('location:'.$location);
?>