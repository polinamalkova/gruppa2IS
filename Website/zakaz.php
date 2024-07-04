<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказ</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./img/logo.png">
</head>
<body>
    <header>
        <a href="index.php">
            <img src="./img/logo.png" alt="Логотип">
        </a>
        <div class="text">
        <a href="catalog.php">Каталог</a>
        <a href="geo.php">Где нас найти?</a>
        <a href="adm.php">Администратор</a>
        <a href="regi.php">Вход</a>
        </div>
    </header>
      <br>
    <p class="ab">Оформить заказ</p>
    <br>
    <div class="pol">
    <p id="notification"></p>
    <form id="feedbackForm">

            <input type="text" placeholder="Имя" id="name" required><br><br>
    
            <input type="email"  placeholder="Email"id="email" required><br><br>
    
            <input type="tel" placeholder="Номер телефона" id="phone" required><br><br>

            <button type="submit" class="submit-button">Оформить</button>
            
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
        notification.innerHTML = "Спасибо за заказ, с вами свяжется менеджер";
        notification.style.display = "block";

        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("message").value = "";
    });
</script>
</body>
</html>