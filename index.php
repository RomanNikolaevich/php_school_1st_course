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
if(isset($_POST['submit'])) {
	echo $_POST['login'];
	echo 'GET: <pre>'.print_r($_GET, 1).'</pre>';
	echo 'POST: <pre>'.print_r($_POST, 1).'</pre>';

	$like = '';
	if(isset($_POST['like'])) {
		foreach($_POST['like'] as $v) {
			$like .= $v.',';
		}
		echo '<p>Мы любим: '.$like.'</p>';
	}
}
?>

<form action="" method="post">
	<input type="hidden" name="hide" value="скрытое значение">
	<div>Заполните логин:<input type="text" name="login"></div>
	<div>Заполните пароль:<input type="password" name="pass"></div>
	<div style="padding:15px">
		Пол: <br> <!--тег <label> используется для придания интерактивности тексту - можно включить кнопку нажатием
		 на текст "Мужчина"	так же label работает и с checlbox-->
		<label>Мужчина <input type="radio" name="gender" value="Мужчина"></label> |
		<!--в радио мы используем одинаковый тип и имя-->
		<label>Женщина <input type="radio" name="gender" value="Женщина"></label>
		<!--здесь value - это то что выведется текст в массив-->
	</div>
	<div style="padding:15px">
		Любимый напиток: <br> <!--так же label работает и с checkbox-->
		<label>Кофе <input type="checkbox" name="like[]" value="Кофе"></label> |
		<label>Чай <input type="checkbox" name="like[]" value="Чай"></label> |
		<label>Молоко <input type="checkbox" name="like[]" value="Молоко"></label>
		<!--в отличие от радио в чекбоксе при отправке данных выведется только последняя отмеченная запись.
		Чтобы этого избежать необходимо задать разные имена name (like 1, like2, ...) или записать в массив like []-
		создастся новый массив внутри массива $_POST
		Передачу данных в мссив возможна и в остальных местах, но в чекбоксе они обязательны-->
	</div>
	<div><input type="submit" name="submit" value="Отправить данные" style="border-style:hidden; border-radius:10px;
	background-color:#90ff90"></div>
</form>
</body>
</html>

