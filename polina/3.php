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
        function openWindow() {
            var width = 700;
            var height = 500;
            var left = (window.innerWidth - width) / 2;
            var top = (window.innerHeight - height) / 2;
            window.open("1.html", "_blank", "width=" + width + ",height=" + height + ",left=" + left + ",top=" + top);
        }
        function openModal() {
      document.getElementById('modal').style.display = 'block';
    }
    function closeModal() {
      document.getElementById('modal').style.display = 'none';
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
            <p style="color: black; margin-left: 1045px; margin-top: -30px;">Выход</p>
        </a>

        <div class="y">
            <a href="3.php" class="yy"></a>Промокод</a>
            <a href="2.php" class="yy">Продписка за 0₽</a>
            <a href="4.1.php" class="yy">Популярное</a>
        </div>
    </div>

  <body>

    <div  class="kmlk">
        <div class="mkmk">
        <label class="yyy" for="promo">Введите промокод:</label>
        <center><input type="text" id="promo" name="promo" class="w"></center>
        <center><button onclick="openModal()" class="cu-button">Применить</button></center>
        </div>
      </div>
  
  <div id="modal" class="modal">

    <center><p>Промокод успешно применен</p></center>
    <button onclick="closeModal()" style="margin-left: 190px; margin-top: 10px;display: block;" class="cu-button">Закрыть</button>
  </div>

  <div  class="kkkkl" class="footer">
    <img class="hj" src="./img/par.png">
    <a href="5.1.php" class="ll">О компании</a>
    <a href="6.1.php" class="lll">Контакты </a>
    <a href="7.1.php" class="lll">Служба поддержки</a>
    <a href="8.1.php" class="lll">Политика обработки персональных данных</a>
    
    </div>

    <div class="tx">
        <a href="1.php">
            <a href="9.1.php" class="kml">Согласие на получение рассылки</a>
            <a href="1.html" class="kk">БиблиоМир в соц.сетях</a>
        </a>
    </div>

    <div class="ik">
        <a href="https://vk.com">
            <img class="vvvl" src="./img/vk.png" alt="Image 1"class="ih">
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