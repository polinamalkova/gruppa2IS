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
    <b><p class="text3">Реквизиты ООО «Управдом»</p></b>
    <p class="obtext">ООО «Управдом»</p>
    <p class="obtext">Юридический адрес: 614016, Пермский край, Пермь г, Краснофлотская ул, дом № 28</p>
    <p class="obtext">ИНН 590 416 35 20</p>
    <p class="obtext">КПП 590 401 001</p>
    <p class="obtext">ОГРН: 1075904007508</p>
    <p class="obtext">ОКПО: 80097261</p>
    <p class="obtext">Расчетный счет: 40702810149090174341</p>
    <p class="obtext">Банк: Волго-Вятский БАНК ПАО СБЕРБАНК</p>
    <p class="obtext">БИК: 042202603</p>
    <p class="obtext">Корр. счет: 30101810900000000603</a></p>
    <p class="obtext">E-mail:<a href="mailto:ooo.upravdom@list.ru"> ooo.upravdom@list.ru</a></p>
    <br>
    <p class="obtext">Дата обновления информации на странице: 20 июня 2024 года.</p>
    <br>
    <br>
    <br>
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
