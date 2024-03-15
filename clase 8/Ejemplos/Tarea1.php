<?php
$Mensaje = '';

if (!empty($_POST['Registrar'])) {
    //esto va a ejecutar cuando el boton llegue con valor, es decir se haya pulsado    
    //validacion de la caja de texto del Login
    if (strlen($_POST['Nombre']) < 3) {
        //su longitud es menor a 3 caracteres
        $Mensaje = "Debe ingresar un Nombre de 3 caracteres o mas. <br />";
    } else if (strlen($_POST['Apellido']) < 3) {
        //validacion de la caja del Password
        $Mensaje = "Debe ingresar un Apellido de 3 caracteres o mas. <br />";}

        else if (strlen($_POST['Email']) < 3) {
            //validacion de la caja del Password
            $Mensaje = "Debe ingresar un Email de 3 caracteres o mas. <br />";
    } else {
        //creo la carpeta de logs, donde voy a crear mi archivo

        if (!is_dir('logs')) {     //pregunto si no existe el directorio
            mkdir('logs');         //si no existe, lo creo
            chmod('logs', 0777);   //le doy permisos de lectura/escritura
        }
        //variables a utilizar
        $FechaHoy = date('Ymd');
        $FechaHoraHoy = date('Y-m-d H:i:s');
        
        //mensaje a escribir en el archivo: 
        $TextoLog = "Fecha y hora actual $FechaHoraHoy | Valor del apellido {$_POST['Apellido']} | Valor del nombre {$_POST['Nombre']} | Email {$_POST['Email']}  \n";
        
        //escribo log de acceso
        //abro el archivo ( o lo genera)
        $ArchivoLog = fopen("logs/registro_accesos_$FechaHoy.csv", 'a+');  
        //lo escribo con el texto
        fwrite($ArchivoLog, $TextoLog);
        //cierro el archivo
        fclose($ArchivoLog);
        $Mensaje = "<strong>Se ha guardado el log de acceso.</strong> Puedes verlo <a href='logs/registro_accesos_$FechaHoy.csv' target='_blank'>aqui</a> ";
    }
}

require_once 'header.inc.php';
?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php require_once 'superior.inc.php'; ?>
            
            <div class="navbar-default sidebar" role="navigation">
                <?php require_once 'menu.inc.php'; ?>
            </div>
            
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Formulario de login - Proceso con Log de acceso</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ejemplo de un Formulario de Login, registrando un archivo en la carpeta logs/ cada vez que se ingresan ambos campos y se pulsa el boton.
                        </div>
                        <div class="panel-body">

                            <form role="form" method="post" >
                                <div class="row">
                                    <div class="col-lg-4" style="text-align: left;">
                                        <img src="dist/img/login.png" />
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- seccion central  -->
                                        
                                        <?php if (!empty($Mensaje)) { ?>
                                        <div class="alert alert-warning">
                                            <?php echo $Mensaje; ?>
                                        </div>
                                        <?php } ?>
                                        
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control" type="text" name="Nombre" id="nombre" value="<?php echo !empty($_POST['Nombre']) ? $_POST['Nombre'] : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido:</label>
                                            <input class="form-control" type="text" name="Apellido" id="apellido" value="<?php echo !empty($_POST['Apellido']) ? $_POST['Apellido'] : ''; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="email" name="Email" id="email" value="<?php echo !empty($_POST['Email']) ? $_POST['Email'] : ''; ?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                                        </div>

                                        <button type="submit" class="btn btn-default" value="Registrar" name="Registrar" >Registrarme</button>
                                        o <a href="index.php">Volver al inicio</a>
                                    </div>

                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                            </form>

<?php print_r($_POST); ?>

                            <hr />
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php require_once 'footer.inc.php'; ?>