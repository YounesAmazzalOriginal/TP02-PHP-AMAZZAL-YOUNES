<?php

    // 1
    echo "<u>Question 1</u><br>";
    $i = 0;
    while ($i <= 10) {
        if ($i == 10) {
            echo "<strong>".$i."</strong>";
        }
        else {
            echo $i." ";
        }
        $i++;
    }

    // 2
    echo "<br><br><u>Question 2</u><br>";
    $j = 5;
    $k = 5;

    echo "<h2>Boucle while</h2>";
    echo "aucun";
    while ($j < 5) {
        echo "itération<br>";
        $j++;
    }

    echo "<h2>Boucle do while</h2>";
    do {
        echo "itération 1<br>";
        $k++;
    } while ($k < 5);

    // 3
    echo "<br><br><u>Question 3</u><br>";
    $l = 0;

    while ($l < 21) {
        if (in_array($l, [3,6,9,12,15,18])) {
            $l++;
            continue;
        }

        echo $l." ";

        $l++;
    }
?>