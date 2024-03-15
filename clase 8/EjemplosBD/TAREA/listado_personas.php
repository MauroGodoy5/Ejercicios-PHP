<?php
//este sera el listado de registros traidos de la base de datos
$Listado = array();
//variables de conexion
$Host = 'localhost';
$User = 'root';
$Password = '';
$BaseDeDatos = 'tareas';

//procedo al intento de conexion con esos parametros
$linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);

if ($linkConexion != false) {
    //quiero traer un listado de los NIVELES cargados
    //1) genero la consulta que deseo
    $SQL = "SELECT * FROM personas";

    //2) a la conexion actual le brindo mi consulta, y el resultado lo entrego a variable $rs
    $rs = mysqli_query($linkConexion, $SQL);

    if (!empty($_GET['codigo'])) {   
        //si conecto ok, procedo:
        if ($linkConexion != false) {
            //armo la consulta para eliminar de Paises el registro con ID del codigo
            $SQL_Delete='DELETE FROM personas WHERE id_persona = '.$_GET['codigo'];
            //envio la consulta a la conexion
            if (!mysqli_query($linkConexion, $SQL_Delete)) {
                die ('No se pudo eliminar');
            }else {
                echo "$SQL_Delete : Se ha borrado el codigo {$_GET['codigo']} - <br />";
            }
        }
    }
    //3) el resultado deberá organizarse en una matriz, entonces lo recorro
    //mientras haya resultados, voy tomando cada dato del resultado en el array $data
    //cada elemento se corresponde a un campo de mi consulta
    //estructuro mi propio array $Listado 
    $i=0;
    while ($data = mysqli_fetch_array($rs)) {
        $Listado[$i]['ID'] = $data['id_persona'];
        $Listado[$i]['NOMBRE'] = $data['Nombre'];
        $Listado[$i]['APELLIDO'] = $data['Apellido'];
        $Listado[$i]['EMAIL'] = $data['Correo'];
        $i++;
    }


}

//si $Listado contiene valores, ya dispongo de los datos
if (!empty($Listado)) {
    echo '<h3>Listado de Personas</h3>';
    $cantidadRegistros = count($Listado);

    for ($i = 0; $i < $cantidadRegistros; $i++) {  ?>
        ID: <?php  echo "{$Listado[$i]['ID']}"; ?>  | <br /> 
        NOMBRE:  <?php  echo "{$Listado[$i]['NOMBRE']}"; ?>  |<br />
        APELLIDO:  <?php  echo "{$Listado[$i]['APELLIDO']}"; ?>  |<br />
        EMAIL:  <?php  echo "{$Listado[$i]['EMAIL']}"; ?>  | <br />
        <a href='listado_personas.php?codigo=<?php echo $Listado[$i]['ID'] ?>'
         onclick="if (confirm('Esta seguro de eliminar este pais?')) { return true; } else {return false; }" >
         Eliminar </a> 
        <br />
    <?php
    }
    
}
?>
<br />