<?session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
	<header class="background">
        <div class="flex header1">
		<?php
        	include '../include/header1.php';
        	?>
			<div class="icons flex wrap">
	        	<a href="#" class="flex col a-center m-30-r">
	        		<img src="../media/search.svg" alt="Поиск">
                    <div class="underline"></div>
				</a>
				</a>
                <?
				if(  isset($_SESSION['userLogin'])
                       && isset($_SESSION['userRole'])
                       && isset($_SESSION['userId'])){
                       echo '<a href="#" class=" m-30-r flex col a-center">
                    <img src="../media/bag.svg" alt="Корзина">
                    <div class="underline"></div>';
                       echo ' <a href="../php/exit.php?exit=true" class=" m-30-r flex col a-center">
                    <img style="width: 20px;" src="../media/exit(1).svg" alt="Выход">
                    <div class="underline"></div>;';
                       }?>
                
                </a>
	        </div>
    	</div>
	</header>
	<main class="flex a-center vh9 jfsa">
		<img class="picture" src="../media/photos.png" alt="">
		<form action="../php/registration.php" method="POST" class="flex col a-center background">
		
			<input class="m-15-b" type="text" name="name" placeholder="ФИО">
			<input class="m-15-b" type="text" name="email" placeholder="Email">
			<input class="m-15-b" type="text" name="login" placeholder="Логин">
			<input class="m-15-b" type="password" name="password" placeholder="Пароль">
			<input class="m-15-b" type="password" name="repeatPassword" placeholder="Повторить пароль">
			<input class="m-15-b w100" type="submit" name="subButton" value="Зарегистрироваться">
			<div class="flex col a-center">
				<p>Уже зарегистрированы?</p>
				<a class="link" href="./login.php">Войти</a>
			</div>
			<?php require_once '../php/functions.php';
			print_r($_SESSION['message']);


		?>
		</form>
	</main>
    <footer class="flex jfsa">
    <?php
    include '../include/footer.php';
    ?>
    </footer>
</body>
</html>