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
	<title>Test</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/normalize.css" rel="stylesheet"/>
</head>
<body>
<form class="container">
	<h1>Интересные задачки на php</h1>
	<h3> урок 37</h3>
	<p>Пусть в переменной $age хранится число. Если это число меньше 10 или больше 99, то выведите на
		экран сообщение об этом. Если же число попадает в указанный диапазон, то найдите сумму цифр
		этого числа. Если полученная сумма меньше или равна 9, то выведите на экран сообщение о том,
		что сумма цифр однозначна, в противном случае выведите сообщение о том, что сумма цифр
		двузначна.
	</p>
	<?php
	$age = -1;
	if($age >= 0 && $age < 10){
		echo $age.' - ваш возраст меньше 10 лет';
	}elseif($age > 99) {
		echo $age.' - ваш возраст больше 99 лет';
	} elseif($age >= 10 and $age <= 99) {
		$sum = (string)$age; // для нахождения последнего и первого числа переводим число в строку.
		echo $result = $sum[0]+$sum[strlen($sum) - 1]; //сума последнего и первого числа
		if($result <= 9) {
			echo ' - сумма цифр однозначна';
		} elseif($result > 10) {
			echo ' - сумма цифр двузначна';
		}
	}else {
		echo 'вы ввели не правильный возраст';
	}
	?>
</form>
</body>
</html>
