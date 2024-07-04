<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Start - Где нас найти?</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./img/logo.png">
</head>
<body>
    <header>
        <a href="index2.php">
            <img src="./img/logo.png" alt="Логотип">
        </a>
        <div class="text">
        <a href="catalog2.php">Каталог</a>
        <a href="geo2.php">Где нас найти?</a>
        <a href="cab.php">Личный кабинет</a>
        <a href="index.php">Выход</a>
        </div>
    </header>
    <br>
    <p class="ab">Где нас найти?</p>
    <div class="text">
        <p>Мы находимся по адресу г. Пермь, ул. Пушкина, дом 107А</p>
        <br>
        <p>Наши контакты:</p>
        <p>+7 (342) 244-89-21</p>
        <p>+7 (342) 236-28-03</p>
    </div>
    <div id="map"></div>
    <script>
        function initMap() {
          // Создание объекта карты
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 55.751244, lng: 37.618423}, // Координаты центра карты
            zoom: 10 // Масштаб карты
          });
        }
      </script>
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac77671e13bc9db1b58fcbd1aeeb0879fdc62dfba5af72bc774fa87955848289d&amp;width=837&amp;height=596&amp;lang=ru_RU&amp;scroll=true"></script>
      <br>
      <div class="ab">
        <p class="ab">Обратная связь</p>
    </div>

    <div class="pol">
    <p id="notification"></p>
    <form id="feedbackForm">
            
            <input type="text" placeholder="Имя" id="name" required><br><br>
    
            <input type="email"  placeholder="Email"id="email" required><br><br>
    
            <input type="tel" placeholder="Номер телефона" id="phone" required><br><br>
    
            <textarea id="message" placeholder="Сообщение" rows="4" required></textarea><br><br>

            <button type="submit" class="submit-button">Отправить</button>
            
        </form>
    </div>
    <br>
    <footer>
        <p>Copy Start - магазин продажи</p>
        <p>копировального оборудования</p>
        <br>
        <div class="par">
        <div class="foo">
        <p>г.Пермь, ул. Пушкина, дом 107а</p>
        <p>+7 (342) 244-89-21</p>
        <p>+7 (342) 236-28-03</p>
    </div>
    <div class="fo">
        <p>Наши соц. сети</p>
        <img src="./img/set.png" alt="Соц.сети">
    </div>
    </div>
    </footer>
    <script>
           document.getElementById("feedbackForm").addEventListener("submit", function(event) {
        event.preventDefault();

        var notification = document.getElementById("notification");
        notification.innerHTML = "Спасибо за отзыв, с вами свяжется менеджер";
        notification.style.display = "block";

        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("message").value = "";
    });
     </script>
</body>
</html>