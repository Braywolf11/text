<!DOCTYPE html>

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
        <form action="tabla_multi.php" method="POST">
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

      echo "<br><br>";
      echo "<table border = '2'>";
        
        
        $mul=$num;
            for($i=1;$i<=10;$i++)
            {
                $resultado= $num * $i ;
                echo " <tr > ";
                    echo " <td> ";
                        echo "<H3> ". $mul . " x ". $i ." = ". $resultado. " <br>"; 
                    echo " </td> ";
                echo " </tr> ";
            }
        echo "</table>";
        
          
        echo "<hr>";
      echo "<br><br>";




?>
</center>