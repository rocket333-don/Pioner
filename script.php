<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма отправки данных</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .result {
            background: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
    </style>
</head>
<body>
    <div class="result">
        <h2>Результаты отправки формы</h2>

        <?php
        // Проверяем, был ли запрос методом POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Получаем данные из формы
            $fname = htmlspecialchars($_POST['fname']); // Имя
            $lname = htmlspecialchars($_POST['lname']); // Фамилия
            $phone = htmlspecialchars($_POST['phone']); // Телефон

            // Проверяем, заполнены ли все поля
            if (!empty($fname) && !empty($lname) && !empty($phone)) {
                // Выводим данные
                echo "<p><strong>Имя:</strong> $fname</p>";
                echo "<p><strong>Фамилия:</strong> $lname</p>";
                echo "<p><strong>Номер телефона:</strong> $phone</p>";
            } else {
                echo "<p>Пожалуйста, заполните все поля формы.</p>";
            }
        } else {
            echo "<p>Форма не была отправлена.</p>";
        }
        ?>
        <a href="/" style="display: inline-block; margin-top: 20px; text-decoration: none; color: #007BFF;">Вернуться на главную</a>
    </div>
</body>
</html>