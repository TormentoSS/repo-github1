<?php

$a = rand(0, 1);
echo $a;

$b = $a === 0 ? null : rand(1, 3);
echo $b;

switch ($b) {
    case null:
        echo "Значение переменной b = null";
        break;
    case 1:
        echo "Значение переменной b = 1";
        break;

    default:
        echo "Значение не входит в выбранный диапазон";
        break;
}

var_dump(isset($b));

$c = $b ?? rand(20, 30);
echo($c);
