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

	echo 'GET: <pre>'.print_r($_GET, 1).'</pre>';
	echo 'POST: <pre>'.print_r($_POST, 1).'</pre>';
	?>

<form action="" method="post">
	<div>Заполните логин:<input type="text" name="login"></div>
	<div>Заполните пароль:<input type="password" name="pass"></div>
	<div><input type="submit" name="submit" value="Отправить данные"></div>
</form>
<!--type ="button" в формах не используется, в основном в через JS делается.
name - это наш ключ переменной.
value - содержание значения данного поля->
	<?php

	?>
</body>
</html>

