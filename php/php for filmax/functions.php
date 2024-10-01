<?php
function checkPost($post){
	foreach ($post as $elem) {
		if(empty($elem)){
			return false;
		}
	}
	return true;
}

function checkRegistration($checkLogin, $checkEmail, $pasOk){
	$message = false;
	if ($checkLogin && $checkEmail) $message = 'Данные логин и email заняты!';
	else if ($checkLogin) $message = 'Данный логин занят!';
	else if ($checkEmail) $message = 'Данный email занят!';
	else if (!$pasOk) $message = 'Введенные пароли не совпадают!'; 
	return $message;
}
?>