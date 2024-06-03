<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Start - каталог</title>
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
    <p class="ab">Каталог</p>
    <br>
    <div class="filter">
        <select class="fil" id="category" onchange="фильтроватьПоКатегории(this.value)">
            <option class="fil"  value="all">Все категории</option>
            <option class="fil"  value="electronics">Лазерные</option>
            <option class="fil"  value="games">Струйные</option>
            <option class="fil"  value="accessories">Термопринтеры</option>
        </select>
    </div>
    <div class="карточка-товара" data-категория="games">
    <div class="tv">
    <img src="./img/1.png" alt="товар" onclick="openModal(this)">
    <a href="tv1.php">Принтер струйный Canon Pixma G540 цветная печать, A4, цвет черный</a>
    <div class="tex1">
    <br>
    <p>26 999 руб</p>
    <div class="ka">
<a href="korzina.html" class="cart">
    <img src="./img/k.png" alt="Корзина">
</a>
</div>
</div>
</div>

</div>
<br>
<div class="карточка-товара" data-категория="games">
<div class="tv">
    <img src="./img/2.png" alt="товар" onclick="openModal(this)">
    <a href="tv2.php">Принтер струйный Epson L8050 цветная печать, A4, цвет черный</a>
    <div class="tex2">
    <br>
    <p>20 199 руб</p>
    <div class="k">
    <a href="korzina.html" class="cart">
        <img src="./img/k.png" alt="Корзина">
    </a>
</div>
</div>
</div>

</div>
<br>
<div class="карточка-товара" data-категория="games">
<div class="tv">
    <img src="./img/3.png" alt="товар" onclick="openModal(this)">
    <a href="tv3.php">МФУ струйный Epson L3250 цветная печать, A4, цвет черный</a>
    <div class="tex3">
    <br>
    <p>5999 руб</p>
    <div class="kak">
    <a href="korzina.html" class="cart">
        <img src="./img/k.png" alt="Корзина">
    </a>
</div>
</div>
</div>

</div>
<br>
<div class="карточка-товара" data-категория="electronics">
<div class="tv">
    <img src="./img/4.png" alt="товар" onclick="openModal(this)">
    <a href="tv4.php">МФУ лазерный Pantum P2500 цветная печать, A4, цвет черный</a>
    <div class="tex4">
    <br>
    <p>8351 руб</p>
    <div class="kak">
    <a href="korzina.html" class="cart">
        <img src="./img/k.png" alt="Корзина">
    </a>
</div>
</div>
</div>

</div>
<br>
<div class="карточка-товара" data-категория="electronics">
<div class="tv">
    <img src="./img/5.png" alt="товар" onclick="openModal(this)">
    <a href="tv5.php">МФУ лазерный HP DeskJet 2320 цветная печать, A4, цвет белый</a>
    <div class="tex5">
    <br>
    <p>6262 руб</p>
    <div class="kak">
    <a href="korzina.html" class="cart">
        <img src="./img/k.png" alt="Корзина">
    </a>
</div>
</div>
</div>
</div>
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
<div id="modal">
    <div id="modal-content">
        <span id="close-button" onclick="closeModal()">&times;</span>
        <img id="modal-image" src="" alt="Картинка">
    </div>
</div>
<script>
    var cartLinks = document.getElementsByClassName('cart');
    for (var i = 0; i < cartLinks.length; i++) {
        cartLinks[i].addEventListener('click', function(event) {
            event.preventDefault();
            alert('Сначала войдите в систему');
        });
    }
    function openModal(image) {
            var modal = document.getElementById('modal');
            var modalImage = document.getElementById('modal-image');

            modal.style.display = 'flex';
            modalImage.src = image.src;
        }

        function closeModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }

        function фильтроватьПоКатегории(категория) {
            // Получить все карточки товаров
            let карточки = document.querySelectorAll('.карточка-товара');
            
            // Показать или скрыть карточки в зависимости от выбранной категории
            карточки.forEach(карточка => {
                if (категория === 'all' || карточка.dataset.категория === категория) {
                    карточка.style.display = 'block';
                } else {
                    карточка.style.display = 'none';
                }
            });
        }
</script>
</body>
</html>