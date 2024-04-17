<?php

include_once ('data/books.php');

if (isset($_GET['q'])) {
    $searchText = $_GET['q'];


    function filterBooks($books, $searchText)
    {
        $filteredBooks = array_filter($books, function ($book) use ($searchText) {
            $name = strtolower($book['name']);
            $author = strtolower($book['author']);
            $searchText = strtolower($searchText);
            return strpos($name, $searchText) !== false || strpos($author, $searchText) !== false;
        });

        return array_values($filteredBooks);
    }

    $filteredBooks = filterBooks($books, $searchText);

}
?>


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
            window.location.href = "10.1.html";
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
        

        <a href="index.php" onclick="openIndexPage(); return false;" style="text-decoration: none;">
            <img class="up-img" src="./img/1.png" alt="Выход" />
            <p class="hui">Выход</p>
        </a>

        <div class="y">
            <a href="3.html" class="yy">Промокод</a>
            <a href="2.html" class="yy">Продписка за 0₽</a>
            <a href="4.1.html" class="yy">Популярное</a>
        </div>
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
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Изменение изображения каждые 2 секунды
        }

    </script>

    <div class="inline-elements">
        <p class="yyy">Результаты поиска</p>
        <a href="38.1.html">
            <img class="l" src="./img/up.png" alt="Картинка">
        </a>
    </div>

    <div class="p">
        <!-- подборка книг -->
        <?php
        foreach ($filteredBooks as $book) {
            echo
                "<div class='image-wrapper'>
                    <img src={$book['img']} alt='Image 1' class='img'>
                    <div class='image-caption'>{$book['name']}</div>
                    <div class='pp' class='image-caption'>{$book['author']}</div>
                    <a href='1.html' class='oo' onclick='showNotification(event)'>Читать</a>
                </div>";
        }
        ?>

    </div>




    <?php include ('components/footer.php') ?>

    </div>

    <script>
        function redirectToPage() {
            window.location.href = "1.html";
        }
        function searchDatabase() {
            const input = document.querySelector("input.search-box");
            window.location.href = `search.php?q=${input.value}`;
        }
    </script>
</body>

</html>