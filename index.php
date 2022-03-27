<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Форма регистрации</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>
	<div class="container mt-4">
		<?php if($_COOKIE['user'] == ''): ?>
		<div class="row">
			<div class="col">
				<h1>Форма регистрации</h1>
	<form action="check.php" method="post">
		<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
		<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
		<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
		<button class="btn btn-success" type="submit">Зарегестрироваться</button>
	</form>
			</div>
			<div class="col">
				<h1>Форма авторизации</h1>
	<form action="auth.php" method="post">
		<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
		<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
		<button class="btn btn-success" type="submit">Авторизироваться</button>
	</form>
			</div>
		</div>
		<?php else:?>
		<p>Привет <?=$_COOKIE['user'];?>. Чтобы выйти нажмите <a href="exit.php">ЗДЕСЬ</a></p>

		<?php endif; ?>
	</div>
</body>
</html>
