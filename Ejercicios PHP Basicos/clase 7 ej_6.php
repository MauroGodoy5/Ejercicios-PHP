<Htm>
 <Title> Propuesto 06-6 </Title>
<Body>
 <?Php

 $Nombre = $_REQUEST["Nombre"];
 $Persona[0] = "Martinez Alberto";
 $Persona[1] = "Rodriguez María";
 $Persona[2] = "Ocampo Raúl";
 $Persona[3] = "Sanchez Silvia";
 $Persona[4] = "Aguirre Marcela";
 $Persona[5] = "Lopez Ricardo";
 $Persona[6] = "García Leandro";
 $Persona[7] = "Quinteros Silvia";
 $Persona[8] = "Ruis Marcos";
 $Persona[9] = "Maldonado Silvia";
 echo "<H3>";
 echo "Nombre Buscado: ";
 echo $Nombre;
 echo "<Br><Br>";
 echo "Personas encontradas:";
 echo "<Br><Br>";
 $existe = false;
 echo "<Table align=Center Border=3 width=60%>";
 echo "<Tr>";
 echo "<Th align=center>";
 echo "Posición";
 echo "<Th align=center>";
 echo "Apellido y Nombre";
 for ($i=0; $i<10; $i++)
 {
 if (eregi($Nombre,$Persona[$i]))
 {
 $existe=true;
 echo "<Tr>";
 echo "<Td align=Center>";
 echo $i;
 echo "</Td>";
 echo "<Td>";
 echo $Persona[$i];
 echo "</Td>";
 }
 }
 echo "</Table>";
 echo "<Br>";
 if (!$existe)
 {
 echo "No existe $Nombre en el vector";
 }
 
 ?> 
 <FORM ACTION = "7ejercicio6.php" METHOD = "POST">
 Ingrese Nombre a buscar:
 <INPUT TYPE = "TEXT" NAME="Nombre" size="30">
 <Br><Br>
 <INPUT TYPE = "SUBMIT" NAME="Boton" VALUE="Ejecutar">
 </FORM>

</Body>
</Htm> 