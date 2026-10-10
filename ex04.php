<?php
    $a = 42;
    $b = "42";
    $c = 15.8;
    $d = true;
    $e = false;
    $f = null;

    echo "<pre>".var_dump($a)."</pre>";
    echo "<pre>".var_dump($b)."</pre>";
    echo "<pre>".var_dump($c)."</pre>";
    echo "<pre>".var_dump($d)."</pre>";
    echo "<pre>".var_dump($e)."</pre>";
    echo "<pre>".var_dump($f)."</pre>";

    echo "<h1>Apres convertir</h1>";

    $a = (string)$a;
    $b = (int)$b;
    $c = (int)$c;

    echo "<pre>".var_dump($a)."</pre>";
    echo "<pre>".var_dump($b)."</pre>";
    echo "<pre>".var_dump($c)."</pre>";
    echo "false :".false;
    echo "<br>var_dump(false) :".var_dump(false);
?>