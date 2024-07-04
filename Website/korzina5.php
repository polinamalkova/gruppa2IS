<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Start</title>
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
    <p class="ab">Корзина</p>
    <img src="./img/5.png" alt="товар">
    <p>МФУ лазерный HP DeskJet 2320 цветная печать, A4, цвет белый</p>
    <p id="goodbye">6262 руб.</p>
<p>Изменить количество:</p>
<input   type="number" id="количество" min="1" value="1" oninput="изменитьКоличество()">
  <p id="общаяСтоимость">Общая стоимость: 6262 руб</p>
  <b><a href="zakaz.php" style="color: black; text-decoration: none;">Оформить заказ</a></b>
   <br>
   <a href="pust.php" style="color: red; text-decoration: none;">Удалить</a>
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
    function изменитьКоличество() {
      let количество = document.getElementById('количество').value;
      let стоимость = 6262; 
      document.getElementById('общаяСтоимость').innerText = 'Общая стоимость: ' + (количество * стоимость) + ' руб.';
    }
</script>
</body>
</html>