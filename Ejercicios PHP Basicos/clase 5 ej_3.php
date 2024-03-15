<Html>
<TITLE> Ejercicio3 clase 5 </TITLE>
<Body>
<?Php
 function Orden($a, $b, $c)
 {
     
 $valores = array($a, $b, $c); 
 sort($valores);
  foreach($valores as $V){
      echo"valores ingresados de menor a mayor: ";
      echo$V."</br>";
  }
 }
 // Programa principal

 if ( $_REQUEST["Boton"] != "" )
 {
 $V1 = $_REQUEST["Valor1"];
 $V2 = $_REQUEST["Valor2"];
 $V3 = $_REQUEST["Valor3"];
 echo ("<H2>");
 echo("".orden($V1,$V2 ,$V3));
 }
 else
 {
 ?>
 <FORM ACTION="5ejercicio3.php" METHOD="POST">
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