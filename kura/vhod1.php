<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="css/kvhod.css">
    <link rel="shortcut icon" href="img/undraw_working_late_.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<div class="main">

    <div class="menu">
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li id="yr"><button><a href="1str.php">Вход/Регистрация</a></button></li>
        </ul>
    </div>
    <div id="d5">
        <div id="yt">

        </div>
    </div>
    <div>
        <div id="ax">
            <form action="php/avt.php" method="post">
                <div class="container">
                    <h1>Авторизация</h1>
                    <p>Пожалуйста, заполните эту форму, чтобы Войти в учетную запись.</p>
                    <hr>

                    <label for="email"><b>Логин</b></label>
                    <input type="text" placeholder="Введите ваш логин" name="login" required>

                    <label for="psw"><b>Пароль</b></label>
                    <input type="password" placeholder="Введите пароль" name="pas" required>


                    <button type="submit" class="border-button">Войти</button>
                </div>

                <div class="container signin">
                    <p>У вас ещё нет учётной записи? <a href="1str.php">Зарегистрироваться</a>.</p>
                </div>

            </form>
        </div>



        </div>
    </div>
</div>
</body>
</html>