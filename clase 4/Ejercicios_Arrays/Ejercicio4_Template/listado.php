<!DOCTYPE html>
<html lang="en">
<?php
$Personas = array();  
    
$Personas = array(  0 => array( 'Nombre'    =>  "Jhon",
                                'Apellido'  =>  "Otto",
                                'EMail'     =>  "jhonotto@mail.com",
                                'Imagen'    =>  "<img src='images/team/jhon.png' />"),
    
                    1 => array( 'Nombre'    =>  "Mary",
                                'Apellido'  =>  "Thornton",
                                'EMail'     =>  "marythornton@mail.com",
                                'Imagen'    =>  "<img src='images/team/mary.png' />"),

                    2 => array( 'Nombre'    =>  "Kun",
                                'Apellido'  =>  "Kigo",
                                'EMail'     =>  "kunkigo@mail.com",
                                'Imagen'    =>  "<img src='images/team/kun.png' />"),

                    3 => array( 'Nombre'    =>  "Sue",
                                'Apellido'  =>  "Wright",
                                'EMail'     =>  "suewright@mail.com",
                                'Imagen'    =>  "<img src='images/team/sue.png' />")

                );

$CantidadPersonas = count($Personas);
?>
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Basic Tables - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
       
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/team/jhon.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
       </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Ejemplo Tablas / Listados</h1>
          <p>Basic bootstrap tables</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
        </ul>
      </div>
      
      <div class="row">

        <div class="alert alert-dismissible alert-info col-md-4">
          Ejercicio 2: <br />
          <ul>
              <li>Organizar los datos segun las estructuras brindadas en el HTML. </li>
              <li>Notar la numeración de cada fila (comienza en 1)</li>
              <li>Armar otro array como en el Ejercicio 1, ahora ubicando en la tabla segun corresponda cada valor, con la img.</li>
          </ul>          
           <br/>
          Agregar una persona mas: <br />
          <ul>
            <li>Nombre: Sue</li>
            <li>Wright</li>
            <li>suewright@mail.com</li>
            <li>imagen: sue.png</li>
          </ul>
        </div>

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Miembros del equipo</h3>
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                  <th>Imagen</th>
                </tr>
              </thead>
              <tbody>
              <?php
              for ($i = 0; $i < $CantidadPersonas; $i++) {
                                    ?>
                                    <tr>
                                        <td><?php echo ($i+1);?></td>
                                        <td><?php echo $Personas[$i]['Nombre']; ?></td>
                                        <td><?php echo $Personas[$i]['Apellido']; ?></td>
                                        <td><?php echo $Personas[$i]['EMail']; ?></td>
                                        <td><?php echo $Personas[$i]['Imagen']; ?></td>
                                        
                                    </tr>
                                <?php }; //fin del FOR ?>
                
               
              </tbody>
            </table>
          </div>
        </div>
       
      
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
   
  </body>
</html>