<!DOCTYPE html>
<html>
<head>
    <title>Bucles</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body bgcolor="#5fb1f5">
    
</body>
</html>
<center>
<?php
echo "<h2> 1) ";
echo "<br>";
    echo " 1 ";
    echo "<br>";
    echo " 2 ";
    echo "<br>";
    echo " 3 ";
    echo "<br>";
    echo " 4 ";
    echo "<br>";
    echo " 5 ";
    echo "<br>";
    echo " 6 ";
    echo "<br>";
    echo " 7 ";
    echo "<br>";
    echo " 8 ";
    echo "<br>";
    echo " 9 ";
    echo "<br>";
    echo " 10";
    echo "<br>";
    echo "<hr>";
echo "<h2> 2) ";
echo "<br>";
    echo "<b>Imprecion de los numeros de el 1 - 10 </b>";
    echo "<table border = '2'>";

        for($i=1;$i<=10;$i++)
        { 
                    echo "<td>";
                         echo "  ". $i ;
                    echo "</td>";
        }
    echo "</table>";
    echo "<hr>";
    echo "<br><br>";
echo "<h2> 3) ";
echo "<br>";
    echo "<b>Inprecion de los numeros de el 1 - 100 </b><br><br>";
    
        $j=1;
        while ($j <= 100) {
            echo " <td> ";
                echo $j. " ";
            echo " </td> ";
            $j=$j+1;
        }
    
    echo "<hr>";
    echo "<br><br>";
echo "<h2> 4) ";
echo "<br>";
    echo "<b>Imprecion de los numeros de el 1 - 100 en pares con for </b>";
    echo "<table border = '2'>";

    $k=2;
        for($i=1;$i<=100;$i=$i+2)
        { 
            
             echo "<tr>";
                    echo "<td>";
                         echo "  ". $i . " - ";
                         echo "  ". $k;
                    echo "</td>";
            echo "</tr>";
            $k=$k+2;
        
        }
    echo "</table>";
    echo "<hr>";
    echo "<br><br>";
echo "<h2> 5) ";
echo "<br>";
    echo "<b>Inprecion de numeros aleatorios</b><br><br>";
    echo "<table border = '2'>";
        $j=1;
        while ($j <= 10) {
            echo " <td> ". rand(0 , 100). "</td>";
            $j=$j+1;
        }
    echo "</table>";
    echo "<hr>";
    echo "<br><br>";
echo "<h2> 6) ";
echo "<br>";    
        $acum=0;
         for ($i=1;$i<=100;$i++){
                echo " <td> ";
                    echo $i. "-";
                echo " </td> ";
        $acum = $acum + $i;

    }
    echo "<br><br> La suma es : $acum";
    echo "<hr>";
    echo "<br><br>";
echo "<h2> 7) ";
echo "<br>"; 
    echo "<b>Imprecion de los multiplos de 3 </b><br><br>";
    echo "<table border = '2'>";
    for($i=1;$i<=100;$i++)
    {

        if($i%3==0)
        {
                
            echo "<td >";
                 echo " ". $i ;
            echo "</td>";
        }       
        else
        {
                
            
                
        }
}
    echo "</table>";
    echo "<hr>";
    echo "<br><br>";
echo "<h2> 8) ";
echo "<br>";
    echo "<b>Inprecion del total de la suma de los numeros aleatorios impares y pares </b><br><br>";
    echo "<table border = '2'>";
        $j=1;
        while ($j <= 10) {
            $rand= rand(0 , 100);
            echo " <td> ". $rand. "</td>";
            $j=$j+1;
            if($rand%2==0)
            {
                $total+=$rand;
            }else 
            {
                $resultado+=$rand;

            }
        }
        
    echo "</table>";
    echo " <br>el total de los numeros pares es : ".$total;
    echo " <br>el total de los numeros Inpares es : ".$resultado;
    echo "<br><br>";
echo"<hr>";
echo "<b> 9)
            - Total de números positivos pares generados.
            - Total de números positivos impares generados.
            - Total de números negativos pares generados.
            - Total de números negativos impares generados.</b><br><br>";
                $n= 1;
      $acumulador3=0;
      $acumulador4=0;
      $acumulador5=0;
      $acumulador6=0;
      
      echo "<br>Números: ";
      echo "<table border = '1' cellpadding='4'><br>";
      while($n<=10)
      {
        $nn=rand(-100,100);
            echo $nn."&nbsp;&nbsp;";
            if($nn%2==0)
            {
                if($nn>=0){
                    $acumulador3++;
                }else{
                    $acumulador5++;
                }		 		
            }else 
            {
                if($nn>=0)
                {
                    $acumulador4++;
                }else
                {
                    $acumulador6++;
                }	
            }
            $n++;
      }
      echo "</table>";
      echo "<br><b>REPORTE FINAL2</b>";
      echo "<table border=1>";
      echo "<tr><td>Total de pares positivos:</td><td>". $acumulador3 ."</td></tr>";
      echo "<tr><td>Total de impares positivos:</td><td>". $acumulador4 ."</td></tr>";
      echo "<tr><td>Total de pares negativos:</td><td>". $acumulador5 ."</td></tr>";
      echo "<tr><td>Total de impares negativos:</td><td>". $acumulador6 ."</td></tr>";
      echo "</table>";
    
echo "</tr></table>";
echo "<table border = '1'><tr>";  
echo"<hr>";


    ?>
    </center>