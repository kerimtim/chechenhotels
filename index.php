<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected language from the form
    $selectedLang = $_POST['lang'];

    // Set the cookie with the language preference
    setcookie("lang", $selectedLang, time() + 60, "/"); // Cookie lasts for 1 minute

    // Redirect back to the same page or wherever you want
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Check if the language preference cookie is set
if(isset($_COOKIE['lang'])) {
    // Set the language to the one stored in the cookie
    $selectedLang = $_COOKIE['lang'];
} else {
    // Default to English if no language preference is set
    $selectedLang = 'en';
}

// Custom user cookie
$cookie_name = "user";
$cookie_value = "kerimtim";
//   setcookie($cookie_name, $cookie_value, time() + (1 * 5), "/"); // 86400 = 1 day     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Grid Layout</title>
    <style>
        body {
            margin: 0;
            /* background: #eee; */
            color: #555;
        }

        .wrapper {
            display: grid;
            min-height: 100vh;
            grid-template-areas: 
            'header header'
            'aside main'
            'footer footer';
            grid-template-columns: 300px 1fr;
            grid-template-rows: minmax(100px auto) 1fr 50px;
            gap: 15px;
        }

        header, aside, main, footer {
            background: #fff;
            padding: 15px;
            border: 1px solid #eee;
        }

        header {
            grid-area: header;
        }

        aside {
            grid-area: aside;
        }

        main {
            grid-area: main;
        }

        footer {
            grid-area: footer;
        }

        .midbar {
            margin-bottom: 1em;
        }

        ul, ol {
            padding-left: 1em;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: #0099f7;
        }

        a:hover {
            text-decoration: underline;
        }

        .branding {
            display: flex;
            align-items: center;
        }

        .branding .site-name h1 {
            margin-right: 10px;
            position: relative;
            left: -44px;
            font-size: 36px;
            top: -5px;
        }

        img {
            width: 100%;
        }
        
        .navmenu .menu ul li {
            float: left;
            padding: 10px;
        }
        
        .navmenu .menu ul li:first-child {
            padding-left: 0;
        }

    </style>
