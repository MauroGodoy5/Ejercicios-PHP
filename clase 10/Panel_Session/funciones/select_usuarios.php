<?php
function Listar_Usuarios($vConexion) {

    $Listado=array();

    //1) genero la consulta que deseo
    $SQL = "SELECT U.Id, U.Nombre, U.Apellido, U.Email, N.Denominacion as Nivel, P.Denominacion as Pais, U.Sexo, U.Activo
        FROM usuarios U, niveles N, paises P
        WHERE U.IdPais=P.Id AND U.IdNivel=N.Id
        ORDER BY U.Apellido, U.Nombre";

    //2) a la conexion actual le brindo mi consulta, y el resultado lo entrego a variable $rs
     $rs = mysqli_query($vConexion, $SQL);
        
     //3) el resultado deberá organizarse en una matriz, entonces lo recorro
     $i=0;
    while ($data = mysqli_fetch_array($rs)) {
            $Listado[$i]['ID'] = $data['Id'];
            $Listado[$i]['NOMBRE'] = $data['Nombre'];
            $Listado[$i]['APELLIDO'] = $data['Apellido'];
            $Listado[$i]['EMAIL'] = $data['Email'];
            $Listado[$i]['NIVEL'] = $data['Nivel'];
            $Listado[$i]['PAIS'] = $data['Pais'];
            $Listado[$i]['SEXO'] = $data['Sexo'];
            $Listado[$i]['ACTIVO'] = $data['Activo'];

            $i++;
    }


    //devuelvo el listado generado en el array $Listado. (Podra salir vacio o con datos)..
    return $Listado;

}

function EncontrarUsuario($vIDUsuario, $vConexion){
    $Usuario=array();
    
    $SQL="SELECT U.*, P.Denominacion as Pais, N.Denominacion as Nivel
     FROM Usuarios U, Paises P, Niveles N
     WHERE U.Id = $vIDUsuario
     AND U.IdNivel=N.Id
     AND U.IdPais=P.Id";

    $rs = mysqli_query($vConexion, $SQL);
        
    $data = mysqli_fetch_array($rs) ;
    if (!empty($data)) {
        $Usuario['ID']         = $data['Id'];
        $Usuario['NOMBRE']     = $data['Nombre'];
        $Usuario['APELLIDO']   = $data['Apellido'];
        $Usuario['EMAIL']      = $data['Email'];
        $Usuario['NIVEL']      = $data['Nivel'];
        $Usuario['PAIS']       = $data['Pais'];
        $Usuario['SEXO']       = $data['Sexo'];
        if (empty( $data['Imagen'])) {
            $data['Imagen'] = 'user.png'; 
        }
        $Usuario['IMG']        = $data['Imagen'];
        $Usuario['ACTIVO']     = $data['Activo'];
        
    }
    return $Usuario;
}

function Modificar_Acceso_Usuario($vIdUsuario, $vActivo, $vConexion){
    
    $SQL="UPDATE Usuarios SET Activo = $vActivo WHERE Id = $vIdUsuario";
    
    if (!mysqli_query($vConexion, $SQL)) {
        return false;
    }
    
    return true;
}

?>