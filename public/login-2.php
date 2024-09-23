<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_2.css">
    <link rel="stylesheet" href="../css/login_2.css">
</head>
<body>
<header class="background">
        <div class="flex header_top">
        	<?php
        	include '../include/header_top.php';
        	?>
			<div class="icons flex wrap">
	        	<a href="#" class="flex col a-center m-30-r">
	        		<img src="../media/search.svg" alt="Поиск">
				</a>
				<a href="#" class="flex col a-center m-30-r">
					<img src="../media/user.svg" alt="Профиль">
				</a>
				<a href="#" class="flex col a-center">
					<img src="../media/bag.svg" alt="Корзина">
				</a>
	        </div>
    	</div>
	</header>
        <main class="flex col vh9 jfsa " >
                <section class="section background flex col ">

                    <img class="photo" src="../media/photos.png" alt="photo">
                    <form class="flex col a-center " action="../php/authorization.php" method="POST">
		            	<input class="m-15-b" type="text" placeholder="Логин или Email" name="login">
		            	<input class="m-15-b" type="password" placeholder="Пароль" name="password">
		            	<input class="button_auth m-15-b w100" type="submit" value="Войти" name="submit">
		            	<div class="flex col a-center">
		            		<a class="link" href="./registration.php">Зарегистрироваться</a>
		            	</div>
		            </form>
                </section>
        </main>
</body>
</html>