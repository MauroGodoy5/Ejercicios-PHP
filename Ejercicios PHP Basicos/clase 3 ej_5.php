<Html>
<Body>
 <FORM ACTION="3ejercicio5.php" METHOD="POST">
 FECHA DE NACIMIENTO: <INPUT TYPE="DATE" NAME="date1" size="10">
 <Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 </FORM>
 <?Php
$fecha= $_REQUEST["date1"];


if($fecha<2004){
    print"ES MAYOR DE EDAD";
}
else{
    print"ES MENOR DE EDAD";
}
 
 ?>
</Body>
</Html> 