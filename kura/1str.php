<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/k1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/undraw_working_late_.png" type="image/png">
</head>
<body>
<div class="main">
    <form action="" method="post"></form>
    <div class="menu">
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li id="yr"><button><a href="vhod1.php" >Вход/Регистрация</a></button></li>
        </ul>
    </div>
    <div id="d5">
        <div id="yt">
        </div>
    </div>
    <div>
        <div id="ax">
            <form action="php/reg.php" method="post">

                <div class="container">
                    <h1>Регистрация</h1>
                    <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
                    <hr>

					<label><b>Введите ваш номер телефона</b></label>
                    <input class="as" type="text" placeholder="Введите логин" name="phone" >
					
					<label><b>Ваше ФИО</b></label>
                    <input class="as" type="text" placeholder="Введите логин" name="fio" >
					
					<label><b>Адрес</b></label>
                    <input class="as" type="text" placeholder="Введите логин" name="adress" >

                    <label><b>Логин</b></label>
                    <input class="as" type="text" placeholder="Введите логин" name="login" >

                    <label><b>Пароль</b></label>
                    <input  class="sd" type="password" placeholder="Введите пароль" name="psw">

                    <label><b>Подтвердите пароль</b></label>
                    <input  class="sd" type="password" placeholder="Подтвердите пароль" name="pswrepeat">
					
					
                    <hr>
					
                    <p>
                        Создавая учетную запись, вы соглашаетесь с нашими  <a href="#">Условиями и конфиденциальностью.</a>
					</p>

                    <button type="submit" class="border-button">Зарегистрироваться</button>
                </div>


                <div class="container signin">
                    <p>Уже есть учётная запись? <a href="vhod1.php">Войти</a>.</p>
                </div>
            </form>
        </div>

    </form>
    </div>
</div>
</body>
</html>
