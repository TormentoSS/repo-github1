<?php 

$a = 5;
$b = rand(1,3) * 10;

var_dump($a,$b);

$c = $a * $b;

if ($c < 100){ 
    echo "меньше 100";
} elseif ($c < 200) {
    echo "меньше 200";
} else {
    echo "все остальное";
}

