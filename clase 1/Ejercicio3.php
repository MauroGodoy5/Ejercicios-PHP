<?php
define('TituloPagina', "Destinos 2022");

$Destino1 = "Playa del carmen";
$Pais1 = "Mexico";
$ImagenDestino1 = "mexico.jpg";
$Precio1 = 50000;
$CantidadCuotas1 = 5;
$PrecioCuota1 = 10000;

$Destino2 = "Ibiza";
$Pais2 = "España";
$ImagenDestino2 = "españa.jpg";
$Precio2 = 100000;
$CantidadCuotas2 = 6;
$PrecioCuota2 = 25000;

$Destino3 = "Las grutas";
$Pais3 = "Argentina";
$ImagenDestino3 = "argentina.jpg";
$Precio3 = 18000;
$CantidadCuotas3 = 6;
$PrecioCuota3 = 4000;
?>

<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" /> 
        <title><?php echo TituloPagina; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <span class="brand"><?php echo TituloPagina; ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <br />

            <div class="span10 pull-left">

                <div class="well">
                    <h2><?php echo $Destino1; ?></h2>

                    <p>
                        <?php echo $Pais1; ?><br /><br />
                        <img src="img/<?php echo $ImagenDestino1; ?>" width="200px" /><br /><br />
                        <h4>Precio: $ <?php echo $Precio1; ?></h4>
                            <p><strong><?php echo $CantidadCuotas1 ; ?></strong> cuotas de <strong>$ <?php echo $PrecioCuota1; ?></strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a> 
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                    </p>
                </div>

            </div>
            
            
            <div class="span10 pull-left">
                <div class="span10 pull-left">

                    <div class="well">
                        <h2><?php echo $Destino2; ?></h2>

                        <p>
                            <?php echo $Pais2; ?><br /><br />
                            <img src="img/<?php echo $ImagenDestino2; ?>" width="200px" /><br /><br />
                            <h4>Precio: $ <?php echo $Precio2; ?></h4>
                            <p><strong><?php echo $CantidadCuotas2 ; ?></strong> cuotas de <strong>$ <?php echo $PrecioCuota2; ?></strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a> 
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </p>
                    </div>

                </div>



            </div>


            <div class="span10 pull-left">
                <div class="span10 pull-left">

                    <div class="well">
                        <h2><?php echo $Destino3; ?></h2>

                        <p>
                            <?php echo $Pais3; ?><br /><br />
                            <img src="img/<?php echo $ImagenDestino3; ?>" width="200px" /><br /><br />
                            <h4>Precio: $ <?php echo $Precio3; ?></h4>
                            <p><strong><?php echo $CantidadCuotas3 ; ?></strong> cuotas de <strong>$ <?php echo $PrecioCuota3; ?></strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a> 
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </p>
                    </div>

                </div>
            </div>

        </div>
        <!--/row-fluid-->

        <hr>

        <footer align="center">
            <p>Programación con <strong>PHP</strong></p>
        </footer>


    </body>
</html>
