<?php
function arrToStr ($arr, $sep = " ") {
	$str = "";
	foreach ($arr as $elem) {
		$str .= $elem . $sep;
	}
	return $str;
}
//1. Доступ по ссылке
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
echo "1. Доступ по ссылке<br>";
$order = &$very_bad_unclear_name;
$order .= " and Pepsi-Cola";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

//2. Числа
echo "<br><br>2. Числа<br>";
$number1 = 29;
echo "Вывод числа {$number1}";
echo "\n";
$number2 = 29.92;
echo "Вывод числа 12, не используя числа 12", 13-1;
$last_month = 1187.23;
$this_month = 1089.98;
echo "<br>Разница между прошлым и этим месяцем: ", $last_month - $this_month;

//11. Числа
echo "<br><br>11. Умножение и деление<br>";
$num_languages = 4;
$months = 11;
$days = 16 * $months;
$days_per_language = $days / $num_languages;
echo "Количество дней на язык: {$days_per_language}";

//12. Числа
echo "<br><br>12. Степень<br>";
echo "8 ** 2 = ", 8 ** 2;

//13. Операторы присвоения
echo "<br><br>13. Операторы присвоения<br>";
$my_num = 29;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

//14. Математические функции
echo "<br><br>14. Математические функции<br>";
//14.1 Работа с %
echo "14.1 Работа с %<br>";
$a = 10;
$b = 3;
echo "10 % 3 = ", $a % $b;
echo "<br>";
if (!($a % $b)) {
	echo "Делится";
} else {
	echo "Делится с остатком ", $a % $b;
}
//14.2 Работа со степенью и корнем
echo "<br><br>14.2 Работа со степенью и корнем<br>";
$st = pow(2, 10);
echo "2 ^ 10 = ", $st . "<br>";
echo "Корень числа 245 = ", sqrt(245);
echo "<br>";
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $elem) {
	$sum += pow($elem, 2);
}
echo "Сумма квадратов элементов массива 4 2 5 19 13 0 10", sqrt($sum);
//14.3 Работа с функциями округления
echo "<br><br>14.3 Работа с функциями округления<br>";
echo round(sqrt(379)) . "<br>";
$arr1 = ["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];
foreach($arr1 as $key => $value) {
	echo "$key => $value . <br>";
}
//14.4 Работа с min и max
echo "<br>14.4 Работа с min и max<br>";
$arr2 = [4, -2, 5, 19, -130, 0, 10];
echo "min = ", min($arr2), " max = ",  max($arr2);
//14.5 Работа с рандомом
echo "<br><br>14.5 Работа с рандомом<br>";
echo "Случайное число от 1 до 100 ", rand(1, 100);
$arr3 = [];
for ($i = 0; $i < 10; $i++) {
	array_push($arr3, rand());
}
echo "Массив случайных чисел<br>";
foreach ($arr3 as $value) {
	echo $value . " ";
}
//14.6 Работа с модулем
echo "<br><br>14.6 Работа с модулем<br>";
$a = 23;
$b = 12;
echo abs($a - $b) . " ";
$a = -23;
$b = 12;
echo abs($a - $b) . " ";
$a = 23;
$b = -12;
echo abs($a - $b) . " ";
$a = -23;
$b = -12;
echo abs($a - $b) . " ";
$arr4 = [1, 2, -1, -2, 3, -3];
echo "<br>Before:", arrToStr($arr4);
$arr5 = [];
foreach ($arr4 as $value) {
	array_push($arr5, abs($value));
}
echo "<br>After: ", arrToStr($arr5);
//14.7 Общее
echo "<br><br>14.7 Общее<br>";
$number3 = 30;
$arr6 = [];
for ($i = 1; $i <= $number3; $i++) {
	if ($number3 % $i == 0) {
		array_push($arr6, $i);
	}
}
echo "Массив делителей: ", arrToStr($arr6);
$arr7 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum1 = 0;
$count = 0;
foreach ($arr7 as $value) {
	$sum1 += $value;
	$count++;
	if ($sum1 > 10) {
		$count--;
		break;
	}
}
echo "<br>Количество делителей: {$count}";

//15. Функции
echo "<br><br>15. Функции<br>";
function printStringReturnNumber() {
	echo "string ";
	return 0;
}
$my_num = printStringReturnNumber();
echo $my_num;

//16. Функции
echo "<br><br>16. Функции<br>";
function increaseEnhusiasm($str) {
	return $str . "!";
}
echo increaseEnhusiasm("Hello, World");
function repeatThreeTimes($str) {
	return $str . $str . $str;
}
echo "<br>", repeatThreeTimes("Hello, World!");
echo increaseEnhusiasm(repeatThreeTimes("Hello, World"));
function cut($str, $count = 10) {
	$str1 = "";
	for($i = 0; $i < strlen($str); $i++) {
		if ($i >= $count) {
			break;
		} else {
			$str1 .= $str[$i];
		}
	}
	return $str1;
}
echo "<br>";
echo "Обрезка строки ", cut("Lorem ipsum dolor sit amet");
echo "<br>Вывод массива через рекурсию: ";
function recursiveOutput($arr, $i = 0) {
	if ($i == count($arr) - 1) {
		echo $arr[$i];
		return 0;
	} else {
		echo "{$arr[$i]} ";
		$i++;
		return recursiveOutput($arr, $i);
	}
}
$arr8 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
recursiveOutput($arr8);
$num = strval(rand(1, 100));
function foo($num) {
	$sum = 0;
	$arr = str_split($num);
	foreach($arr as $elem) {
		$sum += intval($elem);
	}
	if ($sum > 9) {
		return foo(strval($sum));
	} else {
		return $sum;
	}
}
echo "<br>";
echo "Число на вход: {$num}";
echo "<br>";
echo "Однозначное число, полученное в результате преобразований: ", foo($num);

// 17. Массивы
echo "<br><br>17. Массивы<br>";
function fillX ($num) {
	$arr = [];
	for ($i = 0; $i <= $num; $i++) {
		$str = "";
		for ($j = 0; $j <= $i; $j++) {
			$str .= "x";
		}
		array_push($arr, $str);
	}
	return $arr;
}
echo "Массив с х: ", arrToStr(fillX(rand(1, 10)));

function arrayFill ($elem, $count) {
	$arr = [];
	for ($i = 0; $i <= $count; $i++) {
		array_push($arr, $elem);
	}
	return $arr;
}
echo "<br>Массив заполненный заданным значением длины n: ", arrToStr(arrayFill("123", rand(1, 10)));
$newArr = [[1, 2, 3], [4, 5], [6]];
$arraysSum = 0;
foreach ($newArr as $arrs) {
	$arrSum = 0;
	foreach($arrs as $elem) {
		$arrSum += $elem;
	}
	$arraysSum += $arrSum;
}
echo "<br>Сумма массивов: {$arraysSum}";
$newArr1 = [];
$n = 1;
for ($i = 0; $i < 3; $i++) {
	$tmpArr = [];
	for ($j = 0; $j < 3; $j++) {
		array_push($tmpArr, $n);
		$n++;
	}
	array_push($newArr1, $tmpArr);
}
echo "<br>Заполненный двумерный массив<br>";
foreach ($newArr1 as $arrs) {
	echo arrToStr($arrs) . "<br>";
}
$newArr2 = [2, 5, 3, 9];
$result = 0;
for ($i = 0; $i < 3; $i++) {
	$tmpSum = $newArr2[$i] * $newArr2[$i + 1];
	$result += $tmpSum;
}
echo "Сумма элементов массива, умноженных на следующий: {$result}";
$user = ["name" => "John", "surname" => "Doe", "patronymic" => "Loremovich"];
echo "<br>user в виде Фамилия Имя Отчество: {$user["surname"]} {$user["name"]} {$user["patronymic"]}";
$date = ["year" => date("Y"), "month" => date("m"), "day" => date("d")];
echo "<br>Дата в виде год-месяц-день: {$date["year"]}-{$date["month"]}-{$date["day"]}";
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "<br>Длина массива arr: ", count($arr);
echo "<br>Последний элемент массива arr: {$arr[count($arr) - 1]}, предпоследний элемент массива arr {$arr[count($arr) - 2]}";

//18. Конструкция if else
echo "<br><br>18. Конструкция if else<br>";
function foo1 ($num1, $num2) {
	echo "num1 = {$num1}, num2 = {$num2} ";
	if (($num1 + $num2) > 10) {
		echo "true";
		return true;
	} else {
		echo "false";
		return false;
	}
}
echo "Функция, проверяющая больше ли сумма чисел числа 10 ";
foo1 (rand(1, 10), rand(1, 10));

function foo2 ($num1, $num2) {
	echo "num1 = {$num1}, num2 = {$num2} ";
	if ($num1 == $num2) {
		echo "true";
		return true;
	} else {
		echo "false";
		return false;
	}
}
echo "<br>Функция, проверяющая равны ли числа ";
foo2 (rand(1, 10), rand(1, 10));

$age = strval(rand(1, 110));
echo "<br>Возраст {$age}<br>";
$arr = str_split($age);
$sum = 0;
foreach($arr as $elem) {
	$sum += intval($elem);
}
if ($age >= 10 || $age <= 99) {

	if ($sum >= 10) {
		echo "Сумма цифр возраста двузначна";
	} else {
		echo "Сумма цифр возраста однозначна";
	}
} else {
	echo "Возраст не попадает в промежуток [10-99]";
}
$arr = [];
for ($i = 0; $i <= rand(1, 10); $i++) {
	$arr[$i] = rand(1, 10);
}
echo "<br>arr: ", arrToStr($arr);
if (count($arr) == 3) {
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem;
	}
	echo "Сумма этого массива = {$sum}";
}

