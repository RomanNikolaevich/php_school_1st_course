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

			$arr = [10, 20, 30, 50, 235, 3000];

	foreach ($arr as $value){
			$value =(string)$value;
			if($value[0] ==1 || $value[0]==2 ||$value[0]==5 ){
				$valueNew[] = $value;
			}
	}
	print_r($valueNew);

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
		$sum1 = 0;
		$sum2 = 0;

	foreach (range(1, 19) as $key => $value) {// сделал массив от 1 до 19
		$value =(string)$value;
		if($value[0] ==1 && $sum2 < 100){ //отобрал с него только те что начинаются на "1"

			$sum2 += $value;
			/*echo $sum2.'<br>';*/
			echo count // не работает -долно было посчитать сколько цикло понадобилось, чтобы сумма значений превысила "100"
		}
	}


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

	<h3> урок 60.3</h3>
	<p>С помощью цикла заполните массив числами от 1 до 100.</p>
	<pre>
	<code>
	$arr = [];

	for($i=0; $i<100; $i++){
	$arr[] = $i + 1;
	}
	print_r($arr);
	</code>
	</pre>

	<h3> урок 60.4</h3>
	<p>С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99..</p>
	<pre>
	<code>
	$arr = [];

	for ($i = 0; $i < 100; $i=$i+2) {
		$arr[] = $i+1;
	}
	print_r($arr);
	</code>
	</pre>

	<h3> урок 61.1</h3>
	<p>С помощью цикла for выведите все элементы массива на экран.</p>
	<pre>
	<code>
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$length = count($arr);

	for ($i = 0; $i < $length; $i++) {
		echo $arr[$i];
	}
	</code>
	</pre>

	<h3> урок 61.2</h3>
	<p>С помощью цикла for выведите на экран все элементы этого массива, кроме последнего.</p>
	<pre>
	<code>
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$length = count($arr);

	for ($i = 0; $i < $length-1; $i++) {
		echo $arr[$i];
	}
	</code>
	</pre>

	<h3> урок 61.3</h3>
	<p>С помощью цикла for выведите на экран первую половину элементов этого массива.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$length = count($arr);

	for ($i = 0; $i < $length/2; $i++) {
		echo $arr[$i];
	}
	</code>
	</pre>

	<h3> урок 61.4</h3>
	<p>Найти сумму всех элементов массива, кроме нулевого</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$sum = 0;
	$length = count($arr);

	for ($i = 1; $i < $length; $i++) {
		$sum += $arr[$i];
	}

	echo $sum;
	</code>
	</pre>

	<h3> урок 62.1</h3>
	<p>Дан массив с числами. Переберите этот массив циклом и возведите каждый элемент этого массива в квадрат.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);

	for ($i = 0; $i < $length; $i++) {
		$arr[$i] = $arr[$i] ** 2;
	}

	var_dump($arr);
	</code>
	</pre>

	<h3> урок 62.2</h3>
	<p>Дан массив с числами. Переберите этот массив циклом и отнимите от каждого элемента единицу.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);

	for ($i = 0; $i < $length; $i++) {
		$arr[$i] --;
	}

	print_r($arr);
	</code>
	</pre>

	<h3> урок 62.3</h3>
	<p>Дан массив с числами. Переберите этот массив циклом и прибавьте к каждому элементу 10.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);

	for ($i = 0; $i < $length; $i++) {
		$arr[$i] +=10;
	}

	print_r($arr);
	</code>
	</pre>

	<h3> урок 63.1</h3>
	<p>Дан следующий массив с работниками и их зарплатами. Увеличьте зарплату каждого работника на 10%.</p>
	<pre>
	<code>
	$arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];

	$length = count($arr);
	foreach($arr as &$value) {
		$value += 1 / 10 * $value;
}
	print_r($arr);
	</code>
	</pre>

	<h3> урок 63.2</h3>
	<p>Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась только тем работникам, у которых она меньше или равна 400.</p>
	<pre>
	<code>
	$arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];

	$length = count($arr);
	foreach($arr as &$value) {
		if($value <= 400){
		$value += 1 / 10 * $value;
		}
}
	print_r($arr);
	</code>
	</pre>

	<h3> урок 63.3</h3>
	<p>Найдите сумму ключей этого массива и поделите ее на сумму значений.</p>
	<pre>
	<code>
		$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
	$totalKey = 0;
	$totalVal = 0;
	$total = 0;
	foreach ($arr as $key => $value){
		$totalKey += $key;
		$totalVal += $value;
		$total = $totalKey / $totalVal;
	}
	echo "sum $totalKey<br>";
	echo "sum $totalVal<br>";
	echo "sum $total<br>";
	</code>
	</pre>

	<h3> урок 63.4</h3>
	<p>Запишите ключи этого массива в один массив, а значения - в другой.</p>
	<pre>
	<code>
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
	foreach ($arr as $key => $value){
		$keyNew[] = $key;
		$valueNew[] = $value;
	}
	print_r($keyNew);
	print_r($valueNew);

	</code>
	</pre>

	<h3> урок 63.5</h3>
	<p>Запишите в новый массив элементы, значение которых начинается с цифры 1 или цифры 2.</p>
	<pre>
	<code>
	$arr = [
		1 => 125,
		2 => 225,
		3 => 128,
		4 => 356,
		5 => 145,
		6 => 281,
		7 => 452,
	];
	foreach ($arr as $value){
			$value =(string)$value;
			if($value[0] ==1 || $value[0]==2){
				$valueNew[] = $value;
			}
				}
	print_r($valueNew);

	</code>
	</pre>

	<h3> урок 64.1</h3>
	<p>Дан массив с числами. Переберите его циклом и в каждой итерации цикла выведите следующий элемент массива.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$length = count($arr);

	for ($i = 0; $i < ($length-1); $i++) { //у счетчика длины убрали 1, чтобы не выдавало ощибку
		echo $arr[$i + 1]; //23456789 - а тут наоборот благодаря добавлении +1 мы выводим следующие элементы
	}
	</code>
	</pre>

	<h3> урок 64.2</h3>
	<p>Дан массив с числами. Переберите его циклом и в каждой итерации цикла выведите следующий элемент массива.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$length = count($arr);

	for ($i = 0; $i < ($length-1); $i++) {
		echo $arr[$i] + $arr[$i + 1].',  ';
	}
	</code>
	</pre>

	<h3> урок 64.3</h3>
	<p>Дан массив с числами. Переберите его циклом и в каждой итерации цикла выведите два предыдущих элемента массива.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$length = count($arr);

	for ($i = 1; $i < $length; $i++) {
		echo $arr[$i - 1].$arr[$i - 1].', '; //11, 22, 33, 44, 55, 66, 77, 88,
	}
	</code>
	</pre>

	<h3> урок 64.4</h3>
	<p>Модифицируйте предыдущую задачу так, чтобы в каждой итерации цикла выводилась сумма двух предыдущих элементов и текущего элемента массива.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$length = count($arr);

	for ($i = 1; $i < $length; $i++) {
		echo $arr[$i - 1] + $arr[$i - 1] + $arr[$i].', '; //4, 7, 10, 13, 16, 19, 22, 25,
	}
	</code>
	</pre>


	<h3> урок 64.5</h3>
	<p>Дан массив с числами. Переберите его циклом и в каждой итерации цикла выведите сумму предыдущего, текущего и следующего элементов массива.</p>
	<pre>
	<code>
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$length = count($arr);

	for ($i = 1; $i < ($length-1); $i++) {
		echo $arr[$i - 1] + $arr[$i] + $arr[$i+1].', '; //6, 9, 12, 15, 18, 21, 24,
	}
	</code>
	</pre>

	<h3> урок 65.1</h3>
	<p>Получение чисел Фибоначчи в PHP. Эти числа представляют собой последовательность, в которой первые два числа равны 0 и 1, а каждое последующее число равно сумме двух предыдущих чисел.</p>
	<pre>
	<code>
	$one = 0;
	$two = 1;

	for ($i = 1; $i <= 10; $i++) {
		$current = $one + $two;

		$one = $two;
		$two = $current;

		echo $current . '<br>';
	}
	</code>
	</pre>

	<h3> урок 65.2</h3>
	<p>Решите задачу на нахождение ряда чисел, каждое из которых равно сумме трех предыдущих, а первые три числа равны 0, 1 и 2.</p>
	<pre>
	<code>
	$one = 0;
	$two = 1;
	$three = 2;

	for ($i = 1; $i <= 10; $i++) {
		$current = $one + $two + $three;//5

		 $one = $two;
		 $two = $three;
		 $three = $current; //5

		echo $current . '<br>';
	}
	</code>
	</pre>

	<h3> урок 66.1</h3>
	<p>Выведите на экран следующую пирамидку:

		xx
		xxxx
		xxxxxx
		xxxxxxxx
		xxxxxxxxxx</p>
	<pre>
	<code>
	$str = '';

	for ($i = 0; $i < 5; $i++) {
		$str .= 'xx';
		echo $str. '<br>';
	}
	</code>
	</pre>

	<h3> урок 66.2</h3>
	<p>Выведите на экран следующую пирамидку:

		1
		333
		55555
		7777777
		999999999</p>
	<pre>
	<code>
	for ($i = 1; $i <= 9; $i=$i+2) {
		for ($j = 1; $j <= $i; $j++) {
			echo $i;
		}
		echo '<br>';
	}
	</code>
	</pre>

	<h3> урок 66.3</h3>
	<p>Выведите на экран следующую пирамидку:

		xxxxxxxxxx
		xxxxxxxx
		xxxxxx
		xxxx
		xx</p>
	<pre>
	<code>
	for ($i = 5; $i >= 1; $i--) {
		$str = '';
		for ($j = 0; $j < $i*2; $j++) {
			$str .= 'x';
		}
		echo $str . '<br>';
	}
	</code>
	</pre>

	<h3> урок 66.4</h3>
	<p>Выведите на экран следующую пирамидку:

		999999999
		88888888
		7777777
		666666
		55555
		4444
		333
		22
		1</p>
	<pre>
	<code>
		for ($i = 9; $i >= 1; $i--) {
		$str = '';
		for ($j = 0; $j < $i; $j++) {
			$str .= $i;
		}
		echo $str . '<br>';
	}
	</code>
	</pre>

	<h3> урок 67.2</h3>
	<p>С помощью цикла сформируйте следующий массив:

		['11111', '22222', '33333', '44444', '55555']</p>
	<pre>
	<code>
	$arr = [];
	for ($i = 1; $i <= 5; $i++) {
		$str = '';
		for ($j = 0; $j < 5; $j++) {
			$str .= $i;
		}
		$arr[] = $str;
	}
	var_dump($arr);
	</code>
	</pre>

	<h3> урок 68.1</h3>
	<p>Выведите с помощью цикла столбец чисел от 1 до 100.</p>
	<pre>
	<code>
	for ($i = 1; $i <= 100; $i++) {
		echo $i.', ';
	}
	</code>
	</pre>


	<h3> урок 68.2</h3>
	<p>Выведите с помощью цикла столбец чисел от 100 до 1.</p>
	<pre>
	<code>
	for ($i = 100; $i >= 1; $i--) {
		echo $i.', ';
	}
	</code>
	</pre>

	<h3> урок 68.3</h3>
	<p>Выведите с помощью цикла столбец четных чисел от 1 до 100.</p>
	<pre>
	<code>
	for ($i = 2; $i <= 100; $i=$i+2) {
		echo $i.', ';
	}
	</code>
	</pre>

	<h3> урок 68.4</h3>
	<p>Заполните массив 10-ю иксами с помощью цикла.</p>
	<pre>
	<code>
	$arr = [];
	$str = '';

	for ($i = 0; $i <= 10; $i++) {
		$str = 'x';
		$arr[] = $str;
	}

	var_dump($arr);
	</code>
	</pre>

	<h3> урок 68.5</h3>
	<p>Заполните массив числами от 1 до 10 с помощью цикла.</p>
	<pre>
	<code>
	$arr = [];
	$str = '';

	for ($i = 0; $i <= 10; $i++) {
		$str = $i;
		$arr[] = $str;
	}

	var_dump($arr);
	</code>
	</pre>

	<h3> урок 68.6</h3>
	<p>Дан массив с числами. С помощью цикла выведите только те элементы массива, которые больше нуля и меньше 10-ти.</p>
	<pre>
	<code>
	$arr = [-3, 0, 1, 2, 4, 6, 7, 10, 12, 15, 25];
		foreach ($arr as $value){
			if($value > 0 && $value < 10){
				$valueNew[] = $value;
			}
		}
	print_r($valueNew);
	</code>
	</pre>

	<h3> урок 68.7</h3>
	<p>Дан массив с числами. С помощью цикла проверьте, что в нем есть элемент со значением 5.</p>
	<pre>
	<code>
