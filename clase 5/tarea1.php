<?php 
function Sumar($Nro1, $Nro2) {
    $ResultadoSuma = $Nro1 + $Nro2;
    return $ResultadoSuma;
}

function Restar($Nro1, $Nro2) {
    $ResultadoResta = $Nro1 - $Nro2;
    return $ResultadoResta;
}

function Multiplicar($Nro1, $Nro2) {
    $ResultadoMultiplicar = $Nro1 * $Nro2;
    return $ResultadoMultiplicar;
}

function Dividir($Nro1, $Nro2) {
    $ResultadoDividir = $Nro1 / $Nro2;
    return $ResultadoDividir;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <title>Funciones</title>
    </head>
    <body>
        <h2>
            Funcion Suma
        </h2>
        <?php
        $Numero1 = 20;
        $Numero2 = 50;

        echo "El resultado de sumar $Numero1 mas $Numero2 es: "
        . '<strong>' . Sumar($Numero1, $Numero2) . '</strong>';
        ?>
         <h2>
            Funcion Resta
        </h2>
        <br />
        El resultado de restar <?php echo $Numero1; ?> y <?php echo $Numero2; ?> 
        es <strong><?php echo Restar($Numero1, $Numero2); ?></strong>
        <h2>
            Funcion multiplicar
        </h2>
        <br />
        El resultado de multiplicar <?php echo $Numero1; ?> y <?php echo $Numero2; ?> 
        es <strong><?php echo Multiplicar($Numero1, $Numero2); ?></strong>
        <h2>
            Funcion dividir
        </h2>
        <br />
        El resultado de dividir <?php echo $Numero1; ?> y <?php echo $Numero2; ?> 
        es <strong><?php echo Dividir($Numero1, $Numero2); ?></strong>
            
        
    </body>
</html>


