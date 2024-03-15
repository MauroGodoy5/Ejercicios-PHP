<html>
 <Title> Ej7-15.php </Title>
<Body>
 <?Php

$ar=fopen("Proyecto.txt","r") or
die("No se pudo abrir el archivo");
while (!feof($ar))
{
$linea=fgets($ar);
echo $linea;
}
fclose($ar);
 



 $origen="Proyecto.txt";
 $f = @fopen($origen,"r") or
 die("Error al abrir el archivo: $origen");
 echo "<H3>";
 echo "Archivo: ";
 echo substr($linea,0,57); 
 echo "<Br>";
 fclose($f);
 $destino="Proyectocopia.txt";
 if (copy($origen, $destino))
 {
    echo "<Br>";
 echo "La copia se realizo con exito";
 }
 else
 {
 echo "No se pudo realizar la copia";
 }
 ?>
</Body>
</html> 