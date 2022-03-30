<?php
/*
 * * Ядро сайта, сюда лучше не лезть просто так!
 */
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');

/* Домашнее задание:
 Сделать калькулятор, принимающий данные из формы и вывести их на экране
 */
?>

<?php
// Первый вариант - расширенный
/*
//создаем 4 функции с разными метематическими знаками
function addition ($num1, $num2) {
	return ($num1 + $num2);
}
function void ($num1, $num2) {
	return ($num1 + $num2);
}
function subtraction($num1, $num2){
	return ($num1 - $num2);
}
function multiplication ($num1, $num2){
	return ($num1 * $num2);
}
function division($num1, $num2){
	if($num2 !=0){
		return ($num1 / $num2);
	}else{
		return 'Ошибка: деление на 0';
	}
} //условия
function calc ($num1, $num2, $action){
	switch($action){
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
} // вводим в круглых скобках желаемые данные и получаем на экран результат:
echo "Решение 1-го уравнения: <br>";
echo calc (5, 5, "");
echo "<br>";

// второй вариант более короткий, но функционал тот же:

function division2 ($num3, $num4) {
	if($num4!=0) {
		return ($num3 / $num4);
	} else {
		return 'Ошибка: деление на 0';
	}
}

function calc2 ($num3, $num4, $action2){
	switch($action2){
		case "+":
			$action2 = $num3 + $num4;
			break;
		case "":
			$action2 = $num3 + $num4;
			break;
		case "-":
			$action2 = $num3 - $num4;
			break;
		case "*":
			$action2 = $num3 * $num4;
			break;
		case '/':
			$action2 = division2($num3, $num4);
			break;
		default:
			echo "Введена неккоректная информация!";
	}
	return $action2;
} // вводим в круглых скобках желаемые данные и получаем на экран результат:
echo "Решение 2-го уравнения: <br>";
echo calc2 (6,0,"/");*/
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
	<div class="row">

	</div>
</div>
</div>

</body>
</html>
