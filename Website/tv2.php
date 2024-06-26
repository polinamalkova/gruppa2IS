<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epson L8050</title>
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
    <p class="ab"><b>Принтер струйный Epson L8050 цветная печать, A4, цвет черный</b></p>
    <br>
    <div class="product">
        <img src="./img/2.png" alt="Товар">
        <div class="product-info">
            <p><b>Коротко о товаре</b></p>
            <p>Тип устройства: принтер</p>
            <p>Тип печати: струйный</p>
            <p>Технология печати: пьезоэлектрическая струйная</p>
            <p>Цветность печати: цветная</p>
        </div>
    </div>
    <p>О товаре</p>
    <p>Фабрика печати Epson L8050 — это 6-цветный фотопринтер со встроенными емкостями для</p>
    <p>чернил вместо картриджей, специально созданный для тех, кому необходима экономичная</p>
    <p>беспроводная печать фотографий и CD/DVD дисков.</p>
    <p>Возможность беспроводного подключения по Wi-Fi позволит сэкономить место на рабочем столе</p>
    <p>— принтер можно установить в любом удобном месте и отправлять задания на печать из любого</p>
    <p>уголка квартиры или офиса</p>
    <br>
    <p>Цена: 20 199 руб</p>
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