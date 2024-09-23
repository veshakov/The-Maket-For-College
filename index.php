<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="background">
        <div class="flex header1">
            <div class="flex wrap">
                <div class="flex col a-center a-logo">
                    <img class="logo" src="../logo/logotype.svg" alt="Лого">
                </div>
                <nav>
                    <a class="m-10-r" href="#">Камеры</a>
                    <a class="m-10-r" href="#">Пленка</a>
                    <a class="m-10-r" href="#">Аксессуары</a>
                    <a href="#">Поддержка</a>
                </nav>
            </div>
            <div class="icons flex wrap">
                <a href="#" class="flex col a-center m-30-r">
                    <img src="./media/search.svg" alt="Поиск">
                    <div class="underline"></div>
                </a>
                <a href="./public/login.php" class="flex col a-center m-30-r">
                    <img src="./media/user.svg" alt="Профиль">
                    <div class="underline"></div>
                </a>
                <a href="#" class="flex col a-center">
                    <img src="./media/bag.svg" alt="Корзина">
                    <div class="underline"></div>
                </a>
            </div>
        </div>
        <div class="header2 flex col a-center vh9">
            <div class="flex a-center h100">
                <div class="text flex col">
                    <h1 class="m-25-b">Сохраняйте лучшие моменты своей жизни с камерой моментальной печати Filmax</h1>
                    <h2 class="m-30-b">Официальный интернет-магазин легендарной фототехники и фото-аксессуаров от британского производителя</h2>
                    <div>
                        <a class="button a-center" href="./public/catalog.php">В каталог</a>
                    </div>
                </div>
                <img src="./media/photos.png">
            </div>
        </div>
    </header>

    <main class="flex col">
        <section class="p-15 flex a-center jfsa">
            <h1>Бестселлеры</h1>
            <div class="flex col a-center wrapper-see-all">
                <a href="#">Смотреть все</a>
                <div class="underline"></div>
            </div>
        </section>
        <section class="p-60 flex col a-center">
            <div class="flex">
                <div class="item m-30-r">
                    <img src="./media/Group1.jpg" alt="">
                    <p>Filmax Hello</p>
                    <p>5 900 ₽</p>
                </div>
                <div class="item m-30-r">
                    <img src="./media/Group2.jpg" alt="">
                    <p>Filmax Start</p>
                    <p>6 900 ₽</p>
                </div>
                <div class="item">
                    <img src="./media/Group3.jpg" alt="">
                    <p>Filmax Option</p>
                    <p>8 900 ₽</p>
                </div>
            </div>
        </section>
        <section class="section2 flex a-center">
            <div class="block flex col m-30-b">
                <h2>Большой выбор пленки Filmax</h2>
                <h3 class='m-15-b'>Плёнка Filmax обеспечивает чёткость и контрастность воспроизведения, яркость цвета и естественную передачу тона кожи. Выбирайте разный дизайн для разных событий</h3>
                <div>
                    <a class="button" href="./public/catalog.php">В каталог</a>
                </div>
            </div>
        </section>
        <section class="section3 background flex jfsa a-center">
            <div class="flex col">
                <img class="m-15-b" src="./media/10.jpg" alt="">
                <img class="m-15-b" src="./media/11.jpg" alt="">
                <img src="./media/12.jpg" alt="">
            </div>
            <div class="text flex col">
                <h1 class="m-90-b">Легендарная фототехника, которая позволит вам увидеть жизнь в новых ярких красках</h1>
                <h2 class="m-90-b">Наша жизнь состоит из моментов: моментов, которые могут изменить вашу жизнь, и повседневных, которые создают вашу жизнь. Поэтому мы создали камеры Filmax, чтобы чтобы вы могли прикоснуться к лучшим моментам вашей жизни.</h2>
                <div>
                    <a href="#" class="button">Узнать больше</a>
                </div>
            </div>
            <div class="flex col">
                <img class="m-15-b" src="./media/13.jpg" alt="">
                <img class="m-15-b" src="./media/14.jpg" alt="">
                <img src="./media/15.jpg" alt="">
            </div>
        </section>
        <section class="section4 flex col a-center">
            <div class="flex a-center">
                <img src="./media/16.jpg" alt="">
                <div class="block1 flex col">
                    <div class="flex m-15-b a-center">
                        <img src="./media/photo.svg" alt="">
                        <h2>Превосходное качество</h2>
                    </div>
                    <div class="flex m-15-b a-center">
                        <img src="./media/print.svg" alt="">
                        <h2>Моментальная печать</h2>
                    </div>
                    <div class="flex m-15-b a-center">
                        <img src="./media/pallete.svg" alt="">
                        <h2>Стильный дизайн</h2>
                    </div>
                    <div class="flex m-15-b a-center">
                        <img src="./media/video.svg" alt="">
                        <h2>Съемка видео</h2>
                    </div>
                    <div class="flex a-center">
                        <img src="./media/focus.svg" alt="">
                        <h2>Автофокус</h2>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="flex jfsa">
        <p>Filmax @ 2021 Все права защищены</p>
        <div class="flex">
            <img class="m-10-r" src="./media/facebook.svg" alt="">
            <img class="m-10-r" src="./media/vk.svg" alt="">
            <img src="./media/instagram.svg" alt="">
        </div>
        <a href="#">Политика конфидециальности</a>
    </footer>
</body>
</html>