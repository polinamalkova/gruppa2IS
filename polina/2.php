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
            <p class="hui">Выход</p>
        </a>
        <div id="modal" class="modal">
            <p>Теперь у вас есть возможность читать книги в подписке</p>
            <button onclick="closeModal()" class="cu-button">Закрыть</button>
        </div>

        <div class="y">
            <a href="3.php" class="yy">Промокод</a>
            <a href="2.php" class="yy">Продписка за 0₽</a>
            <a href="4.1.php" class="yy">Популярное</a>
        </div>
    </div>
    
<img class="jio" src="./img/rekl.png">
<script>
    function openModal() {
      document.getElementById('modal').style.display = 'block';
    }
    function closeModal() {
      document.getElementById('modal').style.display = 'none';
    }
  </script>
  </head>
  <body>
  
  <button onclick="openModal()" class="cu-buttoni">Попробовать бесплатно</button>
  
  <div id="modal" class="modal">
    
    <p>Теперь у вас есть возможность читать книги в подписке</p>
    <button onclick="closeModal()" class="nm" class="cu-button">Закрыть</button>
  </div>
  
<p class="kuy">Далее 399₽ в месяц.</p>
<p class="kyu">Продление автоматическое, отменить можно в любой момент</p>

<div class="fr" class="p">
    <div class="image-wrapper">
        <img src="./img/kal.png" alt="Image 1"class="img">
    </div>
    <div class="image-wrapper">
        <p class="q"><b>Дольше подписка — больше скидка</b></p>
        <p class="w">Для пользователей подписки действует растущая скидка на весь каталог, включая новинки — 10% с первого месяца, 20% с третьего месяца и 30% с шестого месяца подписки</p>
    </div>
    
</div>

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