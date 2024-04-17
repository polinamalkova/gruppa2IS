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
            <a href="4.1.php" class="yy" id="popularLink">Популярное</a>
        </div>

    </div>
    <script>

function showNotification(event) {
  event.preventDefault(); // Отменяем стандартное действие ссылки
  
  alert("Извините, пока что у нас нет таких книг на сайте.");
}
    </script>


<div class="iml">
    <p class="cvcv"><b>Каталог</b></p>
    <p class="klkl">Легкое чтение</p>
    <a href="11.1.php" class="qwerty">Детектив</a>
    <a href="12.1.php" class="qwerty">Фантстика</a>
    <a href="13.1.php" class="qwerty">Любовные романы</a>
</div>
<br>
<div class="iml">
    <p class="klkl">Знания и навыки</p>
    <a href="14.1.php" class="qwerty">Саморазвитие</a>
    <a href="1.html" class="qwerty" onclick="showNotification(event)">Культура и исскуство</a>
    <a href="16.1.php" class="qwerty">Научная литература</a>
</div>
<br>
<div class="iml">
    <p class="klkl">Спорт, красота</p>
    <a href="1.html" class="qwerty" onclick="showNotification(event)">Красота</a>
    <a href="1.html" class="qwerty" onclick="showNotification(event)">Спорт</a>
    <a href="17.1.php" class="qwerty">Медицина и здоровье</a>
</div>
<br>
<div class="iml">
    <p class="klkl">Хобби,досуг</p>
    <a href="1.html" class="qwerty" onclick="showNotification(event)">Охота</a>
    <a href="1.html" class="qwerty" onclick="showNotification(event)">Отдых, туризм</a>
    <a href="18.1.php" class="qwerty">Мода и стиль</a>
</div>
<br>
<div class="iml">
    <p class="klkl">Серьезное чтение</p>
    <a href="19.1.php" class="qwerty">Современная проза</a>
    <a href="1.html" class="qwerty" onclick="showNotification(event)">Классическая литература</a>
    <a href="1.html" class="qwerty" onclick="showNotification(event)">Стихи, поэзия</a>
</div>
<br>
<div class="iml">
    <p class="klkl">Психология и мотивация</p>
    <a href="20.1.php" class="qwerty">Книги по психологии</a>
    <a href="20.1.php"class="qwerty">Духовная литература</a>
    <a href="21.1.php" class="qwerty">Саморазвитие</a>
</div>

<div class="footer">
<img class="hj" src="./img/par.png">
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
