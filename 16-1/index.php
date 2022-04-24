<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');
session_start();
//setcookie('login', 'Roman', time() + 3600 * 24 * 30 * 12, '/');

$page = $_GET['page'] ?? 'main';
$adminIp = '127.0.0.1';
$adminVisability = $_SERVER['REMOTE_ADDR'] === $adminIp;

if($_SERVER['REMOTE_ADDR'] !== $adminIp && $page === 'login') {
	$page = '404';
}
$allowed = ['index', 'main', 'contacts', 'aboutus', 'partners', 'products', 'services', 'regin', 'login', 'logout', 'admin'];
if(!in_array($page, $allowed)) {
	$page = '404';
}
$path = 'pages/'.$page.'.php';

//нашел код на сайте, но он не работает:
/*$name = $_POST['login'];
setcookie('login', $name, time() + 3600 * 24 * 30 * 12);
if (isset($_COOKIE['login'])) {
$name = $_COOKIE['login'];
echo "<h1>Hello $name, it is nice to see you again.</h1>";*/

//login:
function login() {
	if(!isset($_POST['login'], $_POST['pass'])) {
		if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			include 'pages/login.php';
		}
	}
}

//админка:
function adminEnter() {
	if(!empty($_POST["remember"])) {
		//setcookie ("login",$_POST["login"],time()+ 3600);
		//setcookie ("password",$_POST["password"],time()+ 3600);
		echo '<h3>Добро пожаловать '.$_POST['login'].'</h3>';
		echo "<p>Cookies успешно включены</p>";
		//echo $_POST['login'];
		//echo $_POST['password'];
		echo $_COOKIE['login'];
		echo $_COOKIE['email'];
		echo $_COOKIE['password'];
		echo '<pre>';
		echo 'SESSION: ';
		print_r($_SESSION);
		echo 'COOKIE: ';
		print_r($_COOKIE);
	}
	else {
		setcookie("login", "");
		setcookie("password", "");
		echo "Cookies выключены";
		header('location:login.php', true, 303);// с помощью 303 редиректа переадресовать на внутреннюю страницу сайта.
		exit;
	}
}

//logout:
function logout() {
	// Производим выход пользователя
	unset($_SESSION['login']);//закрытие сессии по логину
	session_destroy();//удаление сессии

	setcookie('login', '', time() - 3600, '/');

	//setcookie("login","");
	//setcookie("password","");

	// Редирект на главную страницу
	header('location:login.php', true, 303);//переход на главную
	/*exit;*/
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Roma Agro test site</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/normalize.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="block">
	<?php include 'components/header.php'; ?>

	<?php include $path; ?>

	<div class="conteiner-content">
		<?php include 'components/footer.php'; ?>
	</div>
</div>
</body>
</html>
