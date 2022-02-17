<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/form.css" type="text/css" media="screen">
    <title>Школьный портал - Авторизация</title>
</head>
<body>
    <div class="block">
        <form action="student.php">
            <div class="container">
                <h1>Авторизация</h1>
                <p>Заполняй. Давай-давай!</p>
                <hr>
                <label for="login"><b>Логин</b></label>
                <input type="text" placeholder="Логин" name="login" required>

                <label for="password"><b>Пароль</b></label>
                <input type="password" placeholder="Введите пароль" name="password" required>
                
                <button type="submit" class="btn">Авторизоваться</button>
            </div>
            <div class="container signin">
                <p>У вас нету аккаунта? <a href="../PHP/registration.php">Сделайте</a>!</p>
                </p>Или вернуться <a href="index.php">на главную</a>?</p>
            </div>
        </form>
    </div>
</body>
</html>