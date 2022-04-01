<?php
/*
 * * Ядро сайта, сюда лучше не лезть просто так!
 */
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/*Домашка сделать форму:
1) два поля для ввода данных
2) 4 радио для + - * /
3) сделать кнопку "отправить"
4) вывести число (ответ) без разницы где вверху или сбоку: 5+10 = 15 (отобразить входящие данные, саму формулу и результат).
5) не забывать пользоваться проверкой isset входящих данных, чтобы существовало значение первое и значение второе
if(isset($_POST['num1'], $_POST['num2'])) {..} нужно ввести значение 1 и 2 и отправить в нашу форму*/
?>

<?php
if(isset($_POST['num1'], $_POST['num2'], $_POST['action'])) {
	//echo 'POST: <pre>'.print_r($_POST, 1).'</pre>';

	function addition($num1, $num2) {
		return ($num1 + $num2);
	}

	function subtraction($num1, $num2) {
		return ($num1 - $num2);
	}

	function multiplication($num1, $num2) {
		return ($num1 * $num2);
	}

	function division($num1, $num2) {
		if($num2 != 0) {
			return ($num1 / $num2);
		}
		else {
			return 'Ошибка: деление на 0';
		}

	} //условия
	function calc($num1, $num2, $action) {
		switch($action) {
			case '+':
				$action = addition($num1, $num2);
				break;
			case '-':
				$action = subtraction($num1, $num2);
				break;
			case '*':
				$action = multiplication($num1, $num2);
				break;
			case '/':
				$action = division($num1, $num2);
				break;
			default:
				echo "Введена неккоректная информация!";
		}

		return $action;
	}
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>калькулятор на php</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="/normalize.css" rel="stylesheet"/>
</head>
<body>
<h1 style="color:#16bb16">Калькулятор</h1>
<form action="" method="post">
	<div style="padding: 10px">
		Введите первое число: <br>
		<input type="text" name="num1" value="">
	</div>
	<div style="padding: 10px">
		Выберите математическую операцию: <br>
		<label>+ <input type="radio" name="action" value="+"></label>
		<label>- <input type="radio" name="action" value="-"></label>
		<label>* <input type="radio" name="action" value="*"></label>
		<label>/ <input type="radio" name="action" value="/"></label>
	</div>
	<div style="padding: 10px">
		Введите второе число: <br>
		<input type="text" name="num2" value="">
	</div>
	<div style="padding: 10px"><input type="submit" name="submit" value="Отправить данные" style="border-style:groove; border-radius:10px;
	background-color:#90ff90"></div>
</form>

<p style="padding: 10px">
	<?php
	echo $_POST['num1'].$_POST['action'].$_POST['num2'].'='.calc($_POST['num1'], $_POST['num2'], $_POST['action']);
	?>
</p>
</body>
</html>