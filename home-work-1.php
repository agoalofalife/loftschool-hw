<?php

// Task #1

    $name = "Кирилл";
    $age = 26;

    echo "Меня зовут: $name", '</br>';
    echo "Мне $age лет", '</br>';
    echo "\"!|\\/'\"\\";

    echo "<hr>";

// Task #2

    $fullSet = 80;
    $markerItems = 24;
    $pencilItems = 40;
    $paintsItems = $fullSet - $markerItems - $pencilItems;

    echo "Всего представленных работ: $fullSet", '</br>';
    echo "Из них выполнено фломастерами: $markerItems", '</br>';
    echo "Вы полнено карандашами: $pencilItems", '</br>';
    echo "Итого выполнено красками: $paintsItems", '</br>';

    echo "<hr>";

// Task #3

    define("STONE", 55);
    if ( STONE ) {
        echo "Она жива!!!", '</br>';
        define("STONE", 66);
        echo "значение: \n", STONE, '</br>';
    }

    echo "<hr>";

// Task #4

    $age = 90;

    if ( $age > 17 && $age < 66 ) {
        echo "Вам еще работать и работать", '</br>';
    } elseif ( $age > 65 ) {
        echo "Вам пора на пенсию", '</br>';
    } elseif ( $age >= 1 && $age <= 17) {
        echo "Вам еще рано работать", '</br>';
    } else {
        echo "Неизвестный возраст", '</br>';
    }

    echo "<hr>";

// Task #5

    $day = 8;

    switch($day) {
        case $day >= 1 && $day <= 5: echo "Это рабочий день";
            break;
        case $day == 6 || $day == 7: echo "Это выходной день";
            break;
        default: echo "Неизвестный день";
    }

    echo "<hr>";

// Task #6

    $bmw = array("model" => "X5", "speed" => 120, "doors" => 5, "year"  => "2015");

    $toyota = array("model" => "Carolla", "speed" =>  110, "doors" =>  4, "year"  =>  "2013");

    $opel = array("model" => "Mokka", "speed" =>  120, "doors" =>  5, "year"  =>  "2014");

    $result = ["bmw" => $bmw, "toyota" => $toyota, "opel" => $opel];
    echo "<pre>";

    foreach ($result as $key => $car) {
        echo $key, '</br>';
        echo $car['model']." ", $car['speed']." ", $car['doors']." ", $car['year'], "</br></br>";
    }


    echo "<hr>";


// Task #7

    echo "<table>";
    for ($i = 0; $i <11; $i++)
    {
        if ( $i == 0 )
        {
            echo "<tr>";
            echo "<td>", $i, "</td>";
            for ($s = 1; $s < 11; $s++)
            {
                echo "<td>", $s, "</td>";
            }
            echo "</tr>";
        }
        elseif ( $i % 2 == 0 )
        {
            echo "<tr>";
            echo "<td>", $i, "</td>";
            for ($s = 1; $s < 11; $s++)
            {
                echo "<td>", "(".$s*$i.")", "</td>";
            }
            echo "</tr>";
        }
        elseif ( $i % 2 == 1 ) {
            echo "<tr>";
            echo "<td>", $i, "</td>";
            for ($s = 1; $s < 11; $s++)
            {
                echo "<td>", "[".$s*$i."]", "</td>";
            }
            echo "</tr>";
        }
    }
    echo "</table>";

    echo "<hr>";

// Task #8

    $str = "несколько слов резделенных пробелом";
    echo $str, "</br>";

    $arr = explode( " ", $str );
    print_r($arr);
    echo "</br>";

    $i = count($arr) - 1;
    $arrNew = [];
    while ($i >= 0) {
        $arrNew[] = $arr[$i];
        $i--;
    }
    $strNew = implode(" : ", $arrNew);
    echo $strNew;
?>
