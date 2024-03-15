<html>
<head>
        <title><?php echo $Titulo; ?></title>
    </head>
<body>
<?php 
/*
 * asignar un valor entero a una variable llamada $Mes.
 * El valor de esta variable SIEMPRE debera ser Entero.
 *
 * Si el valor corresponde a un mes del año [del 1 al 12]
        mostrar la imagen con el nombre correspondiente al mes en cuestion
        notar que del 1 al 6, las imagenes se llaman con letras. 

 * NO SE PODRA CAMBIAR DE NOMBRE LAS IMAGENES ubicadas en carpeta images/
 *      por lo que deberan pensar como hacer para mostrar los meses del 2do semestre 
 *      con su imagen correspondiente. 
 * 
 *  */
$Titulo="C2 E3";



$mes= 10;

switch($mes){
    case 1:
        echo"<img src='images/Ene.jpg' /> 
        <hr />";
        break;
    case 2:
        echo"<img src='images/Feb.jpg' /> 
        <hr />";
        break;
    case 3:
        echo"<img src='images/Mar.jpg' /> 
        <hr />";
        break;
    case 4:
        echo"<img src='images/May.jpg' /> 
        <hr />";
        break;
    case 5:
        echo"<img src='images/Jun.jpg' /> 
        <hr />";
        break;
    case 6:
        echo" <img src='images/7.jpg' /> 
        <hr />";
        break;
    case 7:
        echo"<img src='images/8.jpg' /> 
        <hr />";
        break;
    case 8:
        echo"<img src='images/9.jpg' /> 
        <hr />";
        break;
    case 9:
        echo"<img src='images/10.jpg' /> 
        <hr />";
        break;
    case 10:
        echo"<img src='images/11.jpg' /> 
        <hr />";
        break;
    case 11:
        echo" <img src='images/12.jpg' /> 
        <hr />";
        break;
        default:
        echo"el numero ingresado es incorrecto";
        break;
}
?>

    
    
               
        
        
        
        
       
        
        
        
        
       
        
    </body>
</html>


