<!DOCTYPE html>
<html class="flex col" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/catalog.css">
</head>
<body class="flex col">
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
                <a href="#" class="flex col a-center m-30-r">
                    <img src="../media/user.svg" alt="Профиль">
                    <div class="underline"></div>
                </a>
                <a href="#" class="flex col a-center">
                    <img src="../media/bag.svg" alt="Корзина">
                    <div class="underline"></div>
                </a>
            </div>
        </div>
    </header>
    <main class="flex wrap">
        <div class="item">
            <img src="../media/Group1.jpg" alt="">
            <p>Filmax Hello</p>
            <p>5 900 ₽</p>
        </div>
        <div class="item">
            <img src="../media/Group2.jpg" alt="">
            <p>Filmax Hello</p>
            <p>6 900 ₽</p>
        </div>
        <div class="item">
            <img src="../media/Group3.jpg" alt="">
            <p>Filmax Hello</p>
            <p>8 900 ₽</p>
        </div>
    </main>
    <footer class="flex jfsa">
    <?php
    include '../include/footer.php';
    ?>
    </footer>
</body>
</html>