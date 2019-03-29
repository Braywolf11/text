
<?php

    echo "<b>Imprecion de los numeros de el 1 - 10 con for </b>";
        echo "<table border = '2'>";

            for($i=1;$i<=10;$i++)
            {

                echo " <tr><td> El numero es : ". $i. "</tr></td>";

            }
        echo "</table>";
    echo "<br><br>";
    echo "<b>Inprecion de los numeros de el 1 - 10 con while </b><br><br>";
        echo "<table border = '2'>";
            $j=1;
            while ($j <= 10) {
                echo " <tr><td> El numero es : ". $j. "</tr></td>";
                $j=$j+1;
            }
        echo "</table>";
        echo "<br><br>";
    echo "<b>Inprecion de los numeros de el 1 - 10 con do-while </b>";
        echo "<table border = '2'>";
            $l=1;        
            do {    
                
                    echo " <tr><td> El numero es : ". $l. "</tr></td>";
                    $l=$l+1;        
            
            } while ($l <= 10);
        echo "</table>";



?>
