<?php
function Listar_Niveles($vConexion) {

    $Listado=array();

      //1) genero la consulta que deseo
        $SQL = "SELECT * FROM niveles ORDER BY niveles";

        //2) a la conexion actual le brindo mi consulta, y el resultado lo entrego a variable $rs
        $rs = mysqli_query($vConexion, $SQL);
        
        //3) el resultado deberá organizarse en una matriz, entonces lo recorro
        $i=0;
        while ($data = mysqli_fetch_array($rs)) {
            $Listado[$i]['ID'] = $data['id_niveles'];
            $Listado[$i]['NOMBRE'] = $data['niveles'];
            $i++;
        }

    //devuelvo el listado generado en el array $Listado. (Podra salir vacio o con datos)..
    return $Listado;

}
?>