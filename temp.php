<?php
//3.1 Температура
$a = rand(-10, 10);
echo $a . " градусов: ";
if ($a < 0) {
    echo "<span style= \" color: blue;\">Мороз!</span>";
}
if ($a > 0) {
    echo "<span style= \" color: red;\">Тепло!</span>";
}
if ($a == 0) {
    echo "<span style= \" color: gray;\">Не мороз и не тепло…</span>";
}