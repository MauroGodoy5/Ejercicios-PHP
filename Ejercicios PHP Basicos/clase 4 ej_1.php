<Html>
<Title> Capitulo 3 - Ejemplo 2 </Title>
<Body>
<H2>

<FORM ACTION="4ejercicio1.php" METHOD="POST">
Ingrese un numero: <INPUT TYPE="text" NAME="multiplo" >
 <Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 </FORM>
<Hr>
<?Php
$multiplo=$_REQUEST["multiplo"];
 $m=0; // Valor Inicial
while ($m<=500)
{
echo "$m - ";
$m = $m+$multiplo;
}
?>
</Body>
</Html> 