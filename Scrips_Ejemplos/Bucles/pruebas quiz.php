<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tabla de multiplicar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
    <body bgcolor="#cfcfcf">
        <form action="pruebas quiz.php" method="POST">
            <center>
                    <table aling="center" border="4" height="401" width='425' align="center" background="/text/images/jhonny.jpg" no repeat>
                        <tr>
                            <td colspan="4"  >
                                <CEnter><B><H1>Tabla de Multiplicar</H1><br> </B></CEnter>
                            </td>
                        </tr>
                        <tr>
                                <td bgcolor= "#fbe030"><b>Numero :</b><font color="blue">*</font></td>
                                <td bgcolor= "#fbfbfb"><b><input type="number" placeholder="0" name="n1" minlength="5" maxlength="30" pattern="[0,9]{4-16}"  required></b></td>
                        </tr>  
                        <td colspan="2" ><br >
                            <center><input type="submit" value="PROCESAR"></center><br>
                                        
                        </td>

                    </table>
                </center>
        </form>
    </body>
</html>
<center>
<?php

$num = $_POST['n1'];
$indice = 10;

echo "<table border = 2>";

//Le ponemos los titulos a las cabeceras de las columnas

echo "<th> Tabla * </th>";
echo "<th> 1 </th>";
echo "<th> 2 </th>";
echo "<th> 3 </th>";
echo "<th> 4 </th>";
echo "<th> 5 </th>";
echo "<th> 6 </th>";
echo "<th> 7 </th>";
echo "<th> 8 </th>";
echo "<th> 9 </th>";
echo "<th> 10 </th>";

//mediante dos bucles "for" crearemos las filas de la columnas de forma dinámica

    for($i=1;$i<=$num;$i++){

        //creamos una fila
        echo "<tr>";    

        //creamos el segundo bucle for que vaya calculando el contenido de cada columna

        //nombre de la fila

        echo "<td>";
        echo "<b>Tabla del ".$i."</b>";
        echo "</td>";

        for($j=1;$j<=$indice;$j++){

           
            if($i%2==0)
            { 
                
                if($j%2==0)
                { 
                    
                    echo "<td bgcolor= 'yellow'>";
                        echo $j*$i;
                    echo "</td>";
                
                }
                else
                {
                
                    echo "<td bgcolor= 'green'>";
                        echo $j*$i;
                    echo "</td>";
                
                } 
            
            }
            else
            {
            
                if($j%3==0)
                { 
                    
                    echo "<td bgcolor= 'blue'>";
                        echo $j*$i;
                    echo "</td>";
                
                }
                else
                {
                
                    echo "<td bgcolor= 'yellow'>";
                        echo $j*$i;
                    echo "</td>";
                
                } 
            
            } 
            
        }
            
           
           
            

        

        //cerramos la etiqueta tr
        echo "</tr>";

    }

//cerramos la etiqueta table

echo "</table>";


?>
</center>