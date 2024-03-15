<html>
 <Title> Ej7-15.php </Title>
<Body>
 <?Php

$ar=fopen("Texto1.txt","r") or
die("No se pudo abrir el archivo");
while (!feof($ar))
{
$linea=fgets($ar);
echo $linea;
}
fclose($ar);
 $nombre="Texto1.txt"; echo "<H3>";
 if (file_exists($nombre))
 {
 echo "Tamaño de $nombre: ";
 echo filesize($nombre);
 }
 else
 {
 echo "No se encontro el archivo $nombre";
 }
 ?>
</Body>
</html> 