<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicio 4</title>
  </head>
  <body>
    <div>
      <h2>Funciones de Fecha con PHP:</h2>
      <br />
      Completa una variable con tu fecha y hora de cumpleaños: formato español dd/mm/yyyy hh:mm:ss
      <br />
      <hr />
      * 1) Hacer una variable para mostrar el dia de la semana que naciste [texto] [Mon, Tue...]
      
      <hr />
       * 2) Hacer una variable para mostrar el nro de dia de la semana que naciste  [0 a 6]
       <hr />
       * 3) Hacer una variable para mostrar el nro de dia del año que naciste [0 a 365]
       <hr />
       * 4) Mostrar si naciste en un año bisiesto [si o no]
       <hr />
       * 5) Mostrar la suma total de cada numero q conforma tu fecha y hora de nacimiento.
       <hr /> 
       * 6) Mostrar la siguiente informacion:
      <br />
       * Yo, Sue Palacios, he nacido en la siguiente fecha: <b>$Fecha </b> <br />
       * El dia de semana q naci fue un #Miercoles #23 de #Abril, el dia #XX del año #1980.
       <br />
       <br />
      <?php 
      /*
        
       */
      $Fecha="05/11/1999 02:10:05";
      
      
      $diasemana = date("D",strtotime($Fecha));
      $numdia = date("w",strtotime($Fecha));
      $numano = date("z",strtotime($Fecha));
      

      echo "Dia de la semana que naci: $diasemana <br/>";

      echo "Numero del dia de la semana que naci: $numdia<br/>";

      echo "Dia del año que naci: $numano<br/>";

      function esBisiesto($anio=null) {
        return date('L',($anio==null) ? time(): strtotime($anio.'-01-01'));
      }
      
      if ((bool)esBisiesto($Fecha)) {
        echo "Es un año bisiesto!<br/>";
      }else{
        echo "No es un año bisiesto!<br/>";
      }


      function SumarDate($Fecha)
{
    
  $a= explode(" ",$Fecha);
  $b = explode("/",$a[0]);
    
    return    $sumar=(int)$b[1]+(int)$b[0]+(int)$b[2];
              
    
    

}
echo SumarDate($Fecha);

      

      
      
      
      ?>
      
      
    </div>
  </body>
</html>