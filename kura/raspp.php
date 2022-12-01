
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="css/glavn.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/undraw_working_late_.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/normalize.css-master/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css-master/styles.css" />
    <script src="js/jquery-3.6.1.min.js"></script>

</head>

<body>
    <div class ="wrapper">
        <div class="menu">
        <a><img src="img/icon.png" alt="" class="menu-btn"></a>
            <nav class="menu-list">
                <a href="index.php">Главная</a>
                <a href="#">Расписание</a>
                <a href="price.php">Прайс-лист</a>
                <a href="vhod1.php">Войти в систему</a>
            </nav>
        </div>



    </div>
    <script src="js/1.js"></script>
    <script  src="js/jquery-3.6.1.min.js"></script>
	
	
	
	
	
	
	<center>
	<h1>Расписание</h1>
	<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";


////////////////////////////////////////////////////////////////////////////////////////////////////
//1///////////////////////////////////////////////////////////////////////////////////////////////// тут твое расписание, с его дизайном ебись сама)))))
////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<table>";
echo "<tr><th>Дата занятия</th><th>Название услуги</th><th>Время занятия</th><th>Кто проводит</th><th>Телефон сотрудника</th></tr>";//названия стобцов

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//далее запрос, он соеденияет 3 таблицы, это расписание, услуги и сотрудников, я так сделал что бы все было логично, так как у тебя там есть вторичные ключи
	//поля можно будет поменять и все такое, визуал естественно тоже, но я в этом не силен, пока только так
	//чтоб там визуал поменять тебе нужно будет всякие рамочки хуямочки настроить, это все через css делается
	//просто в css будет менять стиль тегов <tr> и <th> это типо таблица
	//Вот ты и сэкономила косарь)
	
    $stmt = $conn->prepare("SELECT `Date`, `Name_Uslugi`,`Vremya_Zanyatii`,`FIO`,`Phone` FROM `raspisanie`,`uslugi`,`sotrudnic` WHERE (`Uslugi_idUslugi`=`idUslugi`) AND (`Sotrudnic_idSotrudnic`=`idSotrudnic`)");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
////////////////////////////////////////////////////////////////////////////////////////////////////
//1/////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
?>
	</center>
</body>
</html>
