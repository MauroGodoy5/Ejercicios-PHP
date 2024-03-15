<Htm>
 <Title> Propuesto 05-7 </Title>
<Body>
 <?Php
 if ($_REQUEST["Boton"] != "" )
 {
 $Nombre=$_REQUEST["Nombre"];
 $Texto =$_REQUEST["Texto"];
 $f = fopen($Nombre,w);
 fputs($f,$Texto);
 echo "<H3>";
 echo "Texto almacenado correctamente";
 fclose($f);
 echo "<Br><Br>";
 $f = @fopen($Nombre,r) or
 die("Error al abrir el archivo: $nombre");
 echo "Texto leido:" . "<Br>";
 fpassthru($f);
 fclose($f);
 }
 else
 {
 ?>
 <Form Action="9ejercicio5.php" Method="Post">
 <Table Align="Center" width="80%";
 <Tr>
 <Td Align=Center> Nombre del Archivo: </Td>
 <Td>
 <Input Type="Text" Name="Nombre" size="20">
 </Td>
 <Tr>
 <Td></Td>
 <Td>
 <TextArea Name="Texto" rows="10" cols="40">
 </TextArea>
 </Td>
 </Tr>
 </Table>
 <Br>
 <P Align="Center">
 <Input Type="Submit" Name="Boton" Value="Enviar">
 </P>
 </Form>
 <?Php
 }
 ?>
</Body>
</Htm> 