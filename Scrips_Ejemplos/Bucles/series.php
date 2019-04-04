<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Series de Numeros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
    <body bgcolor="#cfcfcf">
        <form action="series.php" method="POST">
            <center>
                    <table aling="center" border="4" height="400" width='650' align="center" background="/text/images/mario.jpeg" no repeat>
                        <tr>
                            <td colspan="4"  >
                                <CEnter><B><H1>Series de Numeros</H1><br> </B></CEnter>
                            </td>
                        </tr>
                        <tr>
                                <td bgcolor= "#f11d1d"><b>Numero :</b><font color="blue">*</font></td>
                                <td bgcolor= "#fbfbfb"><b><input type="number" placeholder="0" name="n1" minlength="5" maxlength="30" pattern="[0,9]{4-16}"  required></b></td>
                        </tr>            
                        <tr>
                                <td bgcolor= "#f11d1d"><b>Tipo de Operacion :</b><font color="blue">*</font></td>
                                <td bgcolor= "#fbfbfb">
                                    <select name="Tipo_op" >
                                            <option value="1"></option>
                                            <option value="2">Acendente</option>                                
                                            <option value="3">Decendente</option>
                                    </select></td>
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
$tipo = $_POST['Tipo_op'];

      echo "<br><br>";
        echo "<table border = '2' >";
        
        if($tipo==2){ 
        echo "<H2>"."Vector Generado";
        echo "<H3>"."<Hr>";
            for($i=1;$i<=$num;$i++)
                {

                    if($i%2==0)
                    {
                            
                        echo "<td bgcolor= 'yellow'>";
                             echo "<H2>"." ". $i ;
                        echo "</td>";
                    }       
                    else
                    {
                            
                        echo "<td bgcolor= 'green'>";
                                    echo "<H2>"." ". $i ;
                         echo "</td>";
                            
                    }
            }
              
        }else if($tipo==3){
        echo "<table border = '2'>";
            $Numeros = range($num,1);
            echo "<H2>"."Vector Generado";
            echo "<H3>"."<Hr>";
            while (list($i,$Valor)=each($Numeros))
                    {
                        if($i%2==0)
                        {
                            
                            echo "<td bgcolor= 'yellow'>";
                                echo "<H2>".$Valor . "  ";
                            echo "</td>";
                        
                        }
                        else
                        {
                        
                            echo "<td bgcolor= 'green'>";
                                echo "<H2>".$Valor . "  ";
                            echo "</td>";
                        
                        } 
                        
                    }
        }
          echo "</table>";
        echo "<hr>";
      echo "<br><br>";




?>
</center>