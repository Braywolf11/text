<Html>
<Title> Ejemplo8-Range.php </Title>
<Body>
<?Php
// Inicializacion del Vector
$Numeros = range(180,150);

echo "<H2>"."Vector Generado";
echo "<H3>"."<Hr>";
while (list($i,$Valor)=each($Numeros))
{
      echo $Valor . " - ";
}
?>
</Body>
</Html>