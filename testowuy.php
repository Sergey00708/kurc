<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="testowuy.php" method="POST">
        <input type="text" name="login"><br>
        <input type="text" name="email"><br>
        <input type="password" name="password"><br>
        <button type="submit">Send</button>
    </form>
</body>

</html>

<?php

$dsn = 'mysql:host=localhost;dbname=workbase';

$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['password'];

echo $_SESSION;
$par = [
    'login'=>$login, 
    'email'=>$email, 
    'password'=>$pass
];

// Подключаем базу

$dbconnect = new PDO($dsn, 'root', 'root');

function insert($dbconnect,$par)
{
    $sql = 'INSERT INTO `users` (`login`, `email`, `password`) VALUES (:login, :email, :password)';
    $ins = $dbconnect->prepare($sql);
    $ins->execute($par);  
    $_SESSION['email'] = '$email';
}

function select($dbconnect)
{
$sql1 = 'SELECT `login`, `email`, `password` FROM `users`';
$sel = $dbconnect->prepare($sql1);
$sel->execute();
$resp = $sel->fetch(PDO::FETCH_ASSOC);
}

insert($dbconnect,$par);
 

    







/* while ($resp = $sel->fetch(PDO::FETCH_ASSOC)) {
    echo '<pre>';
    echo $resp['login'] .' '. $resp['email'] .' '. $resp['password'];
    echo '<pre>';
} */

/*$sql1 = 'SELECT * FROM `users`';
$sel = $dbconnect->query($sql1);
while ($resp = $sel->fetch(PDO::FETCH_ASSOC)) {
    echo '<pre>';
    echo $resp['login'] .' '. $resp['email'] .' '. $resp['password'];
    echo '<pre>';
}  */
    
?>