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
	<h1>Интересные задачки по php с сайта code.mu</h1>
	<h3> урок 37.4</h3>
	<p>Пусть в переменной $age хранится число. Если это число меньше 10 или больше 99, то выведите на
		экран сообщение об этом. Если же число попадает в указанный диапазон, то найдите сумму цифр
		этого числа. Если полученная сумма меньше или равна 9, то выведите на экран сообщение о том,
		что сумма цифр однозначна, в противном случае выведите сообщение о том, что сумма цифр
		двузначна.
	</p>
	<pre>
	<code>
	$age = 96;
	if($age >= 0 && $age < 10) {
		echo $age.' - ваш возраст меньше 10 лет';
	}
	elseif($age > 99) {
		echo $age.' - ваш возраст больше 99 лет';
	}
	elseif($age >= 10 and $age <= 99) {
		$sum = (string)$age; // для нахождения последнего и первого числа переводим число в строку.
		echo $result = $sum[0] + $sum[strlen($sum) - 1]; //сума последнего и первого числа
		if($result <= 9) {
			echo ' - сумма цифр однозначна';
		}
		elseif($result > 10) {
			echo ' - сумма цифр двузначна';
		}
	}
	else {
		echo 'вы ввели не правильный возраст';
	}
	</code>
		</pre>
	<h3> урок 38.2</h3>
	<p>В переменной $arr содержится некоторый массив с числами. Напишите условие, которое проверит,
		что в массиве 3 элемента. Если это так, выведите на экран сумму элементов массива.</p>
	<pre>
	<code>
	//первый вариант:
	$arr = [1, 2, 3, 4];
	if(count($arr) >= 3) {
		echo 'sum(arr1) = ';
		echo $arr[0] + $arr[1] + $arr[2] + $arr[3];
		echo "<br>";
	}
	// второй вариант - автосумма функция:
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	if(count($arr) >= 3) {
		echo "sum(arr2) = ".array_sum((array)$arr)."\n";
	}
	</code>
		</pre>

	<h3> урок 38.3</h3>
	<p>Как известно, четные числа делятся на 2 без остатка, а нечетные - с остатком. Пусть у вас дано число. С помощью
		оператора % и конструкции if проверьте четное это число или нет.</p>
	<pre>
	<code>
	$a = 7;
	$rest = $a % 2;

	if($rest === 0) {
		echo 'чётное';
	}
	else {
		echo 'нечётное';
	}
	</code>
		</pre>

	<h3> урок 39.1</h3>
	<p>В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот
		месяц (зима, лето, весна, осень).</p>
	<pre>
	<code>
		/* foreach(range(1, 12) as $arr) { // создаем массив от 1 до 12
		/*echo $arr;}*/

		$arr = [1 => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]; //назначаем первый ключ = 1, а не 0
		echo $month = $arr[2]; // это строка с условием для работы срипта ниже

		if($month == 1 or $month == 2 or $month == 12) {
		echo '- зима';
		}
		elseif($month >= 3 and $month <= 5) {
		echo ' - весна';
		}
		elseif($month >= 6 and $month <= 8) {
		echo '- лето';
		}
		elseif($month >= 9 and $month <= 11) {
		echo ' - осень';
		}
		else {
		echo 'введите число от 1 до 12';
		}
	</code>
	</pre>
	<h3> урок 39.2</h3>
	<p>Дана строка, состоящая из символов, например, 'abcde'. Проверьте, что первым символом этой строки является буква
		'a'.</p>
	<pre>
	<code>
		$str = 'abcde';
		if($str[0] === 'a') {
		echo 'всё верно = а';
		}
		if($str[0] !== 'a') {
		echo ' не верно не = а';
		}
	</code>
</pre>
	<h3> урок 39.3</h3>
	<p>Дано число, например, 12345. Проверьте, что первым символом этого числа является цифра 1, 2 или 3.</p>
	<p>1-й вариант: через приведение числа к строке</p>
	<pre>
	<code>
		$var = 12345;
		$str = (string)$var;
		if($str[0] == 1) {
		echo 'нашел 1';
		}
		elseif($str[0] == 2) {
		echo 'нашел 2';
		}
		elseif($str[0] == 3) {
		echo 'нашел 3';
		}
	</code>
		</pre>
	<p>2-й вариант: через приведение числа к массиву (Тут есть недоработка - скрипт находит все нужные числа, только во
		всем массиве, а не в первой ячейке.) </p>
	<pre>
	<code>

	$var = 12345;
	$arr = str_split($var);
	if(in_array(1, $arr)) {
		echo 'нашел 1';
	}
	if(in_array(2, $arr)) {
		echo 'нашел 2';
	}
	if(in_array(3, $arr)) {
		echo 'нашел 3';
	}

	</code>
</pre>
	<h3> урок 39.4</h3>
	<p>Дано трехзначное число. Найдите сумму цифр этого числа.</p>
	<pre>
	<code>
	$var = 345;
	$var= (string)$var;
	echo $var[0]+$var[1]+$var[2];
	</code>
	</pre>

	<h3> урок 39.5</h3>
	<p>Дано число из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.</p>
	<pre>
	<code>
	$var = 456456;
	$var= (string)$var;
	$sum1 = $var[0]+$var[1]+$var[2];
	$sum2 = $var[3]+$var[4]+$var[5];
	if($sum1 === $sum2) {
		echo 'сумма первых трех чисел  = суммер трех вторых';
	} else {
		echo 'сумма первых трех чисел  не = суммер трех вторых';
	}
	</code>
	</pre>

	<h3> Не из урока, нашел в инете для моего урока, может потом пригодиться</h3>
	<p>как заменить первое число на другое?</p>
	<pre>
	<code>
	$sum = 3456789;
	$sum = (string)$sum;
	$sum[0] = 5;
	echo $sum;
		//выводит на экран 5456789
	</code>
	</pre>

	<p>находим первое и последнее число - не важно какого размера число</p>
	<pre>
	<code>
	 $sum = 3456789;
	 echo substr($sum, 0,1);
	 echo substr($sum, -1);
		//выводит на экран 39
	</code>
	</pre>

	<h3> урок 40.1</h3>
	<p>Переменная $num может принимать значения 1, 2, 3 или 4. Определите, в какую пору года попадает значение этой переменной. Решить через "switch " </p>
	<pre>
	<code>
	$num = '3'; // выведет лето

	switch($num) {
		case '1':
			echo 'зима';
			break;
		case '2':
			echo 'весна';
			break;
		case '3':
			echo 'лето';
			break;
		case '4':
			echo 'осень';
			break;
		default:
			echo 'Выбирите число от 1 до 4';
		break;
	}
	</code>
	</pre>
</form>
</body>
</html>
