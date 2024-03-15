


<!DOCTYPE html>
<html>
    <head>

        <title>
            Ejercicio 3 - Recorrer array
        </title>

        <!-- Meta Tags -->
        <meta charset="utf-8" />
        <meta name="generator" content="Wufoo">
        <meta name="robots" content="index, follow">

        <!-- CSS -->
        <link href="css/structure.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="scripts/wufoo.js"></script>

        <!--[if lt IE 10]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <?php
$Peliculas = array();  
    
$Peliculas = array(  0 => array( 'Nombre pelicula'    =>  "Avatar",
                                'Productora'  =>  "20th Century Fox",
                                'Taquilla en EEUU' =>  760507625 ,
                                'Taquilla fuera EEUU'     => 2083806217,
                                'Ano de estreno'    =>  2009,
                                'Recaudacion mundial'    =>  65465465),                  
    
                    1 => array( 'Nombre pelicula'    =>  "Avengers: Endgame",
                                'Productora'  =>  "Marvel Studios/Walt Disney Pictures",
                                'Taquilla en EEUU' =>  858373000  ,
                                'Taquilla fuera EEUU'     => 1939427564,
                                'Ano de estreno'    =>  2019,
                                'Recaudacion mundial'    =>  105465465),

                    2 => array( 'Nombre pelicula'    =>  "Titanic",
                                'Productora'  =>  "20 Century Fox / Paramount Pictures",
                                'Taquilla en EEUU' =>  990507625 ,
                                'Taquilla fuera EEUU'     => 1283806217,
                                'Ano de estreno'    =>  1997,
                                'Recaudacion mundial'    =>  1000465465),
                );

$CantidadPeliculas = count($Peliculas);
?>
    <body id="public">
        <div id="container" class="ltr">

            <h1 id="logo">
                <a href="http://wufoo.com" title="Powered by Wufoo">Wufoo</a>
            </h1>

            <form id="form83" name="form83" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
                  action="">

                <header id="header" class="info">
                    <h2>Listado</h2>
                    <div>Recorrer el array para mostrar sus elementos y calcular lo solicitado. </div>
                </header>

                <ul>

                    <li id="foli3" class="notranslate       ">
                        Segun los datos extraidos de <a href="https://es.wikipedia.org/wiki/Anexo:Pel%C3%ADculas_con_las_mayores_recaudaciones" target="_blank">wikipedia</a> <br />
                        Calcular los valores de las columnas solicitadas.
                        <hr />
                        <br />
                        <strong>
                            El listado tiene 3 registros.
                        </strong>
                    </li>

                    <li id="foli213" class="notranslate      ">
                    </li>
                    <li id="foli5" class="likert notranslate col5">

                        <table border="1">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Nombre Pelicula </td>
                                    <td>Productora </td>
                                    <td>Taquilla en EEUU</td>
                                    <td>Taquilla fuera de EEUU</td>
                                    <td>A&ntilde;o de estreno</td>
                                    <td><strong>Recaudaci&oacute;n mundial</strong></td>
                                </tr>

                            </thead>
                            <tbody>
                                
                            <?php
                                for ($i = 0; $i < $CantidadPeliculas; $i++) {
                                    ?>
                                    <tr>
                                        <td><?php echo ($i+1); //indica la primer columna con el nro de registro ?></td>
                                        <td><?php echo $Peliculas[$i]['Nombre pelicula']; ?></td>
                                        <td><?php echo $Peliculas[$i]['Productora']; ?></td>
                                        <td><?php echo $Peliculas[$i]['Taquilla en EEUU']; ?></td>
                                        <td><?php echo $Peliculas[$i]['Taquilla fuera EEUU']; ?></td>
                                        <td><?php echo $Peliculas[$i]['Ano de estreno']; ?></td>
                                        <td><?php echo $Peliculas[$i]['Recaudacion mundial']; ?></td>
                                        
                                    </tr>
                                <?php }; //fin del FOR ?>
                            </tbody>
                        </table>
                    </li>


                </ul>
            </form> 

        </div><!--container-->


    </body>
</html>