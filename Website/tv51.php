<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HP DeskJet 2320</title>
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
    <p class="ab"><b>МФУ лазерный HP DeskJet 2320 цветная печать, A4, цвет белый</b></p>
    <br>
    <div class="product">
        <img src="./img/5.png" alt="Товар">
        <div class="product-info">
            <p><b>Коротко о товаре</b></p>
            <p>Тип устройства: МФУ</p>
            <p>Тип печати: струйный</p>
            <p>Технология печати: термическая струйнаяя</p>
            <p>Цветность печати: цветная</p>
        </div>
    </div>
    <p>О товаре</p>
    <p>МФУ струйный HP DeskJet 2320, максимальный формат A4, скорость печати А4: монохромная до</p>
    <p>7.5стр/мин, цветная до 5.5стр/мин (7WN42B)</p>
    <br>
    <p>Цена: 6262 руб</p>
    <a href="korzina5.php">
        <img src="./img/k.png" alt="Корзина">
    </a>
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