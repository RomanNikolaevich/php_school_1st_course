<?php
error_reporting(-1);
ini_set('display_errors', 'on');
header('Content-Type: text/html; charset=utf-8');
?>
<?php
if($_SERVER['REMOTE_ADDR'] != '127.0.0.1') {
	include '404.php';
} else {
	include 'admin.php';
}
?>
<?php
/*if(isset($_POST['login'], $_POST['pass'])) {

}*/
?>
<!DOCTYPE html>
<body>
<div class="block">
	<div class="conteiner-content">
		<div class="conteiner-content-block">
		<form action="" method="post"> <h2>Вход для админов</h2>
			<div>Заполните логин:<input type="text" name="login"></div>
			<div>Заполните пароль:<input type="password" name="pass"></div>
			<div><input type="submit" name="submit" value="Отправить данные"></div>
		</form>
		</div>
	</div>

</div>
</body>

</html>




