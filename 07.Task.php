<?php

/* Влакът от София за Септември тръгва от Централна гара в 14:30
часа, като се движи със средна скорост 60 km/h.
Пътят от Централна Гара София до Гара Септември е 110 km. В
колко часа ще пристигне влакът в Гара Септември.
Изведете данните на конзолата във формат HH:MM (например 15:30, 16:02). */

$hour = 14;
$minuts = 30;
$s = 110;
$v = 24;

$tHour = (int)($s / $v);
$tMinuts = $s / $v - $tHour;

$hour += $tHour;
$minuts += round(60 * $tMinuts);

if ($minuts >= 60) {
	$hour++;
	$minuts -= 60;
}

if ($minuts < 10) {
	echo "The train arrives at $hour:0$minuts.", PHP_EOL;
} else {
	echo "The train arrives at $hour:$minuts.", PHP_EOL;
}
