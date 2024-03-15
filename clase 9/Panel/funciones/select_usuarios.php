<?php
function Listar_Usuarios($vConexion) {

    $Listado=array();

    //1) genero la consulta que deseo
    $SQL = "SELECT U.id_usuarios, U.Nombre, U.Apellido, U.Email, U.Clave , N.niveles as Nivel, P.paises as Pais, U.Sexo
        FROM usuarios U, niveles N, paises P
        WHERE U.id_pais=P.id_paises AND U.id_nivel=N.id_niveles
        ORDER BY U.Apellido, U.Nombre";

    //2) a la conexion actual le brindo mi consulta, y el resultado lo entrego a variable $rs
     $rs = mysqli_query($vConexion, $SQL);
        
     //3) el resultado deberá organizarse en una matriz, entonces lo recorro
     $i=0;
    while ($data = mysqli_fetch_array($rs)) {
            $Listado[$i]['ID'] = $data['id_usuarios'];
            $Listado[$i]['NOMBRE'] = $data['Nombre'];
            $Listado[$i]['APELLIDO'] = $data['Apellido'];
            $Listado[$i]['EMAIL'] = $data['Email'];
            $Listado[$i]['NIVEL'] = $data['Nivel'];
            $Listado[$i]['PAIS'] = $data['Pais'];
            $Listado[$i]['SEXO'] = $data['Sexo'];

            $i++;
    }


    //devuelvo el listado generado en el array $Listado. (Podra salir vacio o con datos)..
    return $Listado;

}
?>