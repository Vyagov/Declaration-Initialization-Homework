<?php

/* �� ����� ������ (����������� ���������� � � ��������������
��� ��������) �������� �� ��������� ������ �� ����.*/

$radius = 5;

$area = pi() * pow($radius, 2);

$area = round($area, 2);

echo "The area of circle is $area.", PHP_EOL;