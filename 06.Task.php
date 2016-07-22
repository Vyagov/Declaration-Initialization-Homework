<?php

/* По даден радиус (декларирате променлива и я инициализирате
със стойност) изведете на конзолата обиколката на кръг. */

$radius = 5;

$perimeter = 2 * pi() * $radius;

$perimeter = round($perimeter, 2);

echo "The perimeter of circle is $perimeter.";