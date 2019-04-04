<center>
<?php
    echo "numero : 1 ";
    echo "<br>";
    echo "numero : 2 ";
    echo "<br>";
    echo "numero : 3 ";
    echo "<br>>";
    echo "numero : 4 ";
    echo "<br>";
    echo "numero : 5 ";
    echo "<br>";
    echo "numero : 6 ";
    echo "<br>";
    echo "numero : 7 ";
    echo "<br>";
    echo "numero : 8 ";
    echo "<br>";
    echo "numero : 9 ";
    echo "<br>";
    echo "numero : 10";
    echo "<br>";
    echo "<hr>";

    echo "<b>Imprecion de los numeros de el 1 - 10 con for </b>";
        echo "<table border = '2'>";

            for($i=1;$i<=10;$i++)
            { 
                 echo "<tr>";
                        echo "<td>";
                             echo "  ". $i ;
                        echo "</td>";
                echo "</tr>";
            
            }
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
            
    echo "<b>Inprecion de los numeros de el 1 - 10 </b><br><br>";
        echo "<table border = '2'>";
            $j=1;
            while ($j <= 10) {
                echo " <tr><td> ". $j. "</tr></td>";
                $j=$j+1;
            }
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
        
        
    echo "<b>Inprecion de los numeros de el 1 - 10  </b>";
        echo "<table border = '2'>";
            $l=1;        
            do {    
                if($l=25)
                {
                    echo " <td> ". $l. "</td>";
                    $l=$l+1;
                   
                        echo "<br><br>";
                    }        
            
            } while ($l <= 100);
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
        echo "<b>Imprecion de los numeros de el 1 - 10 con for </b>";
        echo "<table border = '2'>";

        for($i=1;$i<=10;$i++)
            {
                 if($i%2==0)
                 { 
                            echo "<td bgcolor= 'yellow'>";
                                echo "  ". $i ;
                            echo "</td>";      
                }
                else
                {   
                            echo "<td bgcolor= 'green'>";
                                echo "  ". $i ;
                            echo "</td>";
                }
            }
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
        echo "<b>Imprecion de los numeros de el 1 - 10 con for </b>";
        echo "<table border = '2'>";

        for($i=1;$i<=10;$i++)
            {
                
                if($i%2==0)
                {
                    
                        echo "<td bgcolor= 'yellow'>";
                             echo " ". $i ;
                        echo "</td>";
                    
                }
                else
                {
                    
                        echo "<td bgcolor= 'green'>";
                             echo " ". $i ;
                        echo "</td>";
                    
                }
                

            }
        echo "</table>";
        echo "<hr>";
        echo "<br><br>";
       

 



?>
</center>
