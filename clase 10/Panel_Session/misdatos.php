<?php 
session_start();

//si tengo vacio mi elemento de sesion me tiene q redireccionar al login.. 
//al cerrarsesion para que mate todo de la sesion y el se encarga de ubicar en el login
if (empty($_SESSION['Usuario_Nombre']) ) {
    header('Location: cerrarsesion.php');
    exit;
}

require_once 'header.inc.php'; ?>

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    Usuario:  <?php echo $_SESSION['Usuario_Nombre'].' '.$_SESSION['Usuario_Apellido']; ?>
                </a>
            </div>
            <!-- /.navbar-header -->

            <?php require_once 'user.inc.php'; ?>
            <!-- /.navbar-top-links -->
            
            <?php require_once 'menu.inc.php'; ?>           
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modifica tus datos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                  
                    <div class="row">
                    <div class="col-lg-6">
                                        
                                        <?php if (!empty($Mensaje)) { ?>
                                        <div class="alert alert-<?php echo $Estilo; ?> alert-dismissable">
                                        <?php echo $Mensaje; ?>
                                        </div>
                                        <?php } ?>
                                        
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control" type="text" name="Nombre" id="nombre" 
                                            value="<?php echo !empty($_POST['Nombre']) ? $_POST['Nombre'] : ''; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido:</label>
                                            <input class="form-control" type="text" name="Apellido" id="apellido" 
                                            value="<?php echo !empty($_POST['Apellido']) ? $_POST['Apellido'] : ''; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="email" name="Email" id="email" 
                                            value="<?php echo !empty($_POST['Email']) ? $_POST['Email'] : ''; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Clave:</label>
                                            <input class="form-control" type="password" name="Clave" id="clave" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Reingresa la clave:</label>
                                            <input class="form-control" type="password" name="ReClave" id="reclave" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Pais</label>
                                            <select class="form-control" name="Pais" id="pais">
                                                <option value="">Selecciona...</option>
                                                <?php 
                                                $selected='';
                                                for ($i=0 ; $i < $CantidadPaises ; $i++) {
                                                    if (!empty($_POST['Pais']) && $_POST['Pais'] ==  $ListadoPaises[$i]['ID']) {
                                                        $selected = 'selected';
                                                    }else {
                                                        $selected='';
                                                    }
                                                    ?>
                                                    <option value="<?php echo $ListadoPaises[$i]['ID']; ?>" <?php echo $selected; ?>  >
                                                        <?php echo $ListadoPaises[$i]['NOMBRE']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Sexo:</label>
                                            <br />
                                            <label class="radio-inline">
                                                <input type="radio" name="Sexo" id="SexoF" 
                                                value="F" 
                                                <?php echo (!empty($_POST['Sexo']) && $_POST['Sexo'] == 'F') ? 'checked':''; ?>  >Femenino
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Sexo" id="SexoM" 
                                                value="M" 
                                                <?php echo (!empty($_POST['Sexo']) && $_POST['Sexo'] == 'M') ? 'checked':''; ?>>Masculino
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Sexo" id="SexoO" 
                                                value="O"
                                                <?php echo (!empty($_POST['Sexo']) && $_POST['Sexo'] == 'O') ? 'checked':''; ?>>Otro
                                            </label>
                                        </div>
                                       

                                        <button type="submit" class="btn btn-default" value="Registrar" name="BotonRegistrar" >Registrarme</button>
                                       
                                    </div>
                    
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