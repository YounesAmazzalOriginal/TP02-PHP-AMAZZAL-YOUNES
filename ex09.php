<?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10,
    ];
    $et_v = 0;
    $moyenne = 0;
    $mei_note = 0;


    echo "<table border='1' width='100%'>";
    echo "<th>Nom</th>";
    echo "<th>Note</th>";
    echo "<th>Validation</th>";
    foreach ($notes as $key => $value) {
        $moyenne += $value;
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value."</td>";
        
        if ($value >= 10) {
            echo "<td bgcolor='lightgreen'>Validé</td>";
            $et_v++;
        }
        else {
            echo "<td bgcolor='coral'>Non validé</td>";
        }

        // Calculer meuilleur note
        if ($value > $mei_note) {
            $mei_note = $value;
        }
        
        echo "</tr>";
    }
    echo "</table>";

    $moyenne /= 6;
    echo "Moyenne :".$moyenne;
    echo "<br>Etudient validé :".$et_v;
    echo "<br>La meilleure note :".$mei_note;
?>