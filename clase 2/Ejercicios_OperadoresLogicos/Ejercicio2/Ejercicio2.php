<html>
<head>
        <title>Ejercicio 2</title>
        <meta http-equiv="Content-Type" content="text/html" charset=utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .Mensaje1 {
                color: #187c12;
            }
            
        </style>
    </head>
    <body>
<?php 
/*
Los signos del zodiaco son 12, pero en este ejercicio usaremos solo tres:
 * Aries Tauro y Geminis.
 * Establecemos las condiciones:
 * es de Aries alguien que cumple años desde el 20/03 al 19/04
 * es de Tauro alguien que cumple años desde el 20/04 al 20/05
 * es de Geminis alguien que cumple años desde el 21/05 al 20/6
 * 
 * Teniendo dos variables de tipo entero, llamadas 
 * programar lo necesario para conocer a que signo corresponde.
 * Probar con valores correspondientes a esos signos, luego generar para los 12 signos.
 *  */

$diacumple=30;
$mescumple=4;


if( $diacumple>=20 && $mescumple==3 || $diacumple >= 1 && $diacumple<=19 && $mescumple==4){
    echo"<div>
    <p>
        
        Signo :<br /> (ARIES)
        
        <hr />
        
    </p>
</div>";
}
 else if( $diacumple>=20 && $mescumple==4 || $diacumple >= 1 && $diacumple<=20 && $mescumple==5){
    echo"<div>
    <p >
        
        Signo :<br /> (TAURO)
        
        <hr />
        
    </p>
</div>";
}

 else if($diacumple>=21 && $mescumple==5 || $diacumple >=1 && $mescumple==6 ){
    echo"<div>
    <p>
    
        Signo :<br /> (GEMINIS)
        
        <hr />
        
    </p>
</div>";
}
        ?>
    </body>
</html>