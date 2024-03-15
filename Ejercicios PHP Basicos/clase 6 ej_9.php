<Html>
<Title> Ej5-14.php </Title>
<Body>
<?Php
 // Inicializacion del Vector
 $Numeros = range(800,700);
 echo "<H2>"."Vector Generado";
 echo "<H3>"."<Hr>";
 while (list($i,$Valor)=each($Numeros))
 {
 echo $Valor . " - ";
 }
 ?>
</Body>
</Html> 