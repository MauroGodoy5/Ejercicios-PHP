<Html>
<Body>
 <FORM ACTION="4ejercicio2.php" METHOD="POST">
 VALOR 1: <INPUT TYPE="TEXT" NAME="valor1" size="10">
 <Br>
 VALOR 2: <INPUT TYPE="TEXT" NAME="valor2" size="10">
 <Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 </FORM>
 <?Php
 $valor1=$_REQUEST["valor1"];
 $valor2=$_REQUEST["valor2"];

 
 while($valor1<$valor2){
    $valor1= $valor1 + 1;
      echo "$valor1 - ";
 }

 while($valor1>$valor2){
    $valor1=$valor1 - 1;
    echo "$valor1 - ";

 }
 
 ?>
</Body>
</Html> 