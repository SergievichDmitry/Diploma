<?php
    require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cart-style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main_page.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Корзина</title>
</head>
<body>

    <header>
        <section class="header_top">
            <input class="search" type="text" placeholder="Поиск по сайту" required="">
            <a href="admin/admin.php" class="link">Новое объявление</a>
                <?php if( isset($_SESSION['logged_user']) ) : ?>
                            Добрый день, <?php echo $_SESSION['logged_user']->login; ?>! <br>
                            <a href="/shop/logout.php" class="link">Выйти</a>
                        <?php else : ?>
                            Вы не авторизованы! <br>
                            <a href="/shop/login.php" class="link">Авторизоваться</a><br>
                            <a href="/shop/signup.php" class="link">Регистрация</a>
                        <?php endif; ?>
        </section>

        <section class="header_bottom">
            <H1>TWB - Trading Without Borders</H1>
            <H3 class = "num_items">Объявлений: </H3>
            <input class="sort" type="button" onclick="" value="По дате">
            <a href="later.php" class="link">Желания</a><br>
            <a href="cart.php" class="link">Корзина</a>
        </section>
    </header>

    <main>
        <section class="page">
            <section class="menu_side">
                <ul class="nav">
                    <li class="main-menu">
                        <a href="index.php">Главное меню</a>
                    </li>
                    <li class="catalogue">
                        <a href>Каталог</a>
                        <a href>Обувь</a>
                        <a href>Одежда</a>
                        <a href>Аксессуары</a>
                    </li>
                    <li class="blog">
                        <a href>Блог</a>
                        <a href>Item 1</a>
                        <a href>Item 2</a>
                        <a href>Item 3</a>
                    </li>
                    <li class="settings">
                        <a href>Настройки</a>
                    </li>
                </ul>
            </section>

            <section class="goods" link="red" vlink="#cecece">
                <div class="main-cart"></div>
                <div class="email-field">
                    <p>Имя: <input type="text" id="ename"></p>
                    <p>Email: <input type="text" id="email"></p>
                    <p>Телефон: <input type="text" id="ephone"></p>
                    <p>Комментарий: <input type="text" id="ecomment"></p>
                    <p><button class="send-email">Заказать</button></p>
                </div>
            </section>
        </section>
    </main>

    <footer>Designed and created by Dmitry Sergievich, 2020. TWB trade mark.</footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/cart.js"></script>
</body>
</html>