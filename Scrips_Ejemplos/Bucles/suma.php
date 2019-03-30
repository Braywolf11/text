<?php
$acum=0;
    for ($i=1;$i<=100;$i++){
        echo $i. "-";
        $acum = $acum + $i;

    }
    echo "<br><br> La suma es : $acum";

?>