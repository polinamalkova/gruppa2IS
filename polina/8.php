<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>БиблиоМир</title>
    <link rel="stylesheet" href="./style/style.css">
    <script>
        function redirectToPage() {
            window.location.href = "1.html";
        }
        function searchDatabase() {
            // Здесь вы можете добавить код для связи с базой данных и выполнения поискового запроса
            // Например, использование AJAX для отправки запроса на сервер и получения результатов
            // или использование серверного языка программирования, такого как PHP или Python, для выполнения запроса к базе данных
        }
        function openModal() {
    document.getElementById('modal').style.display = 'block';
}

function showSuperModal() {
    var email = document.getElementById('email').value; 
    var modalContent = "<img src='./img/x.png' alt='Close' style='position: absolute; top: 0; right: 0; cursor: pointer;' onclick='closeSuperModal()'><center><p style='font-size: 30px; color: #000000; margin-bottom: 20px;'>Создать профиль</p><span style='color: #5B5959; font-size: 20px;'>" + email + "</span><br><br><input type='checkbox' required> Я <span style='color: #B658D7;'>согласен</span> на обработку персональных данных с целью получения маркетинговых рассылок</center><br><br><div style='text-align: center;'><button onclick='openIndexPage()' style='margin-top: 10px;' class='cu-button'>Продолжить</button></div>";
    document.getElementById('superModal').innerHTML = modalContent; 
    document.getElementById('superModal').style.display = 'block'; 
}


function openIndexPage() {
    alert('С возвращением'); 
    window.location.href = 'index.php'; 
}

function closeSuperModal() {
    document.getElementById('superModal').style.display = 'none';
}

function showExcellentModal() {
    document.getElementById('excellentModal').style.display = 'block';

}

function closeExcellentModal() {
    document.getElementById('excellentModal').style.display = 'none';
}

function closeModal() {
    document.getElementById('modal').style.display = 'none';
}
function redirectToPage() {
  window.location.href = "10.php";
}
    </script>
</head>

<body>
    <a href="index.php">
        <img src="./img/logo.png">
    </a>
    <div class="header">
        <button class="custom-button" onclick="redirectToPage()">Каталог</button>
        <input type="text" class="search-box" placeholder="Искать на БиблиоМир">
        <button class="iii-button" onclick="searchDatabase()">Найти</button>

        <a href="#" onclick="openModal()" style="text-decoration: none;">
            <img class="up-img" src="./img/1.png" alt="Вход" />
            <p class="ii">Вход</p>
        </a>
        
        <div id="modal" class="modal" style="display: none;">
            <img src="./img/x.png" alt="Close" class="uu" onclick="closeModal()">
            <center><p class="yyy">Вход</p></center>
            <center><label class="g" for="promo">Введите почту</label></center>
            <center><input type="email" id="email" name="email" class="o" required></center>
            <center><button onclick="showSuperModal()"  class="cu-button">Продолжить</button></center>
            <center><p class="g">ИЛИ</p></center>
            <center><p class="z" onclick="showExcellentModal()">Другие способы</p></center>
            <center><p class="zz">При входе на ресурс вы принимаете <span class="zzz">публичную</span></p></center>
            <center><p class="zz"><span class="zzz">оферту</span> и <span class="zzz">обработку персональных данных</span></p></center>
            
        </div>
        
        <div id="superModal" class="modal" class="v">
            <img src="img/x.png" alt="Close" class="uu" onclick="closeSuperModal()">
            <center><button onclick="openIndexPage()" class="cu-button">Продолжить</button></center>
        </div>
        
        <div id="excellentModal" class="modal" class="v">
            <img src="./img/x.png" alt="Close" class="uu" onclick="closeExcellentModal()">
            <center><p class="yyy">Другие способы</p></center>
            <div class="ik">
    <center><a href="https://vk.com"></center>
       <img class="n" src="./img/vk.png" alt="Image 1"class="ih">
    </a>
    <center> <a href="https://ok.ru"></center> 
        <img class="nn" src="./img/ok.png" alt="Image 1" class="ih">
    </a>
    <center> <a href="https://web.telegram.org/"></center> 
        <img class="nn" src="./img/tg.png" alt="Image 1"class="ih">
    </a>
</div>
<center><p class="zz">При входе на ресурс вы принимаете  <span class="zzz">публичную </span></p></center>
            <center><p class="zz"><span class="zzz">оферту</span> и <span class="zzz">обработку персональных данных</span></p></center>
        </div>



        <div class="y">
            <a href="3.php" class="yy">Промокод</a>
            <a href="2.php" class="yy">Подписка за 0₽</a>
            <a href="4.php" class="yy" id="popularLink">Популярное</a>
        </div>

    </div>
    <script>
   document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.yy').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Предотвращаем переход по ссылке
            if (link.textContent === 'Промокод') {
                alert('Для доступа к этой странице необходимо войти'); // Показываем уведомление для промокода
            } else if (link.textContent === 'Подписка за 0₽') {
                alert('Для доступа к этой странице также необходимо войти'); // Показываем уведомление для подписки
            } else if (link.textContent === 'Популярное') {
                window.location.href = '4.php'; // Переходим на страницу "Популярное"
            }
        });
    });
});
    </script>
    