</head>
<body>

    <div class="wrapper">
        <header>
            <div class="midbar">
                <div class="branding">
                    <div class="logo">
                        <img src="images/Отели-в-Чечне-3.png" alt="Отели в Чечне">
                    </div>
                    <div class="site-name">
                        <h1><span style="color:#2B7338; font-family: 'Times New Roman', Times, serif;"><span style="color:#fff">C<span style="font-size: 30px;">h</span></span>echen</span><span style="color:#DA251D">Hotels</span></h1>
                    </div>
                </div>
            </div>
            <div class="navmenu">
                <nav class="menu">
                    <ul>
                        <li><a href="index.html">Главная</a></li>
                        <li><a href="#">Отели</a></li>
                        <li><a href="places.html">Места</a></li>
                        <li><a href="#">О Проекте</a></li>
                        <li><a href="#">Контакты</a></li>                     
                    </ul>
                </nav>                
            </div>        
        </header>
        <aside>
            <div class="widget">
                <nav class="menu">

                    <?php include 'regional_pref.php'; ?>

                    <p>Hello,
                    <?php
                        if(isset($_COOKIE[$cookie_name])) {
                            echo $_COOKIE[$cookie_name];
                        }              
                    ?>
                    </p>
                    <span>Список гостиниц Чечни по рейтингу</span>
                    <ol>
                        <li><a href="">Central City Hotel</a></li>
                        <li><a href="">Гостиница "Грозный Сити"</a></li>
                        <li><a href="">Gorodok</a></li>
                        <li><a href="">Thelocal Hotel Grozny</a></li>
                        <li><a href="">Континент</a></li>                     
                        <li><a href="">Dona Hotel</a></li>                     
                        <li><a href="">Отель Ламан Аз</a></li>                     
                        <li><a href="">Hotel Union Grozny</a></li>                     
                        <li><a href="">Nohcho Star</a></li>                     
                        <li><a href="">Гостиница Грозный</a></li>                     
                    </ol>
                </nav>                
            </div>
            <div class="widget">
                <img src="images/loader-mvac-car.gif" alt="">
            </div>
            <div class="widget">
                <span>Авторизация</span>
                <form action="">
                    <input type="text" placeholder="Имя пользователя">
                    <input type="text" placeholder="Пароль">
                    <input type="submit" value="Войти">
                </form>
                <p><a href="#">Забыл пароль?</a><br><a href="#">Еще не зарегистрирован?</a></p>
            </div>
        </aside>
        <main>
            <section id="about" style="background: #287377; color: #fff">
                <img src="images/Гостиницы-Чеченской-республики.svg" alt="Отели в Чечне">
                <h2>Отели в Чечне | Каталог Гостиниц в Грозном, Чеченская Республика</h2>
                <p>Добро пожаловать! Здесь вы найдете список отелей в Грозном и Чечне. Грозный - это столица Чечни. У нас есть отели на разные вкусы: с видом на красивые места, в центре города и в тихих местах. Все отели здесь предлагают хороший сервис и уют.</p>
                <p>Мы также представляем отели и гостиницы в разных местах Чеченской Республики. Есть отели на горных курортах, где можно отдохнуть, и гостевые дома в старых деревнях. Вы найдете разные места для отдыха в Чечне. Выберите место для проживания в нашем списке отелей и забронируйте прямо сейчас. Приезжайте и наслаждайтесь вашим отдыхом в этом красивом регионе!</p>
            </section>
    
            <section id="hotels" style="background: #E57373">
                <h1>Достопримечательности Чеченской Республики</h1>
                <img src="images/attractions/Сердце Чечни.jpg" alt="Мечеть Сердце Чечни">
                <img src="images/attractions/Мечеть имени Аймани Кадыровой.jpg" alt="Мечеть имени Аймани Кадыровой">
                <img src="images/attractions/Проспект им. Махмуда Эсамбаева.jpg" alt="Проспект им. Махмуда Эсамбаева">
                <img src="images/attractions/Мечеть Гордость мусульман им. Пророка Мухаммеда.jpg" alt="Мечеть Гордость мусульман им. Пророка Мухаммеда">
                <img src="images/attractions/Государственная галерея им. А.А. Кадырова.jpg" alt="Государственная галерея им. А.А. Кадырова">
                <img src="images/attractions/Лестница в небеса.jpg" alt="Лестница в небеса">
                <img src="images/attractions/Город мертвых Цой Педе.jpg" alt="Город мертвых Цой Педе">
                <img src="images/attractions/Хойский Историко-Архитектурный Комплекс.jpg" alt="Хойский Историко-Архитектурный Комплекс">
                <img src="images/attractions/Музей Ахмат-Хаджи Кадырова.jpg" alt="Музей Ахмат-Хаджи Кадырова">
                <img src="images/attractions/Автодром «Крепость Грозная».jpg" alt="Автодром «Крепость Грозная»">
                <img src="images/attractions/Ушкалойские башни близнецы.jpg" alt="Ушкалойские башни близнецы">
            </section>
    
            <section id="contact">
                <h2>Свяжитесь с нами</h2>
                <p>Если у вас есть вопросы или вы хотите забронировать номер, не стесняйтесь обращаться.</p>
                <!-- Форма обратной связи -->
                <form action="mailto:info@chechenhotels.ru" method="post" enctype="text/plain">
                    <table>
                        <tr>
                            <td><label for="name">Имя:</label></td>
                            <td><input type="text" id="name" name="name" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="email" id="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="message">Вопрос:</label></td>
                            <td><textarea id="message" name="message" required></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type="submit">Отправить</button></td>
                        </tr>
                    </table>
                </form>
            </section>
        </main>
        <footer>
            <p>&copy; 2023 Отели Чечни. Все права защищены.</p>
        </footer>
    </div>
    
</body>
</html>