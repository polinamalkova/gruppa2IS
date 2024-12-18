<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="../logo/logo.png">
</head>
<body>
    <header>
        <a href="index.html">
            <img src="../logo/logo.png" class="q" alt="Логотип">
        </a>
        <p class="text">Сделаем лучше вместе!</p>
        <a href="index.html" class="text1">Выход</a>
    </header>
    
    <div id="photoBlock">
        <h3>Загрузить фотографию</h3>
        <input type="file" id="fileInput" accept="image/*">
        <img id="userPhoto" alt="">
    </div>

    <div class="data-group">
        <?php include "./php/lk.php";?>    
    </div>
    
    <br>
    <a href="my.html" class="text7">Мои заявки</a>
    <a href="nomy.html" class="text8">Написать заявку</a>
    <script>
        const fileInput = document.getElementById('fileInput');
        const userPhoto = document.getElementById('userPhoto');
    
        fileInput.addEventListener('change', function() {
            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    userPhoto.src = e.target.result; // Устанавливаем источник изображения
                    userPhoto.style.display = 'block'; // Показываем изображение
                }
                reader.readAsDataURL(file); // Читаем файл как URL
            }
        });
    </script>
    
    </body>
    </html>