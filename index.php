<?php
/*
 * * Ядро сайта, сюда лучше не лезть просто так!
 */
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');
/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идет создание и обработка PHP кода
 * Тут мы пишем код и коментарии к нему
 */

/*
 * VIEW BLOCK /  Вид сайта
 * в этой части идет вывод HTML и PHP
 */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8"/>
	<title>Заголовок страницы</title>
	<meta name="description" content="Описание страницы"/>
	<meta name="keywords" content="Ключевые слова через запятую"/>
	<link href="css/normalize.css" rel="stylesheet"/>
	<link href="css/style11.css" rel="stylesheet"/>
	<link href="css/bootstrap-grid.min.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<?php
if(isset($_POST['login'], $_POST['pass'])) {
	echo $_POST['login'];
	//echo 'GET: <pre>'.print_r($_GET, 1).'</pre>';
	echo 'POST: <pre>'.print_r($_POST, 1).'</pre>';
	if(isset($_POST['like'])) {
		echo 'Человек любит'.$_POST['like'][0];
	} else {
		echo 'Человек ничего не любит';
	} echo "Вы успешно зарегистрировались";
} else {// если регистрация не прошла, то выполняется блок кода расположеного ниже - скобка открылась
?>
<h1>Форма</h1>
<form action="" method="post">
	<input type="hidden" name="hide" value="скрытое значение">
	<div>Заполните логин:<input type="text" name="login" value=""></div>
	<div>Заполните пароль:<input type="password" name="pass" value=""></div>
	<div style="padding:15px">
		Пол: <br>
		<label>Мужчина <input type="radio" name="gender" value="Мужчина"></label> |
		<label>Женщина <input type="radio" name="gender" value="Женщина"></label>
	</div>
	<div style="padding:15px">
		Любимый напиток: <br>
		<label>Кофе <input type="checkbox" name="like[]" value="Кофе"></label> |
		<label>Чай <input type="checkbox" name="like[]" value="Чай"></label> |
		<label>Молоко <input type="checkbox" name="like[]" value="Молоко"></label>
	</div>
	<div><input type="submit" name="submit" value="Отправить данные" style="border-style:hidden; border-radius:10px;
	background-color:#90ff90"></div>
</form>
<?php } ?><!-- скобка закрылась-->
</body>
</html>