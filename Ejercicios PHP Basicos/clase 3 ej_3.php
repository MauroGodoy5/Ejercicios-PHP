<Html>
<Body>
 <FORM ACTION="3ejercicio3.php" METHOD="POST">
 persona1: <INPUT TYPE="TEXT" NAME="nombre1" size="10">
        <INPUT TYPE="TEXT" NAME="sueldo1" size="10">
 <Br>
 persona2: <INPUT TYPE="TEXT" NAME="nombre2" size="10">
        <INPUT TYPE="TEXT" NAME="sueldo2" size="10">
 <Br>
 persona3: <INPUT TYPE="TEXT" NAME="nombre3" size="10">
        <INPUT TYPE="TEXT" NAME="sueldo3" size="10">
 <Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 </FORM>
 <?Php
 $nombre1=$_REQUEST["nombre1"];
 $sueldo1=$_REQUEST["sueldo1"];

 $nombre2=$_REQUEST["nombre2"];
 $sueldo2=$_REQUEST["sueldo2"];

 $nombre3=$_REQUEST["nombre3"];
 $sueldo3=$_REQUEST["sueldo3"];
 
 
 
 if($sueldo1<$sueldo2 && $sueldo1<$sueldo3)
 {
    echo"el menor de los sueldo es: $nombre1 que cobra: $sueldo1";
 } 
 else if ($sueldo2<$sueldo1 && $sueldo2<$sueldo3)
 {
    echo "el menor de los sueldo es: $nombre2 que cobra: $sueldo2";
 }
 else if ($sueldo3<$sueldo1 && $sueldo3<$sueldo2)
 {
  echo "el menor de los sueldo es: $nombre3 que cobra: $sueldo3";
 }
 ?>
</Body>
</Html> 