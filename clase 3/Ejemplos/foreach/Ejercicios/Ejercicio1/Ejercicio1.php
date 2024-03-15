<?php
   $Paises= array("ARGENTINA","BAHAMA","BOLIVIA","BRASIL","CUBA");
   foreach ($Paises as $Indice => $Valor) {
    //puedo usarlos dentro del bloque foreach para mostrar informacion
        echo "Mostrando el pais : $Valor  <br />";
        if($Indice==0){
            echo"<img src='images/ARG.JPG' /><hr />";
        };
        if($Indice==1){
            echo"<img src='images/BAH.JPG' /><hr />";
        };
        if($Indice==2){
            echo"<img src='images/BOL.JPG' /><hr />";
        };
        if($Indice==3){
            echo"<img src='images/BRA.JPG' /><hr />";
        };
        if($Indice==4){
            echo"<img src='images/CUB.JPG' /><hr />";
        };
    };
?>

