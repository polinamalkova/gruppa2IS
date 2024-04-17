
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
            <a href="2.php" class="yy">Продписка за 0₽</a>
            <a href="4.1.php" class="yy">Популярное</a>
        </div>
    </div>
    </div>


<div class="inline-elements">
    <p class="yyy">Топ-книг в подписке</p>
</div>

<div class="p">
    <div class="image-wrapper">
        <img src="./img/6k.png" alt="Image 1" class="img">
        <div class="image-caption">Хлопок одной ладонью</div>
        <div class="pp" class="image-caption">Николай Кукушкин</div>
        <a href="1.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/7k.png" alt="Image 1" class="img">
        <div class="image-caption">К себе нежно</div>
        <div class="pp"  class="image-caption">Ольга Примаченко</div>
        <a href="1.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/8k.png" alt="Image 3" class="img">
        <div class="image-caption">Теория невероятности</div>
        <div class="pp" >Татьяна Мужицкая</div>
        <a href="1.php" class="oo" >Читать</a>
    </div>
</div>

<div style="margin-top: 20px;" class="p">
    <div class="image-wrapper">
        <img src="./img/9k.png" alt="Image 1"class="img">
        <div class="image-caption">Трать</div>
        <div class="hhhh" >Билл Перкинс</div>
        <a href="1.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/10k.png" alt="Image 1"class="img">
        <div class="image-caption">Дела минувшие</div>
        <div class="hhh">Николай Свечин</div>
        <a href="1.php" class="oo" >Читать</a>
    </div>
</div> 


<div class="footer">
<img class="hj" src="./img/par.png">
<a href="5.1.php" class="ll">О компании</a>
<a href="6.1.php" class="lll">Контакты </a>
<a href="7.1.php" class="lll">Служба поддержки</a>
<a href="8.1.php" class="lll">Политика обработки персональных данных</a>

</div>

<div class="tx">
    <a href="1.html">
        <a href="9.1.php" class="k">Согласие на получение рассылки</a>
        <a href="1.php" class="kk">БиблиоМир в соц.сетях</a>
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
