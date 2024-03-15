<html>
<head>
<title>Problema</title>
</head>
<body>
<h2>Listado de pedido</h2>
<?php
 $ar=fopen("pedidos.txt","r") or
 die("No se pudo abrir el archivo");
 while (!feof($ar))
 {
 $linea=fgets($ar);
 echo $linea;
}
fclose($ar);
?>
<a href="8EJERCICIO1.PHP">Retornar</a>
</body>
</html>