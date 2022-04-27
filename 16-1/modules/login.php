<?php
//login();
$loginAdm = 'Roman';
$emailAdm = 'roma@gmail.com';
$passAdm = '123123';

if(isset($_POST['login'], $_POST['email'], $_POST['password'], $_POST['do_login'])) {
	if(($_POST['login'] === $loginAdm)
		&& ($_POST['email'] === $emailAdm)
		&& ($_POST['password'] === $passAdm)
	) {
		$_SESSION['access'] = 1;
		setcookie('access', 1, time() + 3600, '/');
		header('index.php');
	} else {
		header('index.php?page=login');
	}
}

