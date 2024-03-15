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
 $nombre="Apuntes.txt"; echo "<H3>";
 if (file_exists($nombre))
 {
 echo "Tamaño de $nombre: ";
 echo filesize($nombre);
 }
 else
 {
 echo "No se encontro el archivo $nombre";
 }

 $origen="Apuntes.txt";
 $f = @fopen($origen,"r") or
 die("Error al abrir el archivo: $origen");
 echo "<H3>";
 echo "Archivo: ";
 echo fgets($f);
 echo "<Br>";
 fclose($f);
 $destino="Proyecto.txt";
 if (copy($origen, $destino))
 {
    echo "<Br>";
 echo "La copia se realizo con exito";
 }
 else
 {
 echo "No se pudo realizar la copia";
 } 

 echo "<Br>";
 $nombre="Apuntes.txt";
 if (file_exists($nombre))
 {
 unlink($nombre);
 echo "El archivo $nombre se borró correctamente";
 }
 else
 {
 echo "No se encontro el archivo $nombre";
 } 


 $nombreActual="Proyecto.txt";
 $nombreNuevo ="Temas.txt";
 if (file_exists($nombreActual))
 {
 rename($nombreActual, $nombreNuevo);
 echo "El nombre se cambió correctamente";
 }
 else
 {
 echo "No se encontro el archivo
$nombreActual";
 } 



 ?>
</Body>
</html> 