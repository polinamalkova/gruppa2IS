<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные заявок</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./Content/logo.png">
</head>
<body>
    <header>
        <div class="w">
            <a href="index.html">
                <img src="./Content/logo.png" class="q" alt="Логотип">
            </a>
        </div>
        <a href="my.html" class="text12">Заявки</a>
        <a href="index.html" class="text1">Выход</a>
    </header>
    <br><br>

    <div class="table-container">
        <table border="1">
            <thead>
                <tr>
                    <th>Дата</th>
                    <th>Время</th>
                    <th>Адрес</th>
                    <th>Номер телефона</th>
                    <th>Вид услуги</th>
                    <th>Вид оплаты</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Enable error reporting
                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                // Database connection
                $servername = "localhost"; // Change if necessary
                $username = "your_username"; // Your database username
                $password = "your_password"; // Your database password
                $dbname = "my_database"; // Your database name

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data
                $sql = "SELECT date, time, address, phone_number, service_type, payment_method, status FROM applications";
                $result = $conn->query($sql);

                // Check if there are results
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['date']}</td>
                                <td>{$row['time']}</td>
                                <td>{$row['address']}</td>
                                <td>{$row['phone_number']}</td>
                                <td>{$row['service_type']}</td>
                                <td>{$row['payment_method']}</td>
                                <td>{$row['status']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Нет данных</td></tr>";
                }

                // Close connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>