<Html>
<Title> Prop02-5.php </Title>
<Body>
<?Php
 function Posicion($V)
 {
 $M=$V[0]; 
 $Posi=0;
 for ($i=0;$i<10;$i++)
 {
 if ($V[$i] < $M)
 {
 $M = $V[$i];
 $Posi = $i;
 }
 }
 return $Posi;
 }
 // Inicializacion del Vector
 $A = array(3,9,7,6,4,8,1,5,7,4);
 // Impresion del vector
 echo "<H3>";
 echo "A[i] = (";
 for ($i=0; $i<10; $i++)
 {
 if ($i<9) echo $A[$i] . ",";
 else echo $A[$i] . ")";
 }

 echo "<Br>"; echo "<Br>";
 $P = Posicion($A);

 echo "El menor es: " . $A[$P];
 echo "<Br>";
 echo "Esta en la posicion: " . $P;
 ?>
</Body>
</Html> 
