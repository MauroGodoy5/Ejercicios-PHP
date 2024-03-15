<Html>
<Body>
 <FORM ACTION="3ejercicio4.php" METHOD="POST">
 Primer Angulo: <INPUT TYPE="TEXT" NAME="valor1" size="10">
 <Br>
 Segundo Angulo: <INPUT TYPE="TEXT" NAME="valor2" size="10">
 <Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 </FORM>
 <?Php
 $valor1=$_REQUEST["valor1"];
 $valor2=$_REQUEST["valor2"];
    $angulo=180;
 $valor3= ($angulo - ($valor1 + $valor2));

 if($valor1 == $valor2 && $valor2 == $valor3){
    print"ES UN TRIANGULO EQUILATERO";
 }

 else if($valor1!= $valor2 && $valor2!= $valor3 ){
    print"ES UN TRIANGULO ESCALENO";
}

else if(($valor1==$valor2 && $valor2 != $valor3) || ($valor3==$valor2 && $valor2 != $valor1) || ($valor1==$valor3 && $valor3 != $valor2)){
    print"ES UN TRIANGULO ISOSCELES";
}






    
 
 ?>
</Body>
</Html>