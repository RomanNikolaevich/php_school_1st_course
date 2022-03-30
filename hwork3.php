<?php
/*
 * * Ядро сайта, сюда лучше не лезть просто так!
 */
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>Заголовок страницы</title>
	<meta name="description" content="Описание страницы" />
	<meta name="keywords" content="Ключевые слова через запятую" />
	<link href="css/normalize.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<div>
	<form action="" method="post" class="content">
		<input name=”login”><br>
		<textarea name=”text”></textarea><br>
		<input type="submit" value="Отправить">
	</form>
</div>
<?php
/*
 * Задание урок №3 - создать форму с полями:
 * <input name=”login”>
 * <textarea name=”text”></textarea>
 * При отправке формы, сохранить в файл. То, что мы отправляем (логин и text),
 * предварительно *объединив в формате «login: text» в новую переменную, и эту переменную поместить в файл.
 * Файл *назвать 2.txt
 */
if(isset($_POST['login'], $_POST['text'])) {
	$data = $_POST['login'] .':' . $_POST['text'];
	file_put_contents('2.txt', $data);
	echo 'Форма была отправлена<br>';
}
?>
</body>
</html>