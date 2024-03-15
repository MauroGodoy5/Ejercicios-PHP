<Html>
<TITLE> Ejercicio4 clase 5 </TITLE>
<Body>
<?Php
 function Dato($D)
 {

    if (is_string($D)){
        
        echo("El contenido es una cadena");
      }
    
    
      else if (is_double($D)){
        
        echo("El contenido es un decimal");
      }

      else if (is_int($D)){
        
        echo("El contenido es un Entero");
    }
    
        

 }
 // Programa principal

 if ( $_REQUEST["Boton"] != "" )
 {
 $D = $_REQUEST["Datoo"];
 echo ("<H2>");
echo("".Dato($D));
 }
 else
 {
 ?>
 <FORM ACTION="5ejercicio4.php" METHOD="POST">
 <H2>
 Ingrese un dato :
 <Input Type="text" Name="Datoo" Size="20">

 <Br><Br>
 <Input Type="Submit" Name="Boton" Value="Ingresar Datos">
 </Form>
 <?Php
 }
 ?>
</Body>
</Html>