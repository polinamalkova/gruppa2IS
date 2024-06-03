<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
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
    <p class="ab1">Администратор</p>
    <form action="index1.php" method="post">
        <input type="text" placeholder="Логин" id="login" name="login" required><br><br>
        <input type="password" placeholder="Пароль" id="password" name="password" required><br><br>
        <input type="submit" value="Войти" class="submit-button">
    </form>
    <br>
    <br>
    <br>
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
        document.querySelector('form').addEventListener('submit', function(event) {
            var login = document.getElementById('login').value;
            var password = document.getElementById('password').value;
            if (login !== 'админ' || password !== 'admin1234') {
                event.preventDefault();
                alert('Неправильные данные. Пожалуйста, попробуйте снова.');
            }
        });
    </script>
</body>
</html>
