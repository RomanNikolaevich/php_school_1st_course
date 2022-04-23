<?php
if(!isset($_POST['login'], $_POST['pass'])) {
	if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		setcookie("login", "Roman", time() + 3600 * 24 * 30 * 12, '/');
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
				<p>Если вы еще не зарегистрированы, тогда нажмите <a href="../index.php?page=regin">здесь</a>.</p>
				<p>Вернуться на <a href="../index.php">главную</a>.</p>
			</div>
		</div>
	</div>
<?php }
?>







