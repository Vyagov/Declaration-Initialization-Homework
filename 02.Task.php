<?php

/* По дадени 3 страни (декларирате променливи и ги
инициализирате със стойност) изведете на конзолата лицето на
триъгълник(Херонова теорема). */

$firstSide = 5;
$secondSide = 6;
$thirdSide = 7;

$p = ($firstSide + $secondSide + $thirdSide) / 2;

$area = sqrt($p * ($p - $firstSide) * ($p - $secondSide) * ($p - $thirdSide));

$area = round($area, 2);

echo "The area of triangle is $area.", PHP_EOL;
