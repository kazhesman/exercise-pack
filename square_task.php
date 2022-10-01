<?php
// 3.4 Решение квадратного уравнения
// a*x2 + b*x +c = 0
$a = rand(-10, 10);
$b = rand(-10, 10);
$c = rand(-10, 10);
$d = $b * $b - 4 * $a * $c;
if ($d < 0) {
    echo "<span style= \" color: gray;\">квадратное уравнение не имеет корней</span>";
}
if ($d == 0) {
    $x = -$b / 2 * $a;
    echo "<span style= \" color: green;\">Корень уравнения:</span>" . $x;
}
if ($d > 0) {
    $x1 = (-$b + sqrt($d)) / 2 * $a;
    $x2 = (-$b - sqrt($d)) / 2 * $a;
    echo "<span style= \" color: blue;\">Корень уравнения:</span>" . $x1 . " или " . $x2;
}
// else {
//     echo "<span style= \" color: red;\">Ошибка</span>";
// }