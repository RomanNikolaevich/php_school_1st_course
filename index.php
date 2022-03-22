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
<div>

<?php

$country = [
	'Russia',
	'Ukraine',
	'Israel',
];
$countries = implode (  ', ', $country);

?>
	<p> Мы работаем со странами: <?=$countries;?>.</p>

	<?php
	$tags = 'php mysql array variable';
	$tags_array = explode(' ', $tags);
	echo '<pre>';
	print_r($tags_array);
	?>


</div>
</body>
</html>