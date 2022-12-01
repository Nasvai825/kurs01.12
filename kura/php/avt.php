<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $login = $_POST['login'];
   $pas2 =$_POST['pas'];
   $pas = hash('md5',$_POST['pas']);

  if ((empty($login)) || (empty($pas2))){
      echo "Не введены все данные";
      exit;
  }
  else{

   $sql = "SELECT * FROM klient Where login = $login ";
   foreach ($conn->query($sql) as $row) {
        if ($row['klient']=$login and $row['pass']==$pas){
            echo "Успех";
            //$new_url = '../Main.php'; опять ссылка куда то там
            //header('Location: '.$new_url); это команда перехода куда то там
            exit();
            break;
        }
        else{
            echo "Неверный логин или пароль";
            exit;
        }
   }
   }





} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>