<?php 
function DatosLogin($vUsuario, $vClave, $vConexion){
    $Usuario=array();
    
    $SQL="SELECT Id, Nombre, Apellido, IdNivel, Imagen, Sexo, Activo
     FROM Usuarios 
     WHERE Email='$vUsuario' AND Clave='$vClave'  ";

    $rs = mysqli_query($vConexion, $SQL);
        
    $data = mysqli_fetch_array($rs) ;
    if (!empty($data)) {
        $Usuario['ID'] = $data['Id'];
        $Usuario['NOMBRE'] = $data['Nombre'];
        $Usuario['APELLIDO'] = $data['Apellido'];
        $Usuario['NIVEL'] = $data['IdNivel'];
        
        switch ($data['Sexo']) {
            case 'F':
                $Usuario['SALUDO'] = 'Bienvenida';
                break;
            case 'M':
                $Usuario['SALUDO'] = 'Bienvenido';
                break;
            case 'O':
                $Usuario['SALUDO'] = 'Hola ';
                break;
        }
        

        if (empty( $data['Imagen'])) {
            $data['Imagen'] = 'user.png'; 
        }
        $Usuario['IMG'] = $data['Imagen'];
        $Usuario['ACTIVO'] = $data['Activo'];
        
    }
    return $Usuario;
}

?>