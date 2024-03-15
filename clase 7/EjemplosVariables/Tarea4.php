<?php require_once 'header.inc.php'; ?>

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
                <a class="navbar-brand" href="index.php">Pagina inicial</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <?php require_once 'menu.inc.php'; ?>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tarea 1: Formulario de Registración</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Elementos básicos para una Registración:
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post">

                                <div class="row">
                                    <div class="col-lg-4" style="text-align: center;">
                                        <img src="dist/img/register.png" />
                                        <br />
                                        <pre style="text-align: left;">
                                            <?php 
                                            print_r($_POST); ?>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- seccion central izquierda -->
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control" type="text" name="Nombre1" id="nombre" value="<?php if (!empty($_POST['Nombre1'])){echo $_POST['Nombre1'];} ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido:</label>
                                            <input class="form-control" type="text" name="Apellido1" id="apellido" value="<?php if (!empty($_POST['Apellido1'])){echo $_POST['Apellido1'];} ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="email" name="Email1" id="email" value="<?php if (!empty($_POST['Email1'])){echo $_POST['Email1'];} ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Pais</label>
                                            <select class="form-control" name="Pais1" id="pais" value="<?php if (!empty($_POST['Pais1'])){echo $_POST['Pais1'];} ?>">
                                                <option value="">Selecciona...</option>
                                                <option value="ARG" <?php 
                                                            if (!empty($_POST['Pais1']) && $_POST['Pais1']=="ARG") {
                                                                echo 'selected'; 
                                                            } ?> >Argentina</option>
                                                <option value="BRA" <?php 
                                                            if (!empty($_POST['Pais1']) && $_POST['Pais1']=="BRA") {
                                                                echo 'selected'; 
                                                            } ?>>Brasil</option>
                                                <option value="CHI" <?php 
                                                            if (!empty($_POST['Pais1']) && $_POST['Pais1']=="CHI") {
                                                                echo 'selected'; 
                                                            } ?>>Chile</option>
                                                <option value="URU" <?php 
                                                            if (!empty($_POST['Pais1']) && $_POST['Pais1']=="URU") {
                                                                echo 'selected'; 
                                                            } ?>>Uruguay</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Consulta:</label>
                                            <br />
                                            
                                            <textarea name="textarea" rows="10" cols="50" placeholder="Escriba su consulta aqui..." value="<?php if (!empty($_POST['textarea'])){echo $_POST['textarea'];} ?>"></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Opciones del sitio:</label>
                                            <br />
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Condiciones" value="SI">Deseo suscribirme al newsletter.
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-default" value="Registrar" name="BotonRegistrar" >Registrarme</button>
                                        o <a href="index.php">Volver al inicio</a>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                            </form>

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