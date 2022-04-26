<?php
//login();
?>
<div class="container mt-4">
	<div class="row">
		<div class="col">
			<!-- Форма авторизации -->
			<h2>Форма входа</h2>
			<form action="index.php?page=admin" method="post">
				<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
				<input type="email" class="form-control" name="email" id="email" placeholder="Введите Email" required><br>
				<input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль" required><br>
				<p><input type="checkbox" name="remember"/> Запомнить меня</p>
				<button class="btn btn-suc" name="do_login" type="submit">Авторизоваться</button>
			</form>
			<br>
			<p>Если вы еще не зарегистрированы, тогда нажмите <a href="index.php?page=regin">здесь</a>.</p>
			<p>Вернуться на <a href="index.php">главную</a>.</p>
		</div>
	</div>
</div>





