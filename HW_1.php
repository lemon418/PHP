<?php

// Задача №1
echo "<p>------------------Задача №1------------------ </p>";
$rows = 9; // количество строк
$cols = 9; // количество столбцов

echo '<table border="1">';

for ($i=1; $i<=$rows; $i++){ 
    echo '<tr>';
    for ($c=1; $c<=$cols; $c++){ 
        echo '<td>'. $i*$c .'</td>';
    }
    echo '</tr>';
}
echo '</table>';

// Задача №2

echo "<p> ------------------Задача №2------------------ </p>";

$x = 5;
$y = 20;
$sum = null;
    for ($i = 1; ; $i++) {
        $sum += $x;
        echo $sum . " - " . $i . " день" . '<br />';
        $x = $x + $x * 0.1;

        if ($sum >= $y) {
            echo "<p> понадобилось " . $i . " дня. </p>";
            break;
        }
    }
// Задача №3

echo "<p> ------------------Задача №3------------------ </p>";

$num = 800;
$res = 0;

while ($num >= 50) {

    $res++;
    $num /= 2;
    echo "<p>" . $res . " результат деления " . $num . "<p>";

        if ($num < 50)
    echo "<p> Потребовалось " . $res .  " итераций. <p>";
}

// Задача №5

echo "<p> ------------------Задача №5------------------ </p>";

echo "<p font='bold 23px Arial'> ---------До сортировки------- </p>";

$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];



var_dump($arr);

function mySort($a, $b) {
    if ($a['price'] == $b['price']) {
        return 0;
    }
    return ($a['price'] > $b['price']) ? 1 : -1;
}

usort($arr, 'mySort');

echo "<p font='bold 23px Arial'> -------После сортировки------- </p>";
var_dump($arr);


for ($i = 0; $i < count($arr); $i++) {
    echo "<div><p> price: " . $arr[$i]['price'] . "</p>";
    echo "<p> count: " . $arr[$i]['count'] . "</p></div><br>";
}



?>