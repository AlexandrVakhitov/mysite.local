<?
//Меню
function drawMenu($menu, $vertical=true){
    $style = '';
    if (!$vertical)
        $style = " style='display:inline; margin-right: 10px;'";
	echo "<ul>";
	foreach ($menu as $item){
		echo "<li$style><a href='{$item['href']}'>{$item['link']}</a></li>";
	}
	echo "</ul>";
}

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

  <div id="content">
    <!-- Заголовок -->
    <h1><?= $welcome ?>, Гость</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
      <blockquote>
          <?
           echo "Сегодня: $day $mon $year";
          ?>
      </blockquote>
    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются однотипные задания и единая система оценки.
    </p>
    <p>
      Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого государственного экзамена. Срок действия данного документа истекает 31 декабря года, следующего за годом его выдачи, поэтому у абитуриентов есть возможность поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет.
    </p>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
      <?
      drawMenu($leftMenu);
      ?>

    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
	  <?
	  drawMenu($leftMenu, false);
	  ?>
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>