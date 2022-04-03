<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>15 урок php</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/normalize.css" rel="stylesheet"/>
</head>
<body>
<?php
//Урок 15: Улучшаем качество кода, include+GET, Суперглобальные массивы
/*План:
Ошибки домашек
Создаем навигацию include + GET
Изучаем область видимости переменных
Константы
$_REQUEST, $_SERVER, $GLOBALS
Самостоятельно изучаем пакет функций*/

// 15-1  Навигация с GET:
if(isset($_GET['page'])){ //если страница существует
	//echo '<h1>'.$_GET['page'].'</h1>';
} else { //если нет, то создастся
	$_GET['page'] = 'main';
}
?>
<div id="header">
Навигация:
<a href="15.php?page=main">Главная</a> |
<a href="15.php?page=15/history">Наша история</a> |
<a href="15.php?page=15/contacts">Контакты</a> |
<a href="15.php?page=15/aboutus">О себе</a>
</div>
<div id="content">
<?php include $_GET['page'].'.php';?> <!-- '.php' нужно обязательно указывать-->
</div>
<div id="footer">
	Тут пишем копирайты.
</div>
</body>
</html>
