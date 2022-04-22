<?php
if(isset($_SESSION['login'])) {
	$login = 'Здравствуйте, '.$_SESSION['login'].'!';
}
// Проверяем, пусты ли переменные логина и id пользователя
if(empty($_SESSION['login']) or empty($_SESSION['id'])) {
	?>
	<div class="container mt-4">
		<div class="row">
			<div class="col">
				<!-- Форма авторизации -->
				<h2>Форма входа</h2>
				<form action="login.php" method="post">
					<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"
						   required><br>
					<input type="password" class="form-control" name="password" id="pass" placeholder="Введите пароль"
						   required><br>
					<button class="btn btn-suc" name="do_login" type="submit">Авторизоваться</button>
				</form>
				<br>
				<p>Если вы еще не зарегистрированы, тогда нажмите <a href="index.php?page=regin">здесь</a>.</p>
				<p>Вернуться на <a href="index.php">главную</a>.</p>
			</div>
		</div>
	</div>
<?php }
else // Если не пусты, то
{
	echo "<br/><br/>Вы вошли на сайт, как ".$_SESSION['login']."<br><br/>";
}
?>






