<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>Это параграф на русском языке.</p>

<?php
/*
 bool (логический тип)

int (целые числа)

float (дробные числа)

string (строки)

array (массивы)

object (объекты)

callable (функции)

mixed (любой тип)

resource (ресурсы)

null (отсутствие значения)

многострочный комент
 */

// однострочный комент
//$num = 3;
//$num1 = 5;
//
//echo $num + 5;
//echo "<br>";
//echo $num - 5;
//echo "<br>";
//echo $num / 5;
//echo "<br>";
//echo $num ** 5;
//echo "<br>";

//
//$a="Привет, ";
//$b="мир";
//echo $num . " " . $b . "!";
//
//$b = 11;
//$a = 6;
//echo $a+ 78;
// Условие
//$age = 15;
//if ($age % 2 == 0){
//    echo "четное число";
//}
//else
//    echo "нечетное число";
//

//$a = 6;
//$b = 2;
//$z = $a < $b ? $a + $b : $a - $b;
//echo $z;
//
//$q = 1;
//switch ($q) {
//    case 1:
//        echo "Жаз";
//        case 2:
//            echo "Жай";
//            case 3:
//                echo "Куз";
//                case 4:
//                    echo "Кыш";
//
//}
//
//for ($i = 0; $i < 10; $i++) {
//    echo $i . "<br>";
//
//}

//for ($i = 0; $i < 10; $i++) {
//    if ($i % 2 !== 0) {
//        echo $i;
//        echo "<br>";
//    }
//}

//$counter = 1;
//while($counter<10)
//{
//    echo $counter * $counter . "<br />";
//    $counter++;
//}
//for ($i = 1; $i <= 100; $i++) {
//    echo $i;
//    if($i == 50){
//        break;
//    }
//}

//$counter = 5;
//do {
//    echo $counter * $counter . "<br />";
//    $counter++;
//}
//while($counter>10)
for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 3; $j++) {
        echo $i . "  " . $j . "<br>";
    }
    echo "<br>";
}

?>
</body>
</html>
