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

echo 'Перед циклом<br>';
$x = 1;
do { // do - что делать?
	echo $x.'<br>';
	++$x;
} while ($x < 10); // обратить внимание мы местами поменяли действия с условием
echo 'После цикла';

1:20:51 / 1:57:27
?>



</div>
</body>
</html>