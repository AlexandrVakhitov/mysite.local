<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 22.05.2018
 * Time: 9:22
 */

$nums = [1,2,3,4,5,6,7];
print_r($nums);
foreach ($nums as &$w){
	$w *= 10;
}
///
///
///
	$w = 100;
print_r($nums);



//$var = "Hello";


//$arr = ["name" => "jone",
//		"login" => "root",
//		"age" => 25
//];
//
//foreach ($arr as $k => $val){
//	echo "$k : $val\n";
//}







//echo $arr[0];
//echo $arr{0};
//
//echo $var[0];
//echo $var{0};
//
//
//
//$i = 0;
//$len = strlen($var);
//while ($i < $len){
//	echo $var{$i}."\n";
//	$i++;
//}