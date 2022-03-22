<?php
/*
 * * Ядро сайта, сюда лучше не лезть просто так!
 */
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');
/*
 * CONTROLLER BLOCK + MODEL BLOCK
 * В этой части идет создание и обработка PHP кода
 * Тут мы пишем код и коментарии к нему
 */
	/*$num=7;
 	$text = 'Hello World';
	$h1 = 'Рабочая зона для тестирования';
	file_put_contents('1.txt', $text); /*помещаем информацию в файл*/
	/*$text.=' Zimbabve'; /*с точной перед = прибавит значение к предыдущему значению переменной*/
	/*define('TEXT', 'Вступительный урок') /*константа*/

	$text = 'Произвольный текст'; // string - строка, текст
	$num = 10; // int, integer - целые числа
	$float = 1.2; //float - дробные, с плавающей запятой
	$bool = true; // bool, boolean (true или false)

	//$result = $text + $num;
/*
 * VIEW BLOCK /  Вид сайта
 * в этой части идет вывод HTML и PHP
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<title>Заголовок страницы</title>
	<meta name="description" content="Описание страницы" />
	<meta name="keywords" content="Ключевые слова через запятую" />
	<link href="/normalize.css" rel="stylesheet" />
	<link href="/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
<header class="content clearfix">
	<a href="/" class="logo"><img src="/img/logo.jpg" alt="logo"</a>
	<nav>
		<a href="/">home</a>
		<a href="#">Пункт 1</a>
		<a href="#">Пункт 2</a>
		<a href="#">Пункт 3</a>
		<a href="#">Пункт 4</a>
		<a href="#">Контакты</a>
	</nav>
	<a href="#" class="btn">Авторизация</a>
</header>

<main>
	#php
	<?php
	$num1 = 10;
	$num2 = 15;
	$num1 = (bool) $num1; // еще вариант
	var_dump($num1); //
	exit;
	?>

	<h1>
		<?php
		echo $text;
		?>
	</h1>
	<h1><?=$h1;?></h1>
	<?php
	echo $num;
	echo $text;

	?>
	<h1><?=TEXT; ?></h1>
	<div class="content s16">
		<?php
		echo '<b>Hello World</b>';
		echo  '1+1=';
		echo (1+1);
		?>
	<p>
		Эта книга поможет вам разобраться со всеми возможностями, которые предоставляет этот замечательный CSS-препроцессор. Неважно, новичок вы, впервые решивший разобраться с препроцессорами или бородатый веб-разработчик, который повидал на своём веку многие технологии — каждый найдёт что-нибудь интересное для себя.
	</p>
		<p>
			На текущий момент основная часть книги написана и соответствует реальности. Хотя работа ещё далека от того момента, когда можно сказать «хватит» — книгу уже можно рекомендовать к прочтению.
		</p>
	</div>
</main>
</body>

</html>