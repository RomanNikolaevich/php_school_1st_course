<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');
?>
<body>
<?php
/*
 * Задание урок №3 - создать форму с полями:
<input name=”login”>
<textarea name=”text”></textarea>
*При отправке формы, сохранить в файл. То, что мы отправляем (логин и text), предварительно *объединив в формате «login: text» в новую переменную, и эту переменную поместить в файл. Файл *назвать 2.txt
 */
?>
<div>
	<form action="" method="post" class="content">
		<input name=”login”><br>
		<textarea name=”text”></textarea><br>
		<input type="submit" value="Отправить">
	</form>
</div>
<?php
$file = '2.txt';
$data = 'login';
$data .= 'text';
//$_POST['login'];
//$_POST['text'];
if(isset($_POST['login'], $_POST['text'])) {
	echo 'Форма была отправлена<br>';
}
file_put_contents($file, $data);
?>
</body>