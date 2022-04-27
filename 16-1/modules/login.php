<?php
$loginAdm = 'Roman';
$emailAdm = 'roma@gmail.com';
$passAdm = '123123';


if(filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL)) {
	if(isset($_POST['login'], $_POST['email'], $_POST['password'], $_POST['do_login'])) {

		if(($_POST['login'] === $loginAdm)
			&& ($_POST['email'] === $emailAdm)
			&& ($_POST['password'] === $passAdm)
		) {
			$_SESSION['access'] = 1;
			setcookie('access', 1, time() + 3600, '/');
			header('Location: index.php');
		}
	}
}

