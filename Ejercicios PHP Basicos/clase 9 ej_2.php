<Htm>
 <Title> Ej7-15.php </Title>
<Body>
 <?Php

$ar=fopen("Texto2.txt","r") or
die("No se pudo abrir el archivo");
while (!feof($ar))
{
$linea=fgets($ar);
echo $linea;
}


fclose($ar);

echo"<br>";
echo"Posicionamiento en el decimo caracter: ";
    echo substr($linea,0,10);
    echo"<br>";
    echo "cinco caracteres a partir del decimo: ";
 echo substr($linea,10,5); 
 
 
 ?>
</Body>
</Htm> 