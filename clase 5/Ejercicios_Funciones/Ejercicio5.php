<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicio 5</title>
    <meta http-equiv="Content-Type" content="text/html">
  </head>
  <body>
    <div>
      <h2>Funciones de Arrays con PHP:</h2>
	  Generar un array con los datos personales de 3 personas: Nombre, apellido, fecha de nacimiento [dd/mm/yyyy] .
	  <br />
	  Calcular la edad basicamente usando solamente su año de nacimiento.
      <br />
	  Mostrar en una tabla los 4 valores de cada persona. El nombre debe ir con su primer letra en mayuscula, y el apellido todo en mayuscula.
      <?php 
      $Personas[0]['Nombre'] = "Juan";
      $Personas[0]['Apellido'] = "Gonzalez";
      $Personas[0]['Fecha_nac'] = "05/11/1999";


      $Personas[1]['Nombre'] = "Martin";
      $Personas[1]['Apellido'] = "Juarez";
      $Personas[1]['Fecha_nac'] = "08/10/2000";

      $Personas[2]['Nombre'] = "Martin";
      $Personas[2]['Apellido'] = "Perez";
      $Personas[2]['Fecha_nac'] = "04/09/2013";



      for ($i = 0; $i < count($Personas); $i++) {

        function obtener_edad_segun_fecha($Personas)
        {
            $nacimiento = new DateTime($Personas);
            $ahora = new DateTime(date("Y-m-d"));
            $diferencia = $ahora->diff($nacimiento);
            return $diferencia->format("%y");
        }
        
    
        
    }

    echo obtener_edad_segun_fecha($Personas);
      ?>
      
      
    </div>
  </body>
</html>
