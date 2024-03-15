<Html>
<TITLE> Ejercicio1 clase 5 </TITLE>
<Body>
<?Php
 function Promedio($a, $b, $c)
 {
 $p = ($a + $b + $c) / 3;
 return $p;
 }
 // Programa principal

 if ( $_REQUEST["Boton"] != "" )
 {
 $V1 = $_REQUEST["Valor1"];
 $V2 = $_REQUEST["Valor2"];
 $V3 = $_REQUEST["Valor3"];
 echo ("<H2>");
 echo (" El promedio de $V1 , $V2 y $V3 es: " . Promedio($V1,
$V2,$V3));
 }
 else
 {
 ?>
 <FORM ACTION="5ejercicio1.php" METHOD="POST">
 <H2>
 Ingrese Primer valor :
 <Input Type="Text" Name="Valor1" Size="5">
 <Br>
 Ingrese Segundo valor:
 <Input Type="Text" Name="Valor2" Size="5">
 <Br>
 Ingrese Tercer valor:
 <Input Type="Text" Name="Valor3" Size="5">
 
 <Br><Br>
 <Input Type="Submit" Name="Boton" Value="Ingresar Datos">
 </Form>
 <?Php
 }
 ?>
</Body>
</Html>