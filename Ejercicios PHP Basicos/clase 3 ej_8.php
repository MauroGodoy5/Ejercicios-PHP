<html>
<body>
    <form  method="post"action="3ejercicio8.php">

            Ingrese el sueldo basico:<input type="text" name="sueldo">
<br>
            Seleccione la Profecion:<select name="select">
            <option value="arquitecto">Arquitecto</option>
            <option value="jefe">Jefe</option>
            <option value="empleado">Empleado</option>
            <option value="guardia">Guardia</option>
            </select>
<br>

            <input type="submit" name="boton1" value="Cargar">
    </form>

<?php

$select=$_REQUEST["select"];
$sueldo=$_REQUEST["sueldo"];
$porcentaje=0;
$sueldofinal=0;


if($select== "arquitecto"){
    $porcentaje=((50*$sueldo)/100);
    $sueldofinal=($sueldo+$porcentaje);
    
}
else if($select== "jefe"){
    $porcentaje=((30*$sueldo)/100);
    $sueldofinal=($sueldo+$porcentaje);
    
}
else if($select== "empleado"){
    $porcentaje=((20*$sueldo)/100);
    $sueldofinal=($sueldo+$porcentaje);
    
}
else if($select== "guardia"){
    $porcentaje=((10*$sueldo)/100);
    $sueldofinal=($sueldo+$porcentaje);
    
}

    
echo"su sueldo final es: $sueldofinal";

?>
</body>
</html>


