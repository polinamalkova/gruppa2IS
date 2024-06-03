<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
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
    <p class="ab">Личный кабинет</p>
    <?php
    // Получаем логин пользователя из сессии
    require_once("database.php");
    $usernamee = $_SESSION['login'];

    // Запрос к базе данных для получения данных пользователя (логин, e-mail и имя)
    $sql = "SELECT login, email, name FROM user WHERE login='$usernamee'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Если данные пользователя найдены, выводим их
        while($row = $result->fetch_assoc()) {
            $usernamee = $row['login'];
            $email = $row['email'];
            $name = $row['name'];
        }
    } else {
        echo "Данные пользователя не найдены";
    }
    
    ?>

<div class="fdfd">
<form id="image-form" enctype="multipart/form-data">
        <label for="image">Выберите изображение:</label>
        <input type="file" id="image" name="image" accept="image/*">
        <br>
        <br>
        <br>
        <button type="submit" class="submit-button">Загрузить</button>
    </form>
    <div id="image-container"></div>
    <?php echo "<p>Логин: $usernamee</p>"; ?> 
    <?php echo "<p>Email: $email</p>"; ?> 
    <?php echo "<p>Имя: $name</p>"; ?> 

</div>
<br>
<br>
<br>
<br>
<br>
<br>
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
        document.getElementById('image-form').addEventListener('submit', function(event) {
            event.preventDefault();

            var imageFile = document.getElementById('image').files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var imageElement = document.createElement('img');
                imageElement.src = e.target.result;

                var imageContainer = document.getElementById('image-container');
                imageContainer.innerHTML = '';
                imageContainer.appendChild(imageElement);
            };

            reader.readAsDataURL(imageFile);
        });
    </script>
</body>
</html>