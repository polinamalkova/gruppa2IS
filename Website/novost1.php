<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Start - новости</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./img/logo.png">
</head>
<body>
    <header>
        <a href="index1.php">
            <img src="./img/logo.png" alt="Логотип">
        </a>
        <div class="text">
            <a href="catalog1.php">Каталог</a>
            <a href="geo1.php">Где нас найти?</a>
            <a href="cab.php">Личный кабинет</a>
            <a href="index.php">Выход</a>
        </div>
    </header>
    <form id="content-form" enctype="multipart/form-data">
        <label for="image">Выберите картинку:</label>
        <input type="file" id="image" name="image" accept="image/*"><br><br>
        <textarea id="text" placeholder="Введите текст" name="text" required></textarea><br><br>
        <input type="submit" value="Добавить" class="submit-button">
    </form>
    <div id="display-container"></div>
    <br>
    <p class="ab">Новости</p>
    <br>
    <img src="./img/rek.png" alt="Реклама">
    <p><b>В Copy Start появились новые копировальные оборудования по низкой цене</b></p>
    <p class="nov1">Компания Copy Start продает принтеры, сканеры по низкой цене. Каждую неделю появляются новые оборудования.</p>
    <p class="nov">28.05.2024</p>
    <br>
    <p><b>Компания Copy Start отркывает свои двери для Вас!</b></p>
    <p class="nov1">Компания увеличивает свою долю на рынке продаж. Продает уникальное оборудование по низким ценам.</p>
    <p class="nov">28.05.2024</p>
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
        document.getElementById('content-form').addEventListener('submit', function(event) {
                event.preventDefault();
    
                var imageFile = document.getElementById('image').files[0];
                var text = document.getElementById('text').value;
    
                var reader = new FileReader();
                reader.onload = function(e) {
                    var imageUrl = e.target.result;
    
                    var imageElement = document.createElement('img');
                    imageElement.src = imageUrl;
    
                    var textElement = document.createElement('p');
                    textElement.textContent = text;
    
                    var displayContainer = document.getElementById('display-container');
                    displayContainer.innerHTML = '';
                    displayContainer.appendChild(imageElement);
                    displayContainer.appendChild(textElement);
                };
    
                reader.readAsDataURL(imageFile);
            });
    </script>
</body>
</html>