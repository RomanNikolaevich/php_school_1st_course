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
	<p>Как известно, четные числа делятся на 2 без остатка, а нечетные - с остатком. Пусть у вас дано число. С помощью оператора % и конструкции if проверьте четное это число или нет.</p>
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
	<p>2-й вариант: через приведение числа к массиву (Тут есть недоработка - скрипт находит все нужные числа, только во всем массиве, а не в первой ячейке.) </p>
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

	<h3> урок 46.5</h3>
	<p>С помощью цикла for выведите на экран числа от 100 до 0. </p>
	<pre>
	<code>
	for($i=100; $i>=0; $i--) {
	echo $i;
	echo '<br>';
}
	</code>
	</pre>

	<h3> урок 47.3</h3>
	<p>С помощью цикла for найдите сумму нечетных чисел от 1 до 99. </p>
	<pre>
	<code>
	$result = 0;
	for($i=1; $i<=99; $i+=2) {
	$result= $result + $i;
}
echo $result;
	</code>
	</pre>

	<h3> урок 48.3</h3>
	<p>С помощью цикла foreach найдите среднее арифметическое его элементов. </p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$sum = 0;

	foreach($arr as $item) {
		$sum +=$item; //находим сумму чисел из массива = 45
		$sumMidle = $sum / count($arr); // сумму делим на количество значений в массиве (на 9)
	}
	echo $sumMidle; //ответ: 5
	</code>
	</pre>

	<h3> урок 49.2</h3>
	<p>С помощью цикла foreach выведите на экран столбец строк такого формата: user1 - возраст 30 лет </p>
	<pre>
	<code>
	$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];

	foreach($arr as $key => $elem) {
		echo $key.' - '.$elem.' лет, ';
	}
	</code>
	</pre>

	<h3> урок 50.1</h3>
	<p>С помощью цикла foreach и оператора if выведите в консоль нечетные элементы массива.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5];

	foreach ($arr as $elem) {
		if ($elem % 2 != 0) {
			echo $elem.', ';
		}
	}
	</code>
	</pre>

	<h3> урок 50.2</h3>
	<p>С помощью цикла foreach и оператора if выведите в консоль те элементы массива, которые больше 3-х, но меньше 10.</p>
	<pre>
	<code>
	$arr = [2, 5, 9, 15, 1, 4];

	foreach($arr as $elem) {
		if($elem > 3 && $elem < 10) {
			echo $elem;
		}
	}
	</code>
	</pre>

	<h3> урок 50.3</h3>
	<p>Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных элементов массива.</p>
	<pre>
	<code>
	$arr = [1, -2, 3, -4, 5, -6, 7, -8, 9];
	$sum = 0;

	foreach($arr as $elem) {
		if($elem > 0) {
			$sum += $elem;
		}
	}
	echo $sum;
	</code>
	</pre>

	<h3> урок 50.4</h3>
	<p>Выведите на экран только те числа из массива, которые начинаются на цифру 1, 2 или 5.</p>
	<pre>
	<code>
	$arr = [10, 20, 30, 50, 235, 3000];

		НЕ ПОЛУЧИЛОСЬ РЕШИТЬ!!! ОСТАВЛЮ НА ПОТОМ!!!
	</code>
	</pre>

	<h3> урок 50.5</h3>
	<p>Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным.</p>
	<pre>
	<code>
		$arr = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];

		foreach($arr as $k => $i){
		if($k>=0 && $k<=4) {
			echo $i.'<br>';
		}
		elseif ($k==5 or $k==6) {
				echo '<b>'.$i.'</b>'.'<br>';
		}
	}
	</code>
	</pre>

	<h3> урок 50.6</h3>
	<p>Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Номер текущего дня должен храниться в переменной $day.</p>
	<pre>
	<code>
			$arr = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
	$day = 0;

	foreach($arr as $k => $i){
		if($k==$day) {
			echo '<i>'.$i.'</i>'.'<br>';
		}
		elseif ($k>=0) {
			echo $i.'<br>';
		}
	}
	</code>
	</pre>

	<h3> урок 53.1</h3>
	<p>Дан массив с числами. Запустите цикл, который будет по очереди выводить элементы этого массива в консоль до тех пор, пока не встретится элемент со значением 0. После этого цикл должен завершить свою работу.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 0];

	foreach ($arr as $elem) {
		if ($elem != 0) {
			echo $elem;
		}
	}
	</code>
	</pre>

	<h3> урок 53.2</h3>
	<p>Дан массив с числами. Найдите сумму элементов, расположенных от начала массива до первого отрицательного числа.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, -5, 6, 7, -8];
	$sum=0;

	foreach($arr as $i) {
		if($i > 0) {
			$sum += $i;
		}
		elseif($i<0) {
			break;
		}
	}
	echo $sum;
	</code>
	</pre>

	<h3> урок 53.3</h3>
	<p>Дан массив с числами. Найдите позицию первого числа 3 в этом массиве (считаем, что это число обязательно есть в массиве).</p>
	<pre>
	<code>
		$arr = [-1, 33, 1, 2, 3, 4, -5, 6, 7, -8, 3];

	foreach($arr as $k => $i) {
		if($i==3) {
			echo $k; //4
			break; //останавливаем поиск, так как дальше в массиве есть еще цифра 3 в ключе 10
		}
	}
	</code>
	</pre>

	<h3> урок 53.4</h3>
	<p>Определите, сколько целых чисел, начиная с числа 1, нужно сложить, чтобы сумма получилась больше 100.</p>
	<pre>
	<code>
		НЕ ПОЛУЧИЛОСЬ РЕШИТЬ!!! ОСТАВЛЮ НА ПОТОМ!!!
	</code>
	</pre>

	<h3> урок 57.1</h3>
	<p>Дано число $num с неким начальным значением. Умножайте его на 3 столько раз, пока результат умножения не станет больше 1000. Какое число получится? Посчитайте количество итераций, необходимых для этого. Решить с помощью цикла while.</p>
	<pre>
	<code>
	$num = 3; //исходнные данные
	$i = 0; // итерации
	while($num<=1000) {
		$num=$num*3;
		$i++;
		echo $i.' - '.$num.'<br>'; //эта строчка не обязательна, но она показывает как все высчитывается.
	}
	echo 'Количество циклов: '.$i;
	</code>
	</pre>

	<p>Решите предыдущую задачу через цикл for.</p>
	<pre>
	<code>
	for ($num = 100, $i = 0; $num <= 1000; $num = $num * 3, $i++);
	echo 'Количество циклов: '.$i;
	</code>
	</pre>

	<h3> урок 58.1</h3>
	<p>С помощью цикла сформируйте строку, заполненную 5-тью нулями.</p>
	<pre>
	<code>
	$str = ''; // начальное значение - пустые кавычки

	for ($i = 0; $i < 5; $i++) {
		$str = $str . '0';
	}

	echo $str;
	</code>
	</pre>

	<h3> урок 58.2</h3>
	<p>С помощью цикла сформируйте строку '123456789' и запишите ее в переменную $str. Выведите значение этой переменной на экран.</p>
	<pre>
	<code>
	$str = '';

	for ($i = 1; $i <= 9; $i++) {
		$str = $str . $i;
	}

	echo $str;
	</code>
	</pre>

	<h3> урок 58.3</h3>
	<p>С помощью цикла сформируйте строку '987654321' и запишите ее в переменную $str. Выведите значение этой переменной на экран.</p>
	<pre>
	<code>
	$str = '';

	for ($i = 9; $i > 0; $i--) {
		$str = $str . $i;
	}

	echo $str;
	</code>
	</pre>

	<h3> урок 58.4</h3>
	<p>С помощью цикла сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $str. Выведите значение этой переменной на экран.</p>
	<pre>
	<code>
	$str = '';

	for ($i = -1; $i >= -9; $i--) {
		$str = $str . $i;
	}

	echo $str.'-';
	</code>
	</pre>

	<h3> урок 59.2</h3>
	<p>С помощью двух вложенных циклов выведите на экран следующую строку:
		11 12 13 21 22 23 31 32 33</p>
	<pre>
	<code>
	for ($i = 1; $i <= 3; $i++) {
		for ($j = 1; $j <= 3; $j++) {
			echo $i.$j.' ';
		}
	}
	</code>
	</pre>
</form>
</body>
</html>
