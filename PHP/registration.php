<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/form.css" type="text/css" media="screen">
    <title>Школьный портал - Регистрация</title>
</head>
<body>
    <div class="block">
        <form action="../PHP/check.php" method="post" enctype="">
            <div class="container">
                <h1>Регистрация</h1>
                <p>Создавай. Давай-давай!</p>
                
                <hr>
                <label>ФИО</label>
                <input  type="text" required="123" name="full_name" placeholder="Введите свое имя"> 

                </label>Логин</label>
                <input   type="text" required="123" name="login" placeholder="Введите свой логин">

                <label>Почта</label>
                <input  type="email" required="123" name="email" placeholder="Введите свой почтовый адрес">
        
                <label>Пароль</label>
                <input type="password" required="123" name="password" placeholder="Введите пароль">
                <hr>
            
                <button type="submit" class="btn">Зарегистрироваться</button>
            </div>
        
            <div class="container signin">
                <p>У вас уже есть аккаунт? <a href="../PHP/autorization.php">Зайдите</a>.</p>
                </p>Или вернуться <a href="index.php">на главную</a>?</p>
            </div>
        </form>
    </div>
</body>
</html>