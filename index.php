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
$names = array('Вася', 'Петя', 'Илона', 'Даша');
echo '<pre>'.print_r($names,1).'</pre>';
foreach($names as $k=>$v) {
	if ($v == 'Илона') { // если цикл дошел в массиве до "Илона", то
		continue; // то цикл оборвется и "Илона" не выведется
	} echo $v.', '; // на экран выведется только "Вася, Петя, Даша,"
}
?>



</div>
</body>
</html>