
<?

/*define("USER_NAME", "Вася");
echo USER_NAME;
echo '<br>';#=======
define("AAA", 300, 1);
echo AAa;
echo '<br>';#=======
const TWO_HUNDRED = 200;
echo  TWO_HUNDRED;
echo '<br>';#=======
const TWO_HUNDRED_E = TWO_HUNDRED + 10;
echo  TWO_HUNDRED_E;
echo '<br>';#=======*/



/*#Вызов ошибки до исполнения Parse error: syntax error, unexpected 'echo'
#Уровень ПАРСИНГА
$name = "name"
    echo $name;
#Говарит нам что (unexpected 'echo') сдесь не должно быть (echo)*/



/*#Вывод ошибки во время исполнения Fatal error: Uncaught Error: Call to undefined function foo()
foo();
#Говори нам что во время выполнения Функции foo (Вызов неопределенной функции)
#Далее код выполняться не будет!!!!!!!!!!!!!
echo "Hello";*/


/*#Вывод ошибки во время исполнения Warning: define() expects at least 2 parameters, 1 given in
define("AAA");
#Говори нам что в константе Define ожидается два пораметра, но передан только 1
#Далее код выполняться будет!!!!!!!!!!
echo "Hello";*/


/*#Вывод ошибки Notice: Undefined variable: name in
$name = "Jone";
#Удалим $name
unset($name);
#Вызовим $name
echo $name;
#Говори нам что мы обращаемся к не существующей переменной $name
#Далее код выполняться будет!!!!!!!!!!
echo "Hello";*/




/*#Длинна строоки с помощью mb_strlen и strlen
$name = "Вася";
$len = strlen($name);
$len_1 = mb_strlen($name);
echo $len_1;
echo "<br>";
echo $len;*/



//$shop = true;
//$many = true;
//	if ($shop &&  $many) {
//		echo "Иду в магазин \n";
//		echo "Покупаю хлеб\n";
//		echo "Иду домой";
//	}else {
//		echo "Иду в киоск";
//		echo "Смотрю телевизор";
//	}

//if (!$shop)
//	echo "Иду в магазин";
//else
//	echo "Иду в киоск";

//$i = 2;
//switch ($i) {
//	case 0: echo "Результат: 0";break;
//	case 1: echo "Результат: 1";break;
//	case 2: echo "Результат: 2";break;
//	case 3: echo "Результат: 3";break;
//	case 4: echo "Результат: 4";break;
//
//	default: echo "Много";
//}

//


//for($i = 10, $j = 30; $i <= 100; $i++){
//
// echo $j;
//}


//
//$a = 1;
//$b = &$a;
//unset($a);
//echo $a;

for ($i=0;$i<=5;print $i++);