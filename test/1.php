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
    <p class="text">Приветствуем Вас в нашей компании!</p>
    <p class="obtext">Общество с ограниченной ответственностью «Управдом» осуществляет свою деятельность в сфере жилищно -</p>
    <p class="obtext">коммунального хозяйства. ООО «Управдом» в качестве основных обязательств перед  собственниками многоквартирных</p>
    <p class="obtext">домов видит в создании безопасных условий проживания и постоянному повышению уровня комфорта жителей в</p>
    <p class="obtext">управляемом жилищном фонде. В настоящее время специалисты ООО «Управдом» обслуживают 11 жилых</p>
    <p class="obtext">многоквартирных домов по управлению, техническому обслуживанию, содержанию и ремонту зданий, жилой</p>
    <p class="obtext">площадью 86704,17 м2. Управляющая компания проводит эффективную подготовку к отопительному сезону,</p>
    <p class="obtext">проводит текущие ремонты обслуживаемого жилого фонда, обеспечивает круглосуточное аварийно – диспетчерское</p>
    <p class="obtext">обслуживание, осуществляет предоставление клининговых услуг, контролирует работу охранного агентства,</p>
    <p class="obtext">проводит работы с поставщиками и подрядчиками по закупке услуг, работ и средств на альтернативной основе.</p>
    <p class="text1">ООО «Управдом»</p>
    <video class="video" controls>
    <source src="video.mp4"type="video/mp4">
        Ваш браузер не поддерживает воспроизведение видео.
    </video>
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
