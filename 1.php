<?php


/*class People
{
	public $name;
	public $age;
	public $weight;

	public function Hay()
	{
		echo 'Привет ' . $this -> name;
	}
}

$sergey = new People();
$sergey -> name = 'Sergey';
$sergey -> age = 30;
$sergey -> weight = 73;
var_dump($sergey);
echo "<br>";
echo $sergey -> name . "<br>";
$sergey -> Hay();

$num = 5;
start:
$num--;
echo "$num";
if ($num == 0) goto finish;
goto start;
finish:

while ($firstNumber <= 10) {
	echo "$firstNumber";
	$firstNumber++;
}

function printNumbers($firstNumber)
{
    // BEGIN
    $i = $firstNumber;
    while ($i >= 1) {
        print_r("{$i}\n");
        $i = $i - 1;
    }
    print_r('finished!');
    // END
}

printNumbers(5);


function getSentenceTone($var)
{
	if (strtoupper($var) === $var) {
		echo 'крик';
	}
	else{
		echo 'спокойная речь';
	}
}
getSentenceTone(PRIvET);*/



/*while ($i < 10) {
	$i++;
	$ok[] = $i;

}
echo "<pre>";
print_r($ok);
echo "</pre>";*/

/*for ($i=0; $i < 10; $i++) {
	$ok[] = $i;
}
echo "<pre>";
print_r($ok);
echo "</pre>";*/

/*$arr = []; // создал массив
$arr[] = 5; // присвоил значение
$arr[2] = 6; // добавил индекс и значение
echo "<pre>";
print_r($arr);
echo "</pre>";

$a = 'prikol';
$arr1 = (array) $a;
echo "<pre>";             //  преобразовао переменную в массив
print_r($arr1);
echo "</pre>";


$arr3 = [1,2,3,4,5];
foreach ($arr3 as $value) {
	$value++;
	echo "$value <br>";
}


$arr11 = [1,2,3,4,5];

for ($i=0; $i < 7; $i++) {
	if (isset($arr11[$i])) {
		echo "элемент массива \$arr11[$i] существует<br>";
	}else{
		echo "элемент массива \$arr11[$i] не существует<br>";
	}
}


for ($i=1; $i <= 10; $i++) {
	$list[] = "<a href = \"1.php\">Кнопка $i</a>";
}


function myList(...$var)
{
	foreach ($var as $value) {
		echo "$value<br>";
	}
}

myList(...$list);*/



class getset
{



	public function __get($name)
	{
		echo "You get {$name}";
	}

	public function __set($name, $val)
	{
		echo "You set {$name}";
	}
}

$obj = new getset();
echo $obj->number;

echo "<br>";

echo "Привет {$_POST['name']}! тебе {$_POST['age']} лет.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Учеба</title>
</head>
<body>
	<form action="1.php" method="post">
		<input type="text" name="name">
		<input type="text" name="age">
		<input type="submit" name="">
	</form>
</body>
</html>

