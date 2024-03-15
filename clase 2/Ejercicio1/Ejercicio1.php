<html>
<head>
        <title><?php echo $Titulo; ?></title>
    </head>
<body>
<?php 

$Titulo="C2 E1";
$temperatura=25;

switch($temperatura){
    case 25:
        echo" <img src='images/menos_calor.jpg' /> <br />
        La temperatura es de <strong>25 grados</strong> 
        <hr />";
        break;

        case 30:

        echo"<img src='images/calor.jpg' /> <br />
        La temperatura es de <strong>30 grados</strong> 
        <hr />";
        break;

        case 40:
            echo" <img src='images/mucho_calor.jpg' /> <br />
            La temperatura es de <strong>40 grados</strong> 
            <hr />";
            break;

            default:
            echo"La temperatura de <strong> es incorrecta</strong> 
            <hr />";
            break;
}
?>
</body>
</html>


