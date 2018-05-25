<?php
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

// Таблица
function drawTable($cols = 10, $rows = 10, $thColor = "#fff", $tdBg = "gray"  ){
	echo "<table border='1'>";
	for ( $tr = 1; $tr <= $rows; $tr ++ ) {
		echo "<tr>\n";
		for ( $td = 1; $td <= $cols; $td ++ ) {
			if ( $tr == 1 || $td == 1 ) {
				echo "\t<th style='text-align: center; color: $thColor ; background: $tdBg ;'>" . $tr * $td . "</th>\n";
			} else {
				echo "\t<td style='text-align: center;'>" . $tr * $td . "</td>\n";
			}
		}
		echo "</tr>\n";
	}
	echo "</table>";
}