$arr = [-3, 0, 1, 2, 4, 5, 6, 7, 10, 12, 15, 25];
		foreach ($arr as $value){
			if($value ==5){
				$valueNew[] = $value;
			}
		}
	print_r($valueNew);
	</code>
	</pre>

	<h3> урок 68.8</h3>
	<p>Дан массив с числами. С помощью цикла найдите сумму элементов этого массива.</p>
	<pre>
	<code>
	$arr = [-3, 0, 1, 2, 4, 5, 6, 7, 10, 12, 15, 25];
	$sum = 0;
		foreach ($arr as $value){
			$sum += $value;
		}
	print_r($sum); // 84
	</code>
	</pre>

	<h3> урок 68.9</h3>
	<p>Дан массив с числами. С помощью цикла найдите сумму квадратов элементов этого массива.</p>
	<pre>
	<code>
	$arr = [-3, 0, 1, 2, 4, 5, 6, 7, 10, 12, 15, 25];
	$sum = 0;
		foreach ($arr as $value){
			$sum += $value**2;
		}
	print_r($sum); //1234
	</code>
	</pre>

	<h3> урок 68.10</h3>
	<p>Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов, делить на количество).</p>
	<pre>
	<code>
$arr = [-3, 0, 1, 2, 4, 5, 6, 7, 10, 12, 15, 25];
$sum = 0;

	foreach ($arr as $value){
		$sum += $value;
		$total = $sum / count($arr);
		}
	print_r($total); //7
	</code>
	</pre>

	<h3> урок 68.11</h3>
	<p>Напишите скрипт, который будет находить факториал числа. Факториал - это произведение всех целых чисел, меньше данного, и его самого.</p>
	<pre>
	<code>
	$result = 1;
	$n = 5;
	for($i = 1; $i <=$n; $i++) {
		$result *= $i;
	}
	echo $result; //5*4*3*2*1=120
	</code>
	</pre>

	<h3> урок 69.1</h3>
	<p>Выведите с его помощью элементы с текстом 'l', 'e', 'g' и 'a'.</p>
	<pre>
	<code>