<center><p class="kp"><b>ПОЛИТИКА ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</b></p></center>
<div class="ip">
<p >В этом документе Общество с ограниченной ответственностью «Литрес» (также в тексте «мы», «нас», «наш») описывает порядок обработки персональных данных посетителей сайта https://www.litres.ru.</p>
<p >Если у вас есть вопросы об обработке персональных данных, вы можете написать письмо на наш официальный адрес электронной почты: help@litres.ru.</p>
<p >Мы придаем большое значение защите вашей частной жизни и безопасности ваших персональных данных. Просим вас внимательно изучить Политику обработки персональных данных (далее – Политика), чтобы понимать, для достижения каких целей мы осуществляем обработку ваших персональных данных и как вы можете реализовать свои права в отношении персональных данных.</p>
</div>
<p class="yu"><b>Немного о персональных данных и ваших правах при их обработке</b></p>
<div class="ip">
    <p >Персональные данные – любая информация, которая прямо или косвенно относится к вам или позволяет вас определить.</p>
    <p >Оператор персональных данных – юридическое или физическое лицо, осуществляющее обработку персональных данных. Когда вы посещаете наш сайт, мы становимся оператором ваших персональных данных.</p>
    <p >Обработка персональных данных – совершение любых действий с персональными данными.</p>
    <p>В соответствии с ФЗ «О персональных данных», вы имеете право:</p>
    <li>на доступ к персональным данным;</li>
    <li>на уточнение персональных данных;</li>
    <li>на блокирование и удаление персональных данных;</li>
    <li>на обжалование наших действий или бездействия;</li>
    <li>на обжалование решений, принятых на основании исключительно автоматизированной обработки ваших персональных данных;</li>
    <li>на отзыв согласия на обработку персональных данных.</li>
</div>
<p class="yu"><b>Как вы можете реализовать свои права?</b></p>
<div class="ip">
    <li>Вы можете написать официальный запрос на наш адрес (123112, г. Москва, 1-й Красногвардейский проезд, дом 15, этаж 28), указав в нем сведения о документе, удостоверяющем вашу личность или личность вашего представителя (тип документа, серия и номер, кем и когда выдан), ваше ФИО или ФИО представителя, информацию о характере взаимоотношений с вами, которые будут подтверждать факт обработки ваших персональных данных, вашу подпись или подпись вашего представителя.
        Такой запрос может быть направлен на нашу электронную почту в форме электронного документа, подписанного в соответствии с положениями законодательства Российской Федерации об электронной подписи;</li>
    <li>Также вы можете использовать для обращений наш адрес электронной почты: help@litres.ru.</li>
<p>Обжаловать наши действия как оператора персональных данных вы можете в территориальном органе Роскомнадзора в своем регионе.</p>
</div>
<p class="yu"><b>Для чего мы обрабатываем ваши персональные данные?</b></p>
<div class="ip">
<p>В этом разделе мы расскажем о целях и сроках обработки персональных данных, а также объясним, кому мы передаем ваши персональные данные.</p>
<p>В рамках перечисленных целей мы будем собирать, записывать, систематизировать, накапливать, хранить, уточнять (обновлять, изменять), извлекать, использовать, передавать (предоставлять, обеспечивать доступ), блокировать, удалять, уничтожать ваши персональные данные.</p>
</div>
<p class="yu"><b>ИНФОРМАЦИЯ ОБ УСЛОВИЯХ ОБРАБОТКИ И О НАЛИЧИИ ЗАПРЕТОВ И УСЛОВИЙ НА ОБРАБОТКУ НЕОГРАНИЧЕННЫМ КРУГОМЛИЦ ПЕРСОНАЛЬНЫХ ДАННЫХ, РАЗРЕШЕННЫХ СУБЪЕКТОМ ПЕРСОНАЛЬНЫХ ДАННЫХ ДЛЯ РАСПРОСТРАНЕНИЯ</b></p>
<div class="ip">
<p>В отношении персональных, опубликованных на сайте Оператора, действуют следующие правила и ограничения:</p>
<p>- передача персональных данных неограниченному кругу лиц не запрещена;</p>
<p>- обработка персональных данных неограниченным кругом лиц не запрещена;</p>
<p>- полученные Оператором персональные данные могут передавать с использованием информационно-телекоммуникационных сетей.</p>
</div>
<p class="yu"><b>БЕЗОПАСНОСТЬ ДАННЫХ</b></p>
<div class="ip">
<p>Персональные данные, которые мы собираем и храним, считаются конфиденциальной информацией. Они защищены от потери, изменения или несанкционированного доступа в соответствии с законодательством Российской Федерации в области персональных данных. Для этого мы применяем технические средства и организационные меры. Мы постоянно совершенствуем наши системы защиты данных.</p>
</div>
<p class="yu"><b>ИЗМЕНЕНИЕ ПОЛИТИКИ</b></p>
<div class="ip">
<p>Мы оставляем за собой право вносить изменения в нашу Политику в любое время. Мы просим вас регулярно просматривать все обновления нашей Политики. Мы будем направлять уведомления об изменениях Политики в случае, если такие изменения являются существенными, доступными нам способами.</p>
</div>
<br>
<div class="footer">
<img class="hj"  src="./img/par.png">
<a href="5.php" class="ll">О компании</a>
<a href="6.php" class="lll">Контакты </a>
<a href="7.php" class="lll">Служба поддержки</a>
<a href="8.php" class="lll">Политика обработки персональных данных</a>

</div>

<div class="tx">
    <a href="1.php">
        <a href="9.php" class="k">Согласие на получение рассылки</a>
        <a href="1.html" class="kk">БиблиоМир в соц.сетях</a>
    </a>
</div>

<div class="ik">
    <a href="https://vk.com">
        <img class="vvv" src="./img/vk.png" alt="Image 1"class="ih">
    </a>
    <a href="https://ok.ru">
        <img class="vvvv" src="./img/ok.png" alt="Image 1" class="ih">
    </a>
    <a href="https://web.telegram.org/">
        <img class="vvvv" src="./img/tg.png" alt="Image 1"class="ih">
    </a>
</div>

</div>
</body>
</html>