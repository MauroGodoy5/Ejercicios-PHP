<?php
define('TituloPagina', ': Libros de Stephen King');
define('SitioWeb', 'https://twitter.com/stephenking');
define('POWERED_BY', 'Mauro Godoy'); //otra constante definida en mayuscula
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TituloPagina; ?></title>
        <meta http-equiv="Content-Type" />
        <style type="text/css">
            #contenedor {
                display: table;
                border: 2px solid #000;
                width: 300px;
                text-align: center;
                margin: 0 auto;
            }
            #contenidos {
                display: table-row;
            }
            #columna1, #columna2, #columna3 {
                display: table-cell;
                border: 1px solid #000;
                vertical-align: middle;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div id="contenedor">
            <div id="contenidos">
                <?php
                $Libro1 = 'Carrie';
                $Autor1 = 'stephenking';
                $Imagen1 = 'Carrie.jpg';
                ?>
                <div id="columna1"><?php echo $Libro1; ?></div>
                <div id="columna2"><?php echo $Autor1; ?></div>
                <div id="columna2"><img src="img/<?php echo $Imagen1; ?>" /></div>
            </div>

            <div id="contenidos">
                <?php
                $Libro2 = 'El Resplandor';
                $Imagen2 = 'El_Resplandor.jpg';
                ?>
                <div id="columna1"><?php echo $Libro2; ?></div>
                <div id="columna2"><?php echo $Autor1; ?></div>
                <div id="columna2"><img src="img/<?php echo $Imagen2; ?>"  /></div>
            </div>

            <div id="contenidos">
                <?php
                $Libro3 = 'LaDanza';
                $Imagen3 = 'LaDanza.jpg';
                ?>
                <div id="columna1"><?php echo $Libro3; ?></div>
                <div id="columna2"><?php echo $Autor1; ?></div>
                <div id="columna2"><img src="img/<?php echo $Imagen3; ?>"  /></div>
            </div>
        </div>

        <br />
        <div align="center">
            <a href="<?php echo SitioWeb; ?>" target="_blank" ><?php echo SitioWeb; ?></a>
        </div>
        <footer align="center">
            <p>Copyright &copy;  <strong><?php echo POWERED_BY; ?></strong></p>
        </footer>
    </body>
</html>