
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
        function openIndexPage() {
    alert('До скорых встреч'); // Выводим уведомление с надписью "До скорых встреч"
    window.location.href = 'index.php'; // Открываем страницу index.php
}
function redirectToPage() {
  window.location.href = "10.1.php";
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

        <a href="index.php" onclick="openIndexPage(); return false;"style="text-decoration: none;">
            <img class="up-img" src="./img/1.png" alt="Выход" />
            <p class="hui">Выход</p>
        </a>

        <div class="y">
            <a href="3.php" class="yy">Промокод</a>
            <a href="2.php" class="yy">Продписка за 0₽</a>
            <a href="4.1.php" class="yy">Популярное</a>
        </div>
    </div>
    </div>
    

    <div class="m" class="slideshow-container">
        <div class="mySlides fade">
          <img src="./img/2.png" style="width:80%">
        </div>
        <div class="mySlides fade">
          <img src="./img/3.png" style="width:80%">
        </div>
        <div class="mySlides fade">
          <img src="./img/4.png" style="width:80%">
        </div>
        <div class="mySlides fade">
          <img src="./img/5.png" style="width:80%">
        </div>
    </div>
      <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Изменение изображения каждые 2 секунды
}

</script>

<div class="inline-elements">
    <p class="yyy">Рекомендации для вас</p>
    <a href="38.1.php">
    <img class="l" src="./img/up.png" alt="Картинка">
</a>
</div>

<div class="p">
    <div class="image-wrapper">
        <img src="./img/1k.png" alt="Image 1" class="img">
        <div class="image-caption">Форсайт</div>
        <div class="pp" class="image-caption">Сергей Лукьяненко</div>
        <a href="36.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/2k.png" alt="Image 1" class="img">
        <div class="image-caption">Разведчик барона</div>
        <div class="h" class="image-caption">Макс Глебов</div>
        <a href="25.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/3k.png" alt="Image 3" class="img">
        <div class="image-caption">Каждому по заслугам</div>
        <div class="pp" class="image-caption">Людмила Мартова</div>
        <a href="22.php" class="oo" >Читать</a>
    </div>
</div>

<div style="margin-top: 20px;" class="p">
    <div class="image-wrapper">
        <img src="./img/4k.png" alt="Image 1"class="img">
        <div class="image-caption">Точка</div>
        <div class="hh" class="image-caption">Кира Уайт</div>
        <a href="26.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/5k.png" alt="Image 1"class="img">
        <div class="image-caption">Любовь со смертью</div>
        <div class="hhh" class="image-caption">Гусейнова Ольга</div>
        <a href="27.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <a href="38.1.php">
        <img class="b" src="./img/up2.png" alt="Image 1">
        </a>
    </div>
</div> 

<div class="inline-elements">
    <p class="yyy">Топ-книг в подписке</p>
    <a href="39.1.php">
    <img class="l" src="./img/up.png" alt="Картинка">
</a>
</div>

<div class="p">
    <div class="image-wrapper">
        <img src="./img/6k.png" alt="Image 1" class="img">
        <div class="image-caption">Хлопок одной ладонью</div>
        <div class="pp" class="image-caption">Николай Кукушкин</div>
        <a href="34.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/7k.png" alt="Image 1" class="img">
        <div class="image-caption">К себе нежно</div>
        <div class="pp"  class="image-caption">Ольга Примаченко</div>
        <a href="30.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/8k.png" alt="Image 3" class="img">
        <div class="image-caption">Теория невероятности</div>
        <div class="pp" >Татьяна Мужицкая</div>
        <a href="31.php" class="oo" >Читать</a>
    </div>
</div>

<div style="margin-top: 20px;" class="p">
    <div class="image-wrapper">
        <img src="./img/9k.png" alt="Image 1"class="img">
        <div class="image-caption">Трать</div>
        <div class="hhhh" >Билл Перкинс</div>
        <a href="32.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/10k.png" alt="Image 1"class="img">
        <div class="image-caption">Дела минувшие</div>
        <div class="hhh">Николай Свечин</div>
        <a href="23.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <a href="39.1.php">
        <img class="b" src="./img/up2.png" alt="Image 1">
        </a>
    </div>
</div> 

<div class="inline-elements">
    <p class="yyy">Только на БиблиоМир</p>
    <a href="40.1.php">
    <img class="l" src="./img/up.png" alt="Картинка">
</a>
</div>

<div class="p">
    <div class="image-wrapper">
        <img src="./img/11k.png" alt="Image 1" class="img">
        <div class="image-caption">Ты можешь</div>
        <div class="h"  class="image-caption">Алина Адлер</div>
        <a href="33.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/12k.png" alt="Image 1" class="img">
        <div class="image-caption">Упражнения</div>
        <div class="h"  class="image-caption">Иэн Макьюэн</div>
        <a href="37.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/13k.png" alt="Image 3" class="img">
        <div class="image-caption">Спектор</div>
        <div class="pp" class="image-caption">Сергей Лукьяненко</div>
        <a href="28.php" class="oo" >Читать</a>
    </div>
</div>

<div class="p">
    <div class="image-wrapper">
        <img src="./img/14k.png" alt="Image 1"class="img">
        <div class="image-caption">Искупление</div>
        <div class="hhhh" class="image-caption">Иэен Макьюэн</div>
        <a href="29.php" class="oo" >Читать</a>
    </div>

    <div class="image-wrapper">
        <img src="./img/15k.png" alt="Image 1" class="img">
        <div class="image-caption">Внутри убийцы</div>
        <div class="hh" class="image-caption">Майк Омер</div>
        <a href="24.php" class="oo">Читать</a>
    </div>

    <div class="image-wrapper">
        <a href="40.1.php">
        <img class="b" src="./img/up2.png" alt="Image 1">
        </a>
    </div>
</div> 

<div class="footer">
<img class="hj" src="./img/par.png">
<a href="5.1.php" class="ll">О компании</a>
<a href="6.1.php" class="lll">Контакты </a>
<a href="7.1.php" class="lll">Служба поддержки</a>
<a href="8.1.php" class="lll">Политика обработки персональных данных</a>

</div>

<div class="tx">
    <a href="1.php">
        <a href="9.1.php" class="k">Согласие на получение рассылки</a>
        <a href="1.php" class="kk">БиблиоМир в соц.сетях</a>
    </a>
</div>

<div class="ik">
    <a href="https://vk.com">
        <img class="vvv" src="./img/vk.png" alt="Image 1"class="ih">
    </a>
    <a href="https://ok.ru/">
        <img class="vvvv" src="./img/ok.png" alt="Image 1" class="ih">
    </a>
    <a href="https://web.telegram.org/">
        <img class="vvvv" src="./img/tg.png" alt="Image 1"class="ih">
    </a>
</div>

</div>
</body>
</html>