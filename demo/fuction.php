<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 22.05.2018
 * Time: 11:24
 */




//function foo(){
//	echo "Янесуществуюпоканебудетвызванаfoo().\n";
//function bar() {
//	echo "Янесуществуюпоканебудетвызванаfoo().\n";
//}
//
//}
//
//foo();
//
//bar();
//
//foo();



function main_1($name = "Guest", $h = 3){
	echo "<h$h>Hello, $name!</h$h>";
}
main_1("jone",1);
$n = "Mike";
main_1($n);
main_1();
