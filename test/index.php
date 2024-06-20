<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./img/log.png">
</head>
<body>
<p onclick="window.location.href='./rec.php'" class="ab" >Регистрация</p>
    <div class="pol">
    <form id="loginForm" action="rec.php" method="post">
        <input type="text" id="name" name="name" placeholder="Имя" required><br><br>

        <input type="text" id="surname" name="surname" placeholder="Фамилия" required><br><br>

        <input type="text" id="email" name="email" placeholder="Почта" required><br><br>

        <input type="text" id="phone" name="phone" placeholder="Номер телефона" required><br><br>

        <input type="text" id="login" name="login" placeholder="Придумайте логин" required><br><br>

        <input type="text" id="password" name="password" placeholder="Придумайте пароль" required><br><br>
        
        <br>
        <button type="submit" onclick="window.location.href='./1.php'" class="knop">Войти</button>

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
</body>
</html>
