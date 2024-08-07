<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epson L3250</title>
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
    <p class="ab"><b>МФУ струйный Epson L3250 цветная печать, A4, цвет черный</b></p>
    <br>
    <div class="product">
        <img src="./img/3.png" alt="Товар">
        <div class="product-info">
            <p><b>Коротко о товаре</b></p>
            <p>Тип устройства: МФУ</p>
            <p>Тип печати: струйный</p>
            <p>Технология печати: пьезоэлектрическая струйная</p>
            <p>Цветность печати: цветная</p>
        </div>
    </div>
    <p>О товаре</p>
    <p>Струйное МФУ Epson L3250 черного цвета подходит для печати текста и фото на бумаге формата</p>
    <p>А4 при скорости до 33 стр/мин. Устройство оснащено планшетным сканером с рабочей областью</p>
    <p>297х216 мм. Максимальное разрешение черно-белой печати — 1200х2400 т/д, разрешение</p>
    <p>фотопечати — 5760х1440 т/д. Для подачи бумаги есть лоток на 100 листов.</p>
    <p>Встроенный сканер может сканировать до 20 страниц в минуту в разрешении 1200х2400 т/д.</p>
    <br>
    <p>Цена: 5999 руб</p>
    <a href="korzina3.php">
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