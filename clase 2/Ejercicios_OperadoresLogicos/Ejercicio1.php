<html>
<head>
        <title>Ejercicio 1</title>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .Mensaje1 {
                color: #187c12;
            }
            .Mensaje2 {
                color: #f00;
            }
        </style>
    </head>
    <body>
<?php 
/*
Segun 3 variables que contendran valores de tipo entero, llamadas $Lado1, $Lado2, $Lado3
 * se debera conocer si pueden conformar un triangulo escaleno, isosceles o equilatero.
 * http://www.disfrutalasmatematicas.com/geometria/triangulos.html
 * Pueden usar los estilos que deseen para cada mensaje
 * 
 *  */
$Lado1= 30;
$Lado2= 30;
$Lado3= 10;

if($Lado1==$Lado2 && $Lado2==$Lado3){
    echo"<div>
    <p>
        
        Figura geometrica:
        triangulo [equilatero]
    </p>
</div>";
}
 else if($Lado1==$Lado2 || $Lado1==$Lado3 || $Lado2==$Lado3){
    echo"<div>
    <p>
        
        Figura geometrica:
        triangulo [iscoceles]
    </p>
</div>";
}

 else{
    echo"<div>
    <p>
        
        Figura geometrica:
        triangulo [escaleno]
    </p>
</div>";
}
        ?>
    </body>
</html>