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
		<link href="/normalize.css" rel="stylesheet" />
		<link href="/style.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>

	<body>
<?php
$arr = [
	'item 1',
	'item 2',
	'item 3',
	'item 4',
	'item 5',
	'item 6',
	'item 7',
	'item 8',
	'item 9',
	'item 10',
	'item 11',
	'item 12',
	'item 13',
	'item 14',
	'item 15',
	'item 16',
	'item 17',
	'item 18',
	'item 19',
	'item 20',
	]
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
	<div class="row">
		<?php $i = 1; foreach($arr as $item): ?>
		<div class="col-md-3"><?= $item ?></div>
		<?php if($i % 4 == 0): ?>
	</div><div class="row">
		<?php endif; ?>
		<?php $i++; endforeach; ?>
	</div>
</div>

</body>
</html>
