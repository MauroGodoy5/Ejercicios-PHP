
<!DOCTYPE html>
<!--
Ejercicio 2:
Organizar los datos segun las estructuras brindadas en el HTML.
Los encabezados de la tabla se organizan en un array simple, 
        que se debe recorrer y mostrar en las secciones correspondientes. 

Los datos de las personas en otro array. 
        Se debe generar un array multidimensional para trabajar con este conjunto de datos.
        El nombre de cada imagen tambien es elemento del array.
        
Las imagenes se guardan en una carpeta /imagenes.

Cada propiedad de cada estructura debe respetarse segun esta template.
        [alt / title / width / height para las imagenes]

-->



<?php
$Personas = array();  
    
$Personas = array(  0 => array( 'Nombre'    =>  "Sue",
                                'Apellido'  =>  "Palacios",
                                'Documento' =>  11222333,
                                'EMail'     =>  "mail.sue@gmail.com",
                                'Imagen'    =>  "<img src='imagenes/bellota.jpg' />"),
    
                    1 => array( 'Nombre'    =>  "Juan",
                                'Apellido'  =>  "Perez",
                                'Documento' =>  22333444,
                                'EMail'     =>  "mail.juan@gmail.com",
                                'Imagen'    =>  "<img src='imagenes/bart.jpg' />"),

                    2 => array( 'Nombre'    =>  "Jose",
                                'Apellido'  =>  "Martinez",
                                'Documento' =>  33444555,
                                'EMail'     =>  "mail.jose@gmail.com",
                                'Imagen'    =>  "<img src='imagenes/bob.jpg' />"),

                    3 => array( 'Nombre'    =>  "Maria",
                                'Apellido'  =>  "Lopez",
                                'Documento' =>  44555666,
                                'EMail'     =>  "lopez.maria@gmail.com",
                                'Imagen'    =>  "<img src='imagenes/pinkpanther.png' />")
                );

$CantidadPersonas = count($Personas);
?>
<html>
    <head>

        <title>
            Ejercicio 2 - Recorrer array
        </title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
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

    <body id="public">
        <div id="container" class="ltr">

            <h1 id="logo">
                <a href="http://wufoo.com" title="Powered by Wufoo">Wufoo</a>
            </h1>

            <form id="form83" name="form83" class="wufoo topLabel page" autocomplete="off" >

                <header id="header" class="info">
                    <h2>Listado</h2>
                    <div>Recorrer el array para mostrar sus elementos. </div>
                </header>

                <ul>

                    <li id="foli3" class="notranslate       ">
                        Personal en la empresa
                    </li>
                    <li id="foli213" class="notranslate      ">
                    </li>
                    <li id="foli5" class="likert notranslate 
                        col5
                        ">
                        <table cellspacing="0">
                            <thead>

                                <tr>
                                    <td><strong>Apellido </strong></td>
                                    <td><strong> Nombre </strong></td>
                                    <td><strong>Documento</strong></td>
                                    <td><strong>EMail</strong></td>
                                    <td><strong>Avatar</strong></td>
                                </tr>

                            </thead>
                            <tbody>
                            <?php
                                for ($i = 0; $i < $CantidadPersonas; $i++) {
                                    ?>
                                    <tr>
                                        
                                        <td><?php echo $Personas[$i]['Apellido']; ?></td>
                                        <td><?php echo $Personas[$i]['Nombre']; ?></td>
                                        <td><?php echo $Personas[$i]['Documento']; ?></td>
                                        <td><?php echo $Personas[$i]['EMail']; ?></td>
                                        <td><?php echo $Personas[$i]['Imagen']; ?></td>
                                        
                                    </tr>
                                <?php }; //fin del FOR ?>





                            </tbody>

                        </table>
                    </li>


                </ul>
            </form> 

        </div><!--container-->

        <a class="powertiny" href="http://wufoo.com/form-builder/" title="Powered by Wufoo"
           style="display:block !important;visibility:visible !important;text-indent:0 !important;position:relative !important;height:auto !important;width:95px !important;overflow:visible !important;text-decoration:none;cursor:pointer !important;margin:0 auto !important">
            <span style="background:url(./images/powerlogo.png) no-repeat center 7px; margin:0 auto;display:inline-block !important;visibility:visible !important;text-indent:-9000px !important;position:static !important;overflow: auto !important;width:62px !important;height:30px !important">Wufoo</span>
            <b style="display:block !important;visibility:visible !important;text-indent:0 !important;position:static !important;height:auto !important;width:auto !important;overflow: auto !important;font-weight:normal;font-size:9px;color:#777;padding:0 0 0 3px;">Designed</b>
        </a>
    </body>
</html>