$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];
	echo $arr [3][2].', '.$arr[1][1].', '.$arr[2][0].', '.$arr[0][0];
	</code>
	</pre>

	<h3> урок 69.2</h3>
	<p>Дан следующий массив. Найдите сумму всех его элементов.</p>
	<pre>
	<code>
	$arr = [[1, 2], [3, 4], [5, 6]];
			$sum = $arr[0][0]+$arr[0][1]+$arr[1][0]+$arr[1][1]+$arr[2][0]+$arr[2][1];
	echo $sum; //21
	</code>
	</pre>

	<h3> урок 69.3</h3>
	<p>Дан следующий массив. Найдите сумму всех его элементов.</p>
	<pre>
	<code>
	$arr = [[[1, 2], [3, 4],], [[5, 6], [7, 8],],];
	$sum = $arr[0][0][0] + $arr[0][0][1] + $arr[0][1][0] + $arr[0][1][1]
		+ $arr[1][0][0] + $arr[1][0][1] + $arr[1][1][0] + $arr[1][1][1];
	echo $sum; //36
	</code>
	</pre>

	<h3> урок 69.4</h3>
	<p>Выведите с помощью этого массива имя первого мальчика и имя второй девочки.</p>
	<pre>
	<code>
	$arr = [
		'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
		'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
	];
	echo $arr['boys'][1]; //Коля
	echo $arr['girls'][2]; //Маша
	</code>
	</pre>

	<h3> урок 69.6</h3>
	<p>Дан следующий массив. Выведите с помощью этого массива сумму зарплат первого и третьего юзера.</p>
	<pre>
	<code>
	$arr = [
			['name' => 'user1', 'age' => 30, 'salary' => 1000,],
			['name' => 'user2', 'age' => 31, 'salary' => 2000,],
			['name' => 'user3', 'age' => 32, 'salary' => 3000,],
		];
	echo $arr[0]['salary']+$arr[2]['salary']; //4000
	</code>
	</pre>

	<h3> урок 69.7</h3>
	<p>Найдите сумму всех элементов приведенного массива. Обращайтесь к каждому элементу по отдельности, без цикла.</p>
	<pre>
	<code>
	$arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];

	echo $arr[0][0].'+'.$arr[0][1].'+'.$arr[0][2].'+'.$arr[0][3][0].'+'.$arr[0][3][1].'+'.$arr[0][3][2][0].'+'.$arr[0][3][2][1].'+'.$arr[1][0].'+'.$arr[1][1][0].'+'.$arr[1][1][1].'='.$arr[0][0]+$arr[0][1]+$arr[0][2]+$arr[0][3][0]+$arr[0][3][1]+$arr[0][3][2][0]+$arr[0][3][2][1]+$arr[1][0]+$arr[1][1][0]+$arr[1][1][1]; // 1+2+3+4+5+6+7+8+9+10=55
	</code>
	</pre>


	<h3> урок 70.1</h3>
	<p>С помощью двух вложенных циклов найдите сумму элементов этого массива</p>
	<pre>
	<code>
	$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
	$sum = 0;
	foreach ($arr as $sub) {
		foreach ($sub as $elem) {
			$sum += $elem;
		}
	}
	echo $sum;
	</code>
	</pre>

	<h3> урок 70.2</h3>
	<p>С помощью трех вложенных циклов найдите сумму элементов этого массива.</p>
	<pre>
	<code>
	$arr = [
			[[1, 2, 3], [6, 7, 8], [3, 8, 4], [6, 7, 9],],
			[[9, 1, 2], [4, 5, 6],],
			[[9, 1, 2], [4, 5, 6], [5, 6, 3],],
		];
	$sum = 0;
	foreach($arr as $sub) {
		foreach($sub as $subsub) {
			foreach($subsub as $elem) {
				$sum += $elem;
			}
		}
	}
	echo $sum; //132
	</code>
	</pre>

	<h3> урок 70.3</h3>
	<p>Выведите элементы этого массива в формате ключ-значение.</p>
	<pre>
	<code>
	$arr = [
			['name' => 'user1', 'age' => 30, 'salary' => 1000,],
			['name' => 'user2', 'age' => 31, 'salary' => 2000,],
			['name' => 'user3', 'age' => 32, 'salary' => 3000,],
		];
	foreach($arr as $key1 => $sub) {
		foreach($sub as $key2 => $elem) {
			echo $key2.'-'.$elem.'<br>';
		}
	}
	</code>
	</pre>

	<h3> урок 70.4</h3>
	<p>С помощью двух вложенных циклов выведите элементы этого массива в формате имя группы - имя юзера.</p>
	<pre>
	<code>
	$arr = [
		'group1'  => ['user11', 'user12', 'user13', 'user43'],
		'group2'  => ['user21', 'user22', 'user23'],
		'group3'  => ['user31', 'user32', 'user33'],
		'group4'  => ['user41', 'user42', 'user43'],
		'group5'  => ['user51', 'user52'],
	];
	foreach($arr as $key1 => $sub) {
		foreach($sub as $key2 => $elem) {
			echo $key1.'-'.$elem.'<br>';
		}
	}
	</code>
	</pre>
</form>
</body>
</html>
