<?php

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Регистрация и вход</title>
</head>
<body>
    <section>
        <div>
            <h2>Войти</h2>
            <form action="includes/login.php" method="POST">
                <input type="text" name="username" placeholder="Введите имя пользователя">
                <input type="password" name="password" placeholder="Введите пароль">
                <input type="submit" name="submit" value="Войти">
            </form>
        </div>
        <div>
            <h2>Регистрация</h2>
            <form action="includes/signup" method="POST">
                <input type="text" name="username" placeholder="Введите имя пользователя">
                <input type="password" name="password" placeholder="Введите пароль">
                <input type="text" name="email" placeholder="Введите адрес электронной почты">
                <input type="submit" name="submit" value="Зарегистрироваться">
            </form>
        </div>
    </section>
</body>
</html>