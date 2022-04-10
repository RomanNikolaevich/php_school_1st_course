<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Roma Agro test site</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
<div class="block">
	<?php
	include "header.php";
	?>
	<div class="conteiner-content">
		<?php
		if(isset($_GET['page'])) {
			/*echo $_GET['page'];*/
		}
		else {
			$_GET['page'] = 'main';
		}
		?>
		<?php
		include $_GET['page'].'.php';
		?>
	</div>
	<div class="conteiner-content">
		<?php
		include 'footer.php';
		?>
	</div>
</div>
</body>

</html>
