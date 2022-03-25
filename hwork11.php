<?php
/*
 * * Ядро сайта, сюда лучше не лезть просто так!
 */
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>Заголовок страницы</title>
	<meta name="description" content="Описание страницы" />
	<meta name="keywords" content="Ключевые слова через запятую" />
	<link href="/normalize.css" rel="stylesheet" />
	<link href="/style11.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<?php
/*
 * Используя условия и циклы сделать таблицу в 5 колонок и 3 строки (5x3), отметить разными цветами часть ячеек
 */
?>
<?php
/*
$x = 1; //строки
$y = 1; //колонки
echo '<table>';
while($x <= 3) {
	echo '<tr>';
	while($y <= 5) {
		echo '<td>'.'Ячейка'.'</td>';
	}
	echo '</tr>';
	echo $x;
	++$x;
	++$y;
}
echo '</table>';*/

$x = 1; //строки
$y = 1; //колонки
echo '<table>';
while ($x <= 3) {
	echo '<tr>';
	++$x;
	} while ($y<=5) {
		echo '<td>'.'Ячейка'.'</td>';
		++$y;
	}
	echo '</tr>';
	++$x;
echo '</table>';
// 1:15:53 / 1:57:27
?>
<caption>Табличка сгенерированная через php</caption>
<?php
/*
$x = 3; //строки
$y = 5; //колонки
echo '<table border="1">';
for ($tr=1; $tr<=$x; $tr++) {
	echo '<tr>';
	for ($td=1; $td<=$y; $td++) {
		echo '<td>'.'Ячейка'.'</td>';
	}
	echo '</tr>';
}
echo '</table>';
*/
?>

</body>
</html>