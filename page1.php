<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');
session_start();
setcookie("user", "Sonoo");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/normalize.css" rel="stylesheet"/>
</head>
<body>

<?php
/**
 * Script Name: PHP Form Login Remember Functionality with Cookies
 * Source: www.TutorialsClass.com
 **/
?>
<form action="page2.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) {
			echo $_COOKIE["username"];
		} ?>" class="input-field">
	</p>
	<p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) {
			echo $_COOKIE["password"];
		} ?>" class="input-field">
	</p>
	<p><input type="checkbox" name="remember"/> Remember me
	</p>
	<p><input type="submit" value="Login"></span></p>
</form>


</body>
</html>


