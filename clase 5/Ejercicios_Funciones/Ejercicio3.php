<?php
$Fechas[0]['Cumple'] = "25/07/1987 00:00:00";  //estos son valores con fecha/hora
$Fechas[1]['Cumple'] = "31/02/2000 22:30:00";
$Fechas[2]['Cumple'] = "07/14/1990 10:00:23";
$Fechas[3]['Cumple'] = "31/09/1900 22:00:00";
$Fechas[4]['Cumple'] = "12/10/1980 00:33:00";
$Fechas[5]['Cumple'] = "29/02/2014 14:33:00";
$Fechas[6]['Cumple'] = "12/32/2001 00:22:00";




function validateDate($date)
{
    
    $a= explode(" ",$date);
    $b = explode("/",$a[0]);
    
    
    return    checkdate((int)$b[1],(int)$b[0],(int)$b[2]);
    
    

}

for ($i = 0; $i < count($Fechas); $i++) {

    if (validateDate($Fechas[$i]['Cumple'])) {
        echo "<font color='#0000ff' >La fecha " . $Fechas[$i]['Cumple'] . " es correcta<br/></font>";
    } 
    else 
        echo "<font color='#0000ff' >La fecha " . $Fechas[$i]['Cumple'] . " es Incorrecta<br/></font>";
    

    
}







?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio3</title>
    </head>
    <body>
        <div>
            <h2>Ejercicio 3 con funciones</h2>
            <ul>
                <li>

                    Recorrer el array e ir informando si su fecha es correcta o no. Utilizar las funciones q brinda php para explotar la fecha y corroborar q una fecha sea correcta.
                </li>
                <li>
                    Las fechas estan en formato Espa&ntilde;ol: dd/mm/yyyy
                </li>
            </ul>


            <pre>
                <?php print_r($Fechas); ?>
            </pre>

        </div>
    </body>
</html>
