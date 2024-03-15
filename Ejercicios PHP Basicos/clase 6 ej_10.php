<Html>
<Title> Ej5-16.php </Title>
<Body>
<?Php
 // Inicializacion del Vector
 $Vector=array_fill(70,21,"PHP");
 echo "<H2>"."Vector generado";
 echo "<H3>"."<Hr>";
 while (list($i,$Valor)=each($Vector))
 {
 echo "Posición: " . $i . " - ";
 echo "Contenido: " . $Valor;
 echo "<Br>";
 }
 ?>
</Body>
</Html>