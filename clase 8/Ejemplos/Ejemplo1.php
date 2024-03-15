<?php
$Mensaje = '';

if (!empty($_POST['Ingresar'])) {
    //esto va a ejecutar cuando el boton llegue con valor, es decir se haya pulsado    
    //validacion de la caja de texto del Login
    if (strlen($_POST['Login']) < 3) {
        //su longitud es menor a 3 caracteres
        $Mensaje = "Debe ingresar un Login de 3 caracteres o mas. <br />";
    } else if (empty($_POST['Clave'])) {
        //validacion de la caja del Password
        $Mensaje = "Debe ingresar su Clave. <br />";
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
        $TextoLog = "$FechaHoraHoy : access {$_POST['Login']}  \n";
        
        //escribo log de acceso
        //abro el archivo ( o lo genera)
        $ArchivoLog = fopen("logs/access_$FechaHoy.log", 'a+');  
        //lo escribo con el texto
        fwrite($ArchivoLog, $TextoLog);
        //cierro el archivo
        fclose($ArchivoLog);
        $Mensaje = "<strong>Se ha guardado el log de acceso.</strong> Puedes verlo <a href='logs/access_$FechaHoy.log' target='_blank'>aqui</a> ";
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
                                            <label>Ingresa tu login</label>
                                            <input class="form-control" type="text" name="Login" 
                                                   value="<?php echo!empty($_POST['Login']) ? $_POST['Login'] : ''; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Ingresa tu clave</label>
                                            <input class="form-control" type="password" name="Clave"  />
                                        </div>

                                        <button type="submit" name="Ingresar" value="Ingresar"  class="btn btn-default">Ingresa</button>                                   

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