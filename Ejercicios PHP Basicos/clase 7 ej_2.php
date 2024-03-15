
<Html>
<Body>
<?Php

 $precio=$_REQUEST["valor1"];
 $cantidad=$_REQUEST["valor2"];
 $total=$precio * $cantidad;

 echo number_format( $precio,2,",","."); 
 echo"<br>";
echo"La cantidad es: $cantidad";
 echo"<br>";
 echo number_format( $total,2,",","."); 
 

 ?>
 
 <FORM ACTION="7ejercicio2.php" METHOD="POST">
Precio: <INPUT TYPE="TEXT" NAME="valor1" size="10">
 <Br>
 Cantidad: <INPUT TYPE="TEXT" NAME="valor2" size="10">
 <Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 </FORM>

</Body>
</Html> 