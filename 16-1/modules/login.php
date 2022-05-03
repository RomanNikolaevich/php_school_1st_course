<?php
$loginAdm = 'Roman';
$emailAdm = 'roma@gmail.com';
$passAdm = '123123';

if(isset($_POST['do_login'])) {
	if(!empty($_POST['email'])) {
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$_SESSION['emailError'] = "Это не правильный почтовый адресс!";
		} else {
			unset($_SESSION['emailError']);
		}
	}
}

if(isset($_POST['do_login'])) {
	if(!empty($_POST['login'])) {
		if (!preg_match("/^[a-zA-Z]*$/", $_POST['login'])) {
			$_SESSION['loginError'] = "Допускаются только латинские буквы";
		} else {
			unset($_SESSION['loginError']);
		}
	}
}

if(isset($_POST['login'], $_POST['email'], $_POST['password'], $_POST['do_login'])) {
	if(($_POST['login'] === $loginAdm)
		&& ($_POST['email'] === $emailAdm)
		&& ($_POST['password'] === $passAdm)
	) {
		$_SESSION['access'] = 1;
		$_SESSION['loginIsOk'] = 'welcome '.$_POST['login'];
		unset($_SESSION['enterError']);
		setcookie('access', 1, time() + 3600, '/');
		header('Location: index.php');
	} else {
		$_SESSION['enterError'] = $_POST['login'].' не найден в базе данных. Введите правильные данные или пройдите регистрацию';
	}
}


