<?php
    $moyenne = 16;

    if ($moyenne > 20 || $moyenne < 0) {
        echo "Note invalide";
    }

    else {
        if ($moyenne < 10) echo "Non validé";
        if ($moyenne >= 10 && $moyenne < 12) echo "Passable";
        if ($moyenne >= 12 && $moyenne < 14) echo "Assez bien";
        if ($moyenne >= 14 && $moyenne < 16) echo "Bien";
        if ($moyenne >= 16 && $moyenne < 20) echo "Tres bien";
    }
?>