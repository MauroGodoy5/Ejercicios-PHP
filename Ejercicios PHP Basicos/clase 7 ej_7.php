<Html>
<Title> Ej6-19.php </Title >
<Body>
<?Php
 echo "<H3>";
 $cadena = "el libro de fisica es muy denso y e lde quimica es muy grande muy";
 $clave = "muy";
 echo "Cadena Original: " . $cadena;
 echo "<Br><Br>";
 echo "Clave buscada: " . $clave;
 echo "<Br><Br>";
 echo "la palabra clave se repite :" .  substr_count($cadena,$clave)."veces";
 
?>
</Body>
</Html>