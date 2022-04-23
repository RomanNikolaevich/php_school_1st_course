<?php
if(!empty($_POST["remember"])) {
	//setcookie ("login",$_POST["login"],time()+ 3600);
	//setcookie ("password",$_POST["password"],time()+ 3600);
	echo '<h3>Добро пожаловать '.$_POST['login'].'</h3>';
	echo "<p>Cookies успешно включены</p>";
	//echo $_POST["login"];
	//echo $_POST["password"];
	echo $_COOKIE["login"];
	echo $_COOKIE["email"];
	echo $_COOKIE["password"];


} else {
	setcookie("login","");
	setcookie("password","");
	echo "Cookies выключены";
}

?>


<p><a href="">Переход в панель администратора</a> </p>