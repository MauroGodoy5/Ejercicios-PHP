<Html>
<TITLE> Ejercicio2 clase 5 </TITLE>
<Body>
<?Php
 function Potencia($x, $y)
 {
 $e = pow($x,$y);
 return $e;
 }
 // Programa principal

 if ( $_REQUEST["Boton"] != "" )
 {
 $V1 = $_REQUEST["Valor1"];
 $V2 = $_REQUEST["Valor2"];

 echo ("<H2>");
 echo (" El resultado de $V1 elevado a la potencia $V2 es: " . Potencia($V1,
$V2));
 }
 else
 {
 ?>
 <FORM ACTION="5ejercicio2.php" METHOD="POST">
 <H2>
 Ingrese Primer valor :
 <Input Type="Text" Name="Valor1" Size="5">
 <Br>
 Ingrese Segundo valor:
 <Input Type="Text" Name="Valor2" Size="5">
 
 <Br><Br>
 <Input Type="Submit" Name="Boton" Value="Ingresar Datos">
 </Form>
 <?Php
 }
 ?>
</Body>
</Html>