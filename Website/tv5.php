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