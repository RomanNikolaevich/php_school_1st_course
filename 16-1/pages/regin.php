<?php
if(isset($_POST['login'], $_POST['pass'], $_POST['email'])) {
	if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		echo 'Добро пожаловать '.$_POST['login'];
	}

	//echo 'GET: <pre>'.print_r($_GET, 1).'</pre>';
	//echo 'POST: <pre>'.print_r($_POST, 1).'</pre>';
}
else {// если регистрация не прошла, то выполняется блок кода расположеного ниже - скобка открылась
	?>

	<div class="container mt-4">
		<div class="row">
			<div class="col">
				<!-- Форма регистрации -->
				<h2>Форма регистрации</h2>
				<form action="signup.php" method="post">
					<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
					<input type="email" class="form-control" name="email" id="email" placeholder="Введите Email"><br>
					<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"
						   required><br>
					<input type="text" class="form-control" name="family" id="family" placeholder="Введите фамилию"
						   required><br>
					<input type="password" class="form-control" name="password" id="password"
						   placeholder="Введите пароль"><br>
					<input type="password" class="form-control" name="password_2" id="password_2"
						   placeholder="Повторите пароль"><br>
					<button class="btn btn-suc" name="do_signup" type="submit">Зарегистрировать</button>
				</form>
				<br>
				<p>Если вы зарегистрированы, тогда нажмите <a href="index.php?page=login">здесь</a>.</p>
				<p>Вернуться на <a href="index.php">главную</a>.</p>
			</div>
		</div>
	</div>

<?php } ?>





