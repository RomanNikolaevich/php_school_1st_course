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
//создаем 4 функции с разными метематическими знаками
function addition($num1, $num2) {
	return ($num1 + $num2);
}

function void($num1, $num2) {
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
		case '':
			$action = void($num1, $num2);
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
<div class="container">
	<form action="" method="post">
		<div>
			<input type="text" name="x1" value="">
		</div>
		<div>
			<input type="text" name="x1" value="">
		</div>
		<div>
			<label>+ <input type="radio" name="plus" value="+"></label> |
			<label>- <input type="radio" name="plus" value="-"></label> |
			<label>* <input type="radio" name="plus" value="*"></label> |
			<label>/ <input type="radio" name="plus" value="/"></label>
		</div>
		<div><input type="submit" name="submit" value="Отправить данные" style="border-style:hidden; border-radius:10px;
	background-color:#90ff90"></div>
	</form>
</div>
</div>
<p>
<?php
// вводим в круглых скобках желаемые данные и получаем на экран результат:
echo "Решение : <br>";
echo calc(5, 5, "");
?>
</p>
</body>
</html>
