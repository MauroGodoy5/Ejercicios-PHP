<Html>
<Body>
 <FORM ACTION="3ejercicio2.php" METHOD="POST">
 precio1: <INPUT TYPE="TEXT" NAME="precio1" size="10">
 <Br>
 precio2: <INPUT TYPE="TEXT" NAME="precio2" size="10">
 <Br>
 precio3: <INPUT TYPE="TEXT" NAME="precio3" size="10">
 <Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 </FORM>
 <?Php
 $precio1=$_REQUEST["precio1"];
 $precio2=$_REQUEST["precio2"];
 $precio3=$_REQUEST["precio3"];
 
 $promedio= ($precio1+$precio2+$precio3)/3;
 echo"El promedio es: $promedio";
 
 ?>
</Body>
</Html> 





