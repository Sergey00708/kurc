<?php

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);


if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
	echo "Длинна логина не допусьтима";
	exit();
} else if (mb_strlen($name) < 3 || mb_strlen($name) > 50){
	echo "Недопустимая длтнна имени";
	exit();
} else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 6){
	echo "Недопустимая длинна пароля (от 2 до 6)";
	exit();
}

$pass = md5($pass."jhkjgfjytfjtfjh");

$mysql = new mysqli('localhost', 'root', 'root', 'workbase');
$mysql->query("INSERT INTO `users`(`login`, `name`,`password`) VALUES ('$login', '$name', '$pass')");
header('Location: /');


?>