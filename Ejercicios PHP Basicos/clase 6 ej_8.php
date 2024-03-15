<Html>
<Title> Prop08-5.php </Title>
<Body>
<?Php
 if ($_REQUEST["boton"] != "" )
 {
 // Inicializacion del Vector
 $Ropa=array(25 => "Vestido",
 80 => "Sweater",
 12 => "Pantalon",
 20 => "Media",
 38 => "Camisa",
 45 => "Remera",
 56 => "Pollera");
 $N = $_REQUEST["Numero"];
 echo "<H2>";
 switch ($N)
 {
 case 1: echo "Listado Ordenado por Codigo";
 ksort($Ropa);break; 
 case 2: echo "Listado Ordenado por Nombre";
 asort($Ropa);break;
 case 3: echo "Listado Desordenado";
 break;
 }
 echo "<H3>"."<Hr>";
 echo "<Table align=Center border=1 width = 60%>";
 echo "<Tr><Th>Codigo</Th>" ;
 echo "<Th>Nombre</Th>" ;
 echo "</Tr>" ;
 while (list($i,$Valor)=each($Ropa))
 {
 echo "<Tr> <Td align=Center>$i</Td>";
 echo "<Td align=Center>$Valor</Td>";
 echo "</Tr>";
 }
 echo "</Table>";
 }
 else
 {
 ?>
 <H2>
 <FORM ACTION="6ejercicio8.php" METHOD="POST">
 Indique Ordenamiento
 <Hr>
 <Table Border="0" width="100%">
 <tr>
 <td width="40%">
 <p align="Center"> Seleccione : </td>
 <td witth="60%"> <Select size=1 Name="Numero">
 <option value= "1"> Por Código </option>
 <option value= "2"> Por Nombre </option>
 <option value= "3"> Desordenado </option>
 </Select> </td>
 </tr>
 <tr>
 <td>
 <p align="Center">
 <Input type="Submit" Name="boton"
 value="Ver Resultado">
 </td>
 </tr>
 </Table>
 <?Php
 }
 ?>
</Body>
</Html> 