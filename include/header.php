<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 25.05.2018
 * Time: 15:36
 */

require_once "include/libs.php";

$leftMenu = [
	['link' => 'Домой',               'href' => 'index.php'],
	['link' => 'О нас',               'href' => 'about.php'],
	['link' => 'Контакты',            'href' => 'contact.php'],
	['link' => 'Таблица умножения',   'href' => 'table.php'],
	['link' => 'Калькулятор',         'href' => 'calc.php'],
];

#Установка локали и выбор значений даты
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
#Конвертация $mon из windows-1251 в utf-8
$mon = iconv('windows-1251', 'utf-8', $mon);
$year = strftime('%Y');
?>
<?

$shur = (int) strftime("%H");
$welcome = "Здравствуйте";


if ($shur > 0 && $shur <6):
	$welcome = "Доброй ночи";
elseif($shur >= 6 && $shur <12):
	$welcome = "Доброе утро";
elseif($shur >= 12 && $shur <18):
	$welcome = "Добрый день";
elseif($shur >= 18 && $shur <=23):
	$welcome = "Добрый вечер";
else:
	$welcome;
endif;

?>

<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>
