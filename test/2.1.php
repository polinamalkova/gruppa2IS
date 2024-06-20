<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управдом</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./img/log.png">
</head>
<body>
    <div class="blok">
        <img class="log" src="./img/logo.png">
        <div class="button-container">
        <div class="dropdown">
        <button type="submit" onclick="openPage('1.php')" class="knop1" class="dropbtn">О компании</button>
        <div class="dropdown-content">
        <a href="2.1.php">Информация о компании</a>
        <a href="2.2.php">Контакты</a>
        <a href="2.3.php">Расписание работы</a>
        <a href="yv.doc" download>Услуги</a>
    </div>
</div>
<div class="dropdown">
        <button type="submit" onclick="openPage('1.php')" class="knop1" class="dropbtn">Документы</button>
        <div class="dropdown-content">
        <a href="3.1.php">Реквизиты ООО "Управдом"</a>
        <a href="3.2.php" target="_blank">Свидетельство о государственной регистрации ООО "Управдом"</a>
        <a href="3.3.php">Свидетельство о постановке на учёт в налоговом органе</a>
        <a href="yv.doc" download>Уведомление о возможности применения УСН</a>
    </div>
</div>
<div class="dropdown">
        <button type="submit" onclick="openPage('1.php')" class="knop1" class="dropbtn">Методичка</button>
        <div class="dropdown-content">
        <a href="4.1.php">Как общаться с жильцами по телефону?</a>
        <a href="4.2.php">Как работать в информационной системе 1С?</a>
        <a href="4.3.php">Какие обязанности администратора?</a>
        <a href="4.4.php">Какие обязанности бухгалтера?</a>
        <a href="4.5.php">Какие обязанности генерального директора?</a>
        <a href="4.6.php">Какие обязанности разнорабочих сотрудников?</a>
    </div>
</div>
        <button type="submit" onclick="openPage('avtor.php')" class="knop1">Выход</button>
    </div>
    <b><p class="text3">О компании</p></b>
    <p class="obtext">Фирменное наименование юридического лица: Общество с ограниченной ответственностью «Управдом»</p>
    <br>
    <p class="obtext">Краткое наименование: ООО «Управдом»</p>
    <br>
    <p class="obtext">Генеральный директор – ЗЕЛЕНИН СЕРГЕЙ ВАДИМОВИЧ</p>
    <br>
    <p class="obtext">Место регистрации юридического лица: 614016, г. Пермь, улица Краснофлотская, дом 28</p>
    <p class="obtext">Фактический адрес юридического лица: 614016, г. Пермь, улица Краснофлотская, дом 28</p>
    <br>
    <p class="obtext">ИНН 590 416 35 20</p>
    <p class="obtext">КПП 590 401 001</p>
    <br>
    <p class="obtext">Реквизиты свидетельства о государственной регистрации в качестве юридического лица: основной государственный</p>
    <p class="obtext"> регистрационный номер: ОГРН 1075904007508 Наименование органа, принявшего решение о регистрации:</p>
    <p class="obtext"> Инспекция ФНС по Свердловскому району г. Пермь 5904</p>
    <br>
    <p class="obtext">Контактные телефоны:</p>
    <p class="obtext">тел./факс +7 (342) 241 36 09, +7 (342) 241 41 33</p>
    <p class="obtext">Официальные сайты в сети Интернет:<a href="1.php"> www.upravdom59.ru</a></p>
    <p class="obtext">Адрес электронной почты:<a href="mailto:ooo.upravdom@list.ru"> ooo.upravdom@list.ru</a></p>
    <br>
    <p class="obtext">Режим работы управляющей организации:</p>
    <p class="obtext">Понедельник – 08.30. – 17.30 ч.</p>
    <p class="obtext">Вторник 08.30. – 17.30 ч.</p>
    <p class="obtext">Среда 08.30. – 17.30 ч.</p>
    <p class="obtext">Четверг 08.30. – 17.30 ч.</p>
    <p class="obtext">Пятница 08.30 – 16.30 ч.</p>
    <p class="obtext">Суббота и воскресенье – выходные</p>
    <p class="obtext">Обед – 12.30 – 13.30 ч.</p>
    <br>
    <p class="obtext">Часы личного приема граждан:</p>
    <br>
    <p class="obtext">Часы работы диспетчерских и аварийных служб: КРУГЛОСУТОЧНО</p>
    <br>
    <p class="obtext">Лицензия</p>
    <a href="./img/li.jpg" target="_blank">
    <img src="./img/li.jpg" alt="Первая картинка" width="200" height="250">
  </a>
  <a href="./img/li2.jpg" target="_blank">
    <img src="./img/li2.jpg" alt="Вторая картинка" width="200" height="250">
  </a>
    <footer>
        <p class="text2">УК “Управдом” Пермь</p>
    </footer>
    </div>
</body>
<script>
        function openPage(page) {
            window.location.href = page;
        }
    </script>
</html>
