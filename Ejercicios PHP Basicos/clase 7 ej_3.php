<Html>
<Title> Ej6-19.php </Title >
<Body>
<?Php
 echo "<H3>";
 $cadena = "mauro estudia la Carrera web developer ne la academia santo domingo y esta en segundo año";
 $clave = "car";
 echo "Cadena Original: " . $cadena;
 echo "<Br><Br>";
 echo "Clave buscada: " . $clave;
 echo "<Br><Br>";
 $p = strpos($cadena, $clave);
 if ($p!="")
 {
 echo "La clave se encuentra en la posición: $p" ;
 }
 else
 {
 echo "No existe la clave en la cadena fuente";
 }
?>
</Body>
</Html>