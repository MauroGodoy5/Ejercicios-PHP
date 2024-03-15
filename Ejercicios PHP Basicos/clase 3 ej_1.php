<Html>
<Body>
 <FORM ACTION="3ejercicio1.php" METHOD="POST">
 valor1: <INPUT TYPE="TEXT" NAME="valor1" size="10">
 <Br>
 valor2: <INPUT TYPE="TEXT" NAME="valor2" size="10">
 <Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 </FORM>
 <?Php
 $valor1=$_REQUEST["valor1"];
 $valor2=$_REQUEST["valor2"];

 if ($valor1>$valor2)
  echo "el valor mas grande es $valor1";
 else 
 echo "el valor mas grande es $valor2";
 
 ?>
</Body>
</Html> 


