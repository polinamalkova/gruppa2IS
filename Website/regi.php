<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
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
    <p onlick="window.location.href=' ./rec.php" class="ab">Регистрация</p>
    <div class="pol">
    <form id="loginForm" action="rec.php" method="post">
        <input type="text" id="name" name="name" placeholder="Имя" require><br><br>

        <input type="text" id="famlia" name="famlia" placeholder="Фамилия" require><br><br>

        <input type="text" id="phone" name="phone" placeholder="Номер телефона" require><br><br>

        <input type="text" id="email" name="email" placeholder="Почта" require><br><br>

        <input type="text" id="login" name="login" placeholder="Придумайте логин" require><br><br>

        <input type="text" id="password" name="password" placeholder="Придумайте пароль" require><br><br>
        
        <br>
        <button type="submit" onlick="window.location.href=' ./cab.php'" style="background-color: black; font-size: 20px; color: white; margin-left: 50px">Зарегистрироваться</button>

</form>
</div>
<br>
<label>
    <input type="checkbox" id="checkbox">
        Я согласен(а) с правилами Пользовательского соглашения и с Условиями получения, хранения и использования персональных данных
    </label> 
    <br>
<a href="avtor.php">Уже есть аккаунт</a>
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
</body>
</html>