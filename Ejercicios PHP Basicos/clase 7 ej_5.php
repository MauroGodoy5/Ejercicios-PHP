<Html>
<Title> Ej6-8.php </Title>
<Body>

<FORM ACTION = "7ejercicio5.php" METHOD = "POST">
 Ingrese Fecha (dd/mm/aaaa):
 <INPUT TYPE = "TEXT" NAME="Fecha" size="10">
 <Br><Br>
 <INPUT TYPE = "SUBMIT" NAME="Boton" VALUE="Ejecutar">
 </FORM> 
<?Php
$fecha= $_REQUEST["Fecha"]; 

function nombreMes($mes)
{
switch ($mes)
{
case 1 : return "Enero";
case 2 : return "Febrero";
case 3 : return "Marzo";
case 4 : return "Abril";
case 5 : return "Mayo";
case 6 : return "Junio";
case 7 : return "Julio";
case 8 : return "Agosto";
case 9 : return "Septiembre"; 
case 10 : return "Octubre";
case 11 : return "Noviembre";
case 12 : return "Diciembre";
 }
 } 

 echo "Fecha Ingresada: ";
 echo $fecha;
 echo "<Br><Br>";
 $dia = substr($fecha,0,2);
 $mes = substr($fecha,3,2);
 $anio = substr($fecha,6,4);
 $F = $dia." de ".nombreMes($mes)." de ".$anio;
 echo "La fecha en formato literal es: " . $F; 
 ?>
</Body>
</Html> 