<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantum P2500</title>
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
    <p class="ab"><b>МФУ лазерный Pantum P2500 цветная печать, A4, цвет черный</b></p>
    <br>
    <div class="product">
        <img src="./img/4.png" alt="Товар">
        <div class="product-info">
            <p><b>Коротко о товаре</b></p>
            <p>Тип устройства: принтер</p>
            <p>Тип печати: лазерный</p>
            <p>Технология печати: лазерная</p>
            <p>Цветность печати: черно-белая</p>
        </div>
    </div>
    <p>О товаре</p>
    <p>Тип товара: Принтер / Плоттер; Серия: P; Модель: P2500; Тип оборудования: Принтер;</p>
    <p>Позиционирование: Печать документов; Технология печати: Лазерная; Количество</p>
    <p>устанавливаемых картриджей: 1; Кол-во цветов: 1; USB: Есть; Формат печатных носителей: A4;</p>
    <p>Разрешение ч/б печати: 1200x1200 dpi; Максимальная скорость монохромной печати (стр/мин (А4): 22;</p>
    <br>
    <p>Цена: 8351 руб</p>
    <a href="korzina.html" class="cart">
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
        var cartLinks = document.getElementsByClassName('cart');
        for (var i = 0; i < cartLinks.length; i++) {
            cartLinks[i].addEventListener('click', function(event) {
                event.preventDefault();
                alert('Сначала войдите в систему');
            });
        }
    </script>
</body>
</html>