<html>
<head>
        <title><?php echo $Titulo; ?></title>
    </head>
<body>
<?php 
$Titulo="C2 E2";

$num1=10;
$num2=20;
$resto=$num1 % $num2;

if($resto==0){
    echo" <img src='images/EsPar.jpg' /> <br />
    <strong>$resto  es PAR</strong> 
    <hr />";
}
else{
    echo"<img src='images/NoEsPar.jpg' /> <br />
        <strong>$resto es IMPAR</strong> 
        <hr />";
}
?>
</body>
</html>


/*
Sabiendo que un numero es PAR si su resto de division es CERO,
 * 
 * asignar un valor entero a una variable llamada $Numero.
 * Asignar el resultado de la operacion para conocer el resto
            en otra variable llamada $Resto
 *  Operar con una estructura condicional para saber
        SI el resto calculado es cero
 *          en ese caso mostrar el mensaje correspondiente
 *      si no es cero    
 *          mostrar el otro mensaje.

 *  */