<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');
session_start();
//setcookie("login", "Roman", time() + 3600 * 24 * 30 * 12, '/');

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

//logout:
function logout() {
	// Производим выход пользователя
	unset($_SESSION['login']);//закрытие сессии по логину
	session_destroy();//удаление сессии

	setcookie("login", "", time() - 3600, '/');

	//setcookie("login","");
	//setcookie("password","");

	// Редирект на главную страницу
	//header("location:login.php");//переход на главную
}

//админка:
function admin() {
	if(!empty($_POST["remember"])) {
		//setcookie ("login",$_POST["login"],time()+ 3600);
		//setcookie ("password",$_POST["password"],time()+ 3600);
		echo '<h3>Добро пожаловать '.$_POST['login'].'</h3>';
		echo "<p>Cookies успешно включены</p>";
		//echo $_POST["login"];
		//echo $_POST["password"];
		//echo $_COOKIE["login"];
		//echo $_COOKIE["email"];
		//echo $_COOKIE["password"];
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
	}
}

//login:
function login() {
	if(!isset($_POST['login'], $_POST['pass'])) {
		if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			setcookie("login", "", time() + 3600 * 24 * 30 * 12, '/');
		}
		//include 'pages/login.php';
	}
	?>
	<div class="container mt-4">
		<div class="row">
			<div class="col">
				<!-- Форма авторизации -->
				<h2>Форма входа</h2>
				<form action="index.php?page=admin" method="post">
					<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"
						   required value="<?php if(isset($_COOKIE["login"])) {
						setcookie("login", $_POST["login"], time() + 3600);
					} ?>"><br>
					<input type="email" class="form-control" name="email" id="email" placeholder="Введите Email"
						   required value="<?php if(isset($_COOKIE["email"])) {
						setcookie("email", $_POST["email"], time() + 3600);
					} ?>"><br>
					<input type="password" class="form-control" name="password" id="pass" placeholder="Введите пароль"
						   required value="<?php if(isset($_COOKIE["password"])) {
						setcookie("password", $_POST["password"], time() + 3600);
					} ?>"><br>
					<p><input type="checkbox" name="remember"/> Запомнить меня</p>
					<button class="btn btn-suc" name="do_login" type="submit">Авторизоваться</button>
				</form>
				<br>
				<p>Если вы еще не зарегистрированы, тогда нажмите <a href="index.php?page=regin">здесь</a>.</p>
				<p>Вернуться на <a href="index.php">главную</a>.</p>
			</div>
		</div>
	</div>
<?php }

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
