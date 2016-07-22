<?php

/* ������ �� ����� �� ��������� ������ �� ��������� ���� � 14:30
����, ���� �� ����� ��� ������ ������� 60 km/h.
����� �� ��������� ���� ����� �� ���� ��������� � 110 km. �
����� ���� �� ��������� ������ � ���� ���������.
�������� ������� �� ��������� ��� ������ HH:MM (�������� 15:30, 16:02). */

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
