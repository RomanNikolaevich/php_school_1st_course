<?php
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
	<link href="css/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<?php
/*lesson 2"
*Провести самостоятельно следующие приведения к типам:
К числу:
1) 'слово'
2) '33 коровы'
3) '1между1'
4) 'сумма11'
5) ''
*/

$str1 = 'слово';
$int1 = (int) $str1;
var_dump($int1);

$str2 = '33 коровы';
$int2 = (int) $str2;
var_dump($int2);

$str3 = '1между1';
$int3 = (int) $str3;
var_dump($int3);

$str4 = 'сумма11';
$int4 = (int) $str4;
var_dump($int4);

$str5 = '\'\''; // обратный слеш избавляет от ошибок кавычек
$int5 = (int) $str5;
var_dump($int5);


?>
</body>
</html>