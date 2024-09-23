<?php
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
&& !empty($_POST['repeatPassword'])) {
	$result="";

	if ($_POST['password'] != $_POST['repeatPassword']) {
		$result="../public/registration.php?code=2";
	} else {
		
		require_once '../db/connection.php';

		$checkLE=$conn -> prepare("SELECT login, email FROM users WHERE login=? OR email=?");
		$checkLE -> execute(array($_POST['login'], $_POST['email']));
		$checkLE = $checkLE -> fetch();

		if (!$checkLE) {
			$conn -> prepare("INSERT INTO users (email, login, password, name) VALUES (?, ?, ?, ?)") -> execute(array($_POST['email'], $_POST['login'], $_POST['password'], $_POST['name']));

			$result="../public/login.php?success=1";
		} else {
			$result="../public/registration.php?code=1";
		}
	}
}

header('location:'.$result);
?>