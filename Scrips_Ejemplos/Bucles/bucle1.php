
<?php
    echo "numero : 1 ";
    echo "numero : 2 ";
    echo "numero : 3 ";
    echo "numero : 4 ";
    echo "numero : 5 ";
    echo "numero : 6 ";
    echo "numero : 7 ";
    echo "numero : 8 ";
    echo "numero : 9 ";
    echo "numero : 10";
    echo "<hr>";

    echo "<b>Imprecion de los numeros de el 1 - 10 con for </b>";
        echo "<table border = '2'>";

            for($i=1;$i<=10;$i++)
            { 
                 echo "<tr>";
                        echo "<td>";
                             echo " El numero es : ". $i ;
                        echo "</td>";
                echo "</tr>";
            
            }
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
    
    echo "<b>Inprecion de los numeros de el 1 - 10 con while </b><br><br>";
        echo "<table border = '2'>";
            $j=1;
            while ($j <= 10) {
                echo " <tr><td> El numero es : ". $j. "</tr></td>";
                $j=$j+1;
            }
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
    echo "<b>Inprecion de los numeros de el 1 - 10 con do-while </b>";
        echo "<table border = '2'>";
            $l=1;        
            do {    
                
                    echo " <tr><td> El numero es : ". $l. "</tr></td>";
                    $l=$l+1;        
            
            } while ($l <= 10);
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
        echo "<b>Imprecion de los numeros de el 1 - 10 con for </b>";
        echo "<table border = '2'>";

            for($i=1;$i<=10;$i++)
            {
                
                if($i%2==0){
                    echo "<tr>";
                        echo "<td bgcolor= 'yellow'>";
                             echo " El numero es : ". $i ;
                        echo "</td>";
                    echo "</tr>";
                }else{
                    echo "<tr>";
                        echo "<td bgcolor= 'green'>";
                             echo " El numero es : ". $i ;
                        echo "</td>";
                    echo "</tr>";
                }
                

            }
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
        echo "<b>Imprecion de los numeros de el 1 - 10 con for </b>";
        echo "<table border = '2'>";

            for($i=1;$i<=10;$i++)
            {
                
                if($i%2==0){
                    
                        echo "<td bgcolor= 'yellow'>";
                             echo " ". $i ;
                        echo "</td>";
                    
                }else{
                    
                        echo "<td bgcolor= 'green'>";
                             echo " ". $i ;
                        echo "</td>";
                    
                }
                

            }
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
       

 



?>
