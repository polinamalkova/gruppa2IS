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
    
<p class="kp"><b>Контакты</b></p>
<p class="ko">Служба поддержки читателей</p>
<p class="jj">Если у вас возникли проблемы при использовании ЛитРес, </p>
<p class="kop">8 (800) 333-27-37 help@litres.ru</p>
<br>
<p class="jj">Наш адрес:</p>
<p class="jj">614045, Пермь, Пушкина 107А</p>
<center>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A67e4fa24c6d171d88f94524e9d7183daf938e14b4869d011a222e62a54b8d19c&amp;width=1000&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
</center>


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