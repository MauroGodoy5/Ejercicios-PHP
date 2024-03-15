<?php
/* Generar un array que contenga 5 elementos, comenzando desde el elemento 0.
 * Cada elemento debe contener valores numericos decimales, como la estatura de 5 personas.
 * Mostrar al navegante cada elemento del array, como se ve debajo.
 * 
 * Calcular el  valor solicitado y mostrar al final dentro de comillas dobles (sin concatenar)
 *  *  */


 $altura = array("1.85","2.00","1.58","1.88","1.70");
        $suma=0;
        $cantidad = count($altura);
 foreach ($altura as $Indice => $Valor) {
        echo" El valor $Indice de las estaturas es: <strong>$Valor</strong>";
        echo"<br>";
        


 };

 foreach ($altura as $altura) {
        $suma += $altura;
    }

    

    $promedio= ($suma / $cantidad);
 echo"el promedio de estaturas es: $promedio";
 
?>
