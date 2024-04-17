<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>БиблиоМир</title>
    <link rel="stylesheet" href="./style/style.css">
    <script>
        function redirectToPage() {
            window.location.href = "1.html";
        }
        function searchDatabase() {
            // Здесь вы можете добавить код для связи с базой данных и выполнения поискового запроса
            // Например, использование AJAX для отправки запроса на сервер и получения результатов
            // или использование серверного языка программирования, такого как PHP или Python, для выполнения запроса к базе данных
        }
        function openIndexPage() {
    alert('До скорых встреч'); // Выводим уведомление с надписью "До скорых встреч"
    window.location.href = 'index.php'; // Открываем страницу index.php
}
function redirectToPage() {
  window.location.href = "10.1.php";
}
    </script>
</head>

<body>
    <a href="index.php">
        <img src="./img/logo.png">
    </a>
    <div class="header">
        <button class="custom-button" onclick="redirectToPage()">Каталог</button>
        <input type="text" class="search-box" placeholder="Искать на БиблиоМир">
        <button class="iii-button" onclick="searchDatabase()">Найти</button>

        <a href="index.php" onclick="openIndexPage(); return false;"style="text-decoration: none;">
            <img class="up-img" src="./img/1.png" alt="Выход" />
            <p class="hui">Выход</p>
        </a>

        <div class="y">
            <a href="3.php" class="yy">Промокод</a>
            <a href="2.php" class="yy">Подписка за 0₽</a>
            <a href="4.1.php" class="yy">Популярное</a>
        </div>

    </div>
    
<p class="kp"><b>О БиблиоМир</b></p>
<p class="ko">Сервис электронных книг в России</p>
<p class="jj">Компания БиблиоМир, основанная в 2024 году, сегодня является лидером на рынке лицензионных электронных </p>
<p class="jj">книг в России и странах СНГ.</p>
<br>
<p class="jj">Ассортимент ЛитРес насчитывает:</p>
<p class="jj">-28 электронных книг на русском </p>
<p class="jj">- 18 бесплатных книг</p>
<p class="jj">- 10 новых книг каждый месяц</p>
<br>
<p class="jj">Ежемесячная аудитория сервисов компании составляет 10 млн человек, которые читают более  100 тыс книг</p>
<p class="jj">в месяц.</p>
<p class="jj">Компания разработала  приложение для чтения электронных книг, в т.ч. «БиблиоМр» для мобильных платформ</p>
<p class="jj">iOS, Android, Windows 8 и Windows 10.</p>
<p class="jj">Приложение «БиблиоМр» расширяет возможности поиска книг. </p>
<p class="jj">Теперь электронную книгу можно найти по одному автору,названию и  букве.</p>
<p class="jj">БиблиоМир дает возможность бесплатно прочитать до 20% любой электронной книги.</p>
<br>
<p class="jj">Компания БиблиоМир сотрудничает с государственными библиотеками. «ЛитРес» – это самый большой</p> 
<p class="jj">библиотечный каталог современной литературы в электронном формате. Здесь представлено более 200 000 </p>
<p class="jj"> электронных и аудиокниг, среди которых – актуальные бестселлеры и классика, а также произведения на </p>
<p class="jj">иностранных языках. Важной особенностью сервиса является возможность чтения книг непосредственно на</p>
<p class="jj">мобильных устройствах читателей.</p>

<br>
<div class="footer">
    <img class="hj"  src="./img/par.png">
    <a href="5.1.php" class="ll">О компании</a>
    <a href="6.1.php" class="lll">Контакты </a>
    <a href="7.1.php" class="lll">Служба поддержки</a>
    <a href="8.1.php" class="lll">Политика обработки персональных данных</a>
    
    </div>

    <div class="tx">
        <a href="1.php">
            <a href="9.1.php" class="k">Согласие на получение рассылки</a>
            <a href="1.html" class="kk">БиблиоМир в соц.сетях</a>
        </a>
    </div>

    <div class="ik">
        <a href="https://vk.com">
            <img class="vvv" src="./img/vk.png" alt="Image 1"class="ih">
        </a>
        <a href="https://ok.ru">
            <img class="vvvv" src="./img/ok.png" alt="Image 1" class="ih">
        </a>
        <a href="https://web.telegram.org/">
            <img class="vvvv" src="./img/tg.png" alt="Image 1"class="ih">
        </a>
    </div>

</div>
</body>
</html>