<?php

/* По даден радиус (декларирате променлива и я инициализирате
със стойност) изведете на конзолата лицето на кръг.*/

$radius = 5;

$area = pi() * pow($radius, 2);

$area = round($area, 2);

echo "The area of circle is $area.", PHP_EOL;