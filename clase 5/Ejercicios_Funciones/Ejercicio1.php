<?php

$Numeros = array();


$max_num = 101;


for ($x=0;$x<$max_num;$x++){
    $num_aleatorio = rand(1,10);
    array_push($Numeros,$num_aleatorio);
}

echo('<pre>');
print_r($Numeros);
echo('</pre>');


$Numeros_Unidos_Por_Guion = join("-", $Numeros);
print_r($Numeros_Unidos_Por_Guion);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio1</title>
    </head>
    <body>
        <div>
            <h2>Ejercicio 1 con funciones</h2>
            <ul>
                <li>
                    Generar un valor aleatorio entre 1 y 10. <br />Ese valor aleatorio sera la cantidad de elementos q contenga un array.
                </li>
                <li>
                    Se debe cargar ese array con esa cantidad de valores aleatorios, los cuales deben estar entre 10 y 100.<br />
                    Usar un for para cargar los valores e ir mostrando cada valor.
                </li>
                <li>
                    Mostrar la cantidad de elementos q tiene ese array.      
                </li>
                <li>
	  Unir los elementos del array mediante un guion y mostrarlos en un solo renglon.
                </li>
            </ul>

        </div>
    </body>
</html>
