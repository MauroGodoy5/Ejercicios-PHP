<!-- MUSTRA QUE NAVEGADOR SE ESTA USANDO
<?php
    $n = $_SERVER['HTTP_USER_AGENT'];
    $ie = strpos($n, 'MSIE');
    $f = strpos($n, 'Firefox');
    $c = strpos($n, 'Chrome');
    $s = strpos($n, 'Safari');
    echo "<center><H1><br>";
    if ($ie!="")
    echo "Estas utilizando: Internet Explorer";
    else
    if ($f !="")
    echo "Estas utilizando: Firefox";
    else
    if ($c !="")
    echo "Estas utilizando: Google Chrome";
    else
    if ($s !="")
    echo "Estas utilizando: Safari";
    echo"<Br><Br>";
    ?>
<!-- //se crean variables para mostrar una caratula -->
<Html>
<Title>
    <h1>PRESENTACION</h1>
</Title>
<Body BgColor="FFFF99">
<?php
 echo "<H1><Center>";
 echo "Datos Personales </H1>";
 echo "<Hr><Center><H2>";
 define ("COLOR","#0000AA");
 $nombre = "Eduardo Mansilla";
 $direccion = "Colon 1536";
 $carrera = "Web - Developer";
 echo "<Font color= " . COLOR . ">";
 echo "Nombre y Apellido: $nombre <Br><Br>";
 echo "Domicilio : $direccion <Br><Br>";
 echo "Carrera que cursa: $carrera <Br><Br>";
 echo "<H2>- ISSD -";
 ?>
</Body>
</Html>

<!-- SE MUESTRA EL IDIOMA QUE EL NAVEGADOR ESTA USANDO -->
<html>
<head>
<title>Ejemplo 2-3 - Detector de lengua</title>
</head>
<body BgColor="#FFFFAA">
<?php
//Leer del navegador cuál es su lengua oficial
Instituto Superior Santo Domingo Clase 2 - Dai3.doc Página 7 de 9
$idioma= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
echo "<Center><H1><Br>";
echo "El idioma que est&aacutes utilizando es: ";
//Formular las posibilidades que se pueden dar:
 if($idioma == "es")
 echo "Espa&ntildeol";
 else
 if ($idioma == "fr")
 echo "Francés";
 else
 echo "Inglés";
?>
</body>
</html> 