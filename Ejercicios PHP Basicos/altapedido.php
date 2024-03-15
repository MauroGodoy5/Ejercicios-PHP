<html>
<head>
</head>
<body>
<?php
 $ar=fopen("pedidos.txt","a") or
 die("No se pudo abrir el archivo");
 fputs($ar,"Apellido y nombre:".$_REQUEST['apenom']."<br>");
 fputs($ar,"Direccion:".$_REQUEST['direccion']."<br>");
 fputs($ar,"Telefono:".$_REQUEST['telefono']."<br>");
 fputs($ar,"Muzarella:".$_REQUEST['muzarella']."<br>");
 fputs($ar,"Jamon y Queso:".$_REQUEST['jamonqueso']."<br>");
 fputs($ar,"Palmitos:".$_REQUEST['palmitos']."<br>");
 fputs($ar,"Tipo de Envio:".$_REQUEST['envio']."<br>");
 fputs($ar,"Comentarios:".$_REQUEST['comentarios']."<br>");
 fputs($ar,"<hr>");
 fclose($ar);
?>
</form>
Datos del pedido almacenado.<br>
<a href="8EJERCICIO1.PHP">Retornar</a>
</body>
</html>