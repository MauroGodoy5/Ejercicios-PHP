<Html>
<Title> Ej5-4A.php </Title>
<Body>
<?Php
 // Inicializacion del Vector
 $Nombre[25] = "Alejandro";
 $Nombre[40] = "Javier";
 $Nombre[12] = "Ricardo";
 $Nombre[18] = "Marcos";
 $Nombre[37] = "Matias";
 $Nombre[28] = "Raul";
 $Nombre[19] = "Roberto";
 // Impresion del vector
 reset($Nombre);
 echo "<H2>"."Vector de Empleados";
 echo "<H3>"."<Hr>";
 do
 {
 // Buscar Posicion especificada
 $i = key($Nombre);
 // Buscar Contenido en esa posicion
 $Valor = current($Nombre);

 echo "Legajo: " . $i . " - ";
 echo "Nombre: " . $Valor;
 echo "<Br>";
 }
 while (next($Nombre));
 ?>
</Body>
</Html> 
