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
<body>
<form action="series.php" method="POST">
<center>
        <table aling="center" border="4">
            <tr>
                <td colspan="4" >
                    <CEnter><B><H2>Series de Numeros</H2><br> </B></CEnter>
                </td>
            </tr>
            <tr>
                    <td bgcolor= "726e6e"><b>Numero :</b><font color="red">*</font></td>
                    <td bgcolor= "#fbfbfb"><b><input type="number" placeholder="0" name="n1" minlength="5" maxlength="30" pattern="[0,9]{4-16}"  required></b></td>
            </tr>            
            <tr>
                    <td bgcolor= "726e6e"><b>Tipo de Operacion :</b><font color="red">*</font></td>
                    <td bgcolor= "#fbfbfb">
                        <select name="Tipo_op" >
                                <option value="1"></option>
                                <option value="2">Acendente</option>                                
                                <option value="3">Decendente</option>
                        </select></td>
            </tr>
            <td colspan="2"><br>
                <center><input type="submit" value="PROCESAR"></center><br>
                              
            </td>

        </table>
    </center>
 </form>
    
</body>
</html>
<center></center>
<?php

$num = $_POST['n1'];
$tipo = $_POST['Tipo_op'];

      echo "<br><br>";
            echo "<table border = '2'>";
            if($tipo==2){ 
                for($i=1;$i<=$num;$i++)
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
              
          }else if($tipo==3){

                for($i=$num;$i<=0;$i--)
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
        }
          echo "</table>";
        echo "<hr>";
      echo "<br><br>";




?>
</center>