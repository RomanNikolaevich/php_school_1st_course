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
echo '<H1>Привет, Даня!</H1>';
echo '<p>Как там твой RUST поживает? А у меня есть уже свой сайт :)</p>';
?>



</div>
</body>
</html>