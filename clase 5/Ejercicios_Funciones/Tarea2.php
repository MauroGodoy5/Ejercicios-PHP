<?php
function Poligono($lado,$valor){
    $ResultadoPoligono = $valor * $lado;

    return $ResultadoPoligono;
}


?>

<!DOCTYPE html>
<html>
 
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <title>Poligonos</title>
    </head>
    <body>
        <h2>
            Mostrar datos y el perimetro del poligono regular (tiene sus lados iguales)
            <!--aqui uds dan los valores de cada lado, al ser poligono regular simplemente se calula
            su perimetro multiplicando la cantidad de lados por el valor de cada lado -->
        </h2>

        <?php
            $valor = 5;
            $lado = 3;

            echo"el valor de los lados son: $valor";
            ?>
            <br />
            <?php
            echo"la cantidad de lados son: $lado";
        ?>
       <!--condiciones segun la cantidad de lados-->
       <!-- si el poligono tiene 3 lados: mostrara esta seccion, 
            usar una funcion que calcule el perimetro , aqui en el ejemplo cada lado vale 4-->
            <br />
            <br />
            <strong><?php
                if($lado=3){
                    echo"El poligono con 3 lados iguales se llama TRIANGULO.";



                   

                    echo "su perimetro es: "
                    . '<strong>' . Poligono($lado, $valor) . '</strong>';
                }
            
            
            
            ?></strong>
        
             <br />
        
        <hr />
         <!-- si el poligono tiene 4 lados: mostrara esta seccion ,
        usar la funcion que calcule el perimetro , aqui en el ejemplo cada lado vale 5-->
       <br />
       <strong><?php
                if($lado=4){
                    echo"El poligono con 4 lados iguales se llama CUADRADO.";



                    echo "su perimetro es: "
                    . '<strong>' . Poligono($lado, $valor) . '</strong>';
                }
            
            
            
            ?></strong>
        <hr />
         <!-- si el poligono tiene 6 lados: mostrara esta seccion ,
             usar la funcion que calcule el perimetro , aqui en el ejemplo cada lado vale 3-->
        <br />
       <strong><?php
                if($lado=5){
                    echo"El poligono con 5 lados iguales se llama PENTAGONO.";



                    echo "su perimetro es: "
                    . '<strong>' . Poligono($lado, $valor) . '</strong>';
                }
            
            
            
            ?></strong>
        <hr />
        
    </body>
</html>