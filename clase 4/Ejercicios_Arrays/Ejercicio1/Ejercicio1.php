<!DOCTYPE html>
<!--
Ejercicio 1:
Organizar los datos segun las estructuras brindadas en el HTML.
Se debe generar un array multidimensional para trabajar con este conjunto de datos.
Las imagenes se guardan en una carpeta /imagenes, y el dato en el array 
     debe ser un subelemento (nombre y extension de la imagen). Noten que la carpeta es la misma para todas.
Se debe mostrar la cantidad de elementos del array con la funcion de PHP.

-->
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html">
    <title>Arrays Multidimensionales</title>
  </head>
  <body>
    <h2>
      Array multidimensional - recorrido FOR
    </h2>
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

                  $CantidadDeElementos=count($Personas);
                  echo "El array contiene <b>$CantidadDeElementos </b> elementos. <br />";

                  for ($i=0; $i<$CantidadDeElementos; $i++) {
                    echo '<b>Elemento nro: </b> '.$i.'<br>';
                    echo '<b>Nombre: </b> '.$Personas[$i]['Nombre'].'<br>';
                    echo '<b>Apellido: </b> '.$Personas[$i]['Apellido'].'<br>';
                    echo '<b>Documento: </b> '.$Personas[$i]['Documento'].'<br>';
                    echo '<b>EMail: </b> '.$Personas[$i]['EMail'].'<br>';
                    echo '<b>Imagen: </b> '.$Personas[$i]['Imagen'].'<br>';
                    echo '<hr />';
                  }
    ?>

  
  </body>

</html>