//19. Циклы
echo "<br><br>19. Циклы<br>Треугольник из х";
for ($i = 0; $i <= 20; $i++) {
	$str = "";
	for ($j = 0; $j < $i; $j++) {
		$str .= "x";
	}
	echo $str . "<br>";
}

//20. Комбинация функиций
echo "<br><br>20. Комбинация функций<br>";
$arr = [];
for ($i = 0; $i <= rand(1, 10); $i++) {
	$arr[$i] = rand(1, 10);
}
echo "Массив: ", arrToStr($arr);
echo " Среднее значение: ", array_sum($arr) / count($arr);
echo "<br>Сумма чисел от 1 до 100: ", array_sum(range(1, 100));
$arr = [];
for ($i = 0; $i <= rand(1, 10); $i++) {
	$arr[$i] = rand(1, 10);
}
echo "<br>Массив: ", arrToStr($arr);
echo "Массив из корней элементов этого массива: ", arrToStr(array_map('sqrt', $arr));
$arr = array_combine(range('a', 'z'), range(1, 26));
echo "<br>Массив, заполненный в виде 'a' => 1, 'b' => 2 и т.д. <br>";
foreach ($arr as $key => $value) {
	echo "$key => $value<br>";
}
$str = "1234567890";
$arr = str_split($str);
$arr = array_chunk($arr, 2);
$arr = array_map('implode', $arr);
echo "Сумма элементов массива в виде 12+34+56+78+90 = ", array_sum($arr);