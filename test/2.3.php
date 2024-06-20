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
        <a href="3.2.php">Свидетельство о государственной регистрации ООО "Управдом"</a>
        <a href="3.3.php">Свидетельство о постановке на учёт в налоговом органе</a>
        <a href="3.4.php">Уведомление о возможности применения УСН</a>
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
    <b><p class="text3">Расписание работы ООО «Управдом»</p></b>
    <p class="obtext">Режим работы:</p>
    <p class="obtext">понедельник – четверг с 8-30 до 17-30</p>
    <p class="obtext">пятница – с 8-30 до 16-30</p>
    <p class="obtext">обед – 12-30 до 13-30</p>
    <p class="obtext">телефон: 241-41-33, 241-36-09 (бухгалтерия)</p>
    <br>
    <p class="obtext">Прием бухгалтерии:</p>
    <p class="obtext">вторник – с 09-00 до 12-00</p>
    <p class="obtext">четверг – с 14-00 до 17-00</p>
    <br>
    <p class="obtext">Приём аварийных заявок:</p>
    <p class="obtext">будние дни – с 08-30 до 17-30 по телефону 241-41-33</p>
    <p class="obtext">будние дни с 17-00 до 08-30, выходные и праздничные дни: МКД Краснофлотская,</p>
    <p class="obtext">28, Кл. Цеткин, 25а, Серпуховская, 6 – 236-91-20, 290-71-04</p>
    <p class="obtext">МКД Менжинского, 34, Цимлянская, 19Б, Строителей, 2/3 – 288-34-55, 8-922-24-56-245</p>
    <br>
    <p class="obtext">Выдача справок производится:</p>
    <p class="obtext">понедельник и вторник – с 08.30 до 17.30</p>
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
