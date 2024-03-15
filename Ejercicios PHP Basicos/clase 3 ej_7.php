
<?php
$Nombre = $_REQUEST["Nombre"];
$Apellido=$_REQUEST["Apellido"];
$Profesion=$_REQUEST["Profesion"];
$Dni = $_REQUEST["Dni"];
$Edad = $_REQUEST["Edad"];
$Direccion = $_REQUEST["Direccion"];
$Telefono = $_REQUEST["Telefono"];




if ($Nombre=="" || $Dni=="" ||$Apellido=="" || $Telefono=="" )
 {
 echo "<H3>";
 echo "Falta ingresar algún dato <Br>";
 echo "Los datos marcados con (*) son
 obligatorios<Br>";
 echo "Pulse el boton para volver al
 formulario de Ingreso<Br>";
 }
 else{
 echo "<H2>";
 echo"Su nombre es: $Nombre <Br> Su apellido es:$Apellido <Br> Su DNI es:$Dni <Br> Su edad es:$Edad <Br> Su direccion es:$Direccion <Br> Su telefono es:$Telefono <Br> SU PROFESION ES: $Profesion";
 }
 ?>

 <FORM ACTION="3ejercicio7.html" METHOD="POST">
 <INPUT TYPE="SUBMIT" NAME="boton2"
 VALUE="Volver">

