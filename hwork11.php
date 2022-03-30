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
	<link href="css/normalize.css" rel="stylesheet" />
	<link href="css/style11.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<?php
/*
 * Используя условия и циклы сделать таблицу в 5 колонок и 3 строки (5x3), отметить разными цветами часть ячеек
* $x = 5; // колонка
* $y = 3; // строчка
* ($x = 2 && $y = 1) 1-я строка 2-я ячейка закрасить в желтый цвет.
* ($x = 3 && $y = 2)  2-я строка 3-я ячейка закрасить в зеленый цвет.
* ($x = 3 && $y = 3)  3-я строка 3-я ячейка закрасить в зеленый цвет.
* ($y = 3) закрасить всю 3-ю строчку (tr) в красный цвет.
 */
?>
<caption>Табличка через цикл FOR и раскраска через if, elseif, else </caption>
<?php

$x = 5; //колонка (td)
$y = 3; //строка (tr)
echo '<table>';
	for ($tr=1; $tr<=$y; $tr++) {
	echo '<tr>';
		for ($td=1; $td<=$x; $td++) {
			if($tr == 2 && $td >=3 && $td <= 4 ) {
				echo '<td class="green">'.$tr.'-'.$td.'</td>';
			} elseif($tr == 3) {
				echo '<td class="red">'.$tr.'-'.$td.'</td>';
			} elseif($tr ==1 && $td ==2) {
				echo '<td class="yellow">'.$tr.'-'.$td.'</td>';
				} else {
				echo '<td>'.$tr.'-'.$td.'</td>';
			}
		//echo '<td>'.'Ячейка'.'</td>';
		}
		echo '</tr>';
	}
	echo '</table>';

?>

</body>
</html>