<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	///////////////////////////////////////////////////////Далее переменные, которые берутся из прошлого файла
	$phone = $_POST['phone'];
	$fio = $_POST['fio'];
	$adress = $_POST['adress'];
    $login = $_POST['login'];
	$psw = hash('md5',$_POST['psw']);
    $pswrepeat = hash('md5',$_POST['pswrepeat']);
	///////////////////////////////////////////////////////
	
	$sql2 = $conn->prepare("SELECT COUNT(*) AS `total` FROM klient WHERE login = :phone");//Команда для проверки наличия пользователя с таким логином
    $sql2->execute(array(':phone' => $login));
	$result = $sql2->fetchObject();
	
	if ($result->total > 0)
    {
        echo 'Данный пользователь есть в базе';
        exit;
    }
    else
	{
		if (empty($phone) or empty($fio) or empty($adress) or empty($login) or empty($psw)) //Проверка на незаполненные поля
		{
			echo "Заполните все поля";
			exit;
		}
		if ($psw == $pswrepeat)
		{
			$sql = "INSERT INTO klient VALUES (default, '$phone','$fio','$adress',1,'$login','$psw')"; //это команда которая будет заноситься в SQL, тут тебе нужно будет вместо единицы заносить айдишник из таблицы каких то карточек, хз
			
			// use exec() because no results are returned
			$conn->exec($sql);
			echo "Новый пользователь добавлен";
			//$new_url = '../Main.php'; маааааать, тут кароче ссылка будет, переход после регистрации, коментарий уберешь
			//header('Location: '.$new_url);
		}
		else
		{
			echo "Несовпадают пароли или заполнены не все поля";
		}
    }

//далее в душе не ебу что, но вроде как это что то для вывода ошибки, если они есть
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>