<Html>
<Title> Prop06-5.php </Title>
<Body>
<?Php
 function Promedio($V)
 {
 $suma=0;
 for ($i=0;$i<10;$i++)
 {
 $Suma = $Suma + $V[$i];
 }
 $P = $Suma/10;
 return $P;
 }
 // Inicializacion del Vector
 $A = array(8,2,6,3,7,2,5,5,2,9);
 $B = array(6,3,1,4,3,1,9,5,2,8);
 // Impresion del vector A
 echo "<H3>";
 echo "A[i] = (";
 for ($i=0; $i<10; $i++)
 {
 if ($i<9) echo $A[$i] . ",";
 else echo $A[$i] . ")";
 }

 echo "<Br>"; echo "<Br>"; 
  // Impresion del vector B
  echo "<H3>";
  echo "B[i] = (";
  for ($i=0; $i<10; $i++)
  {
  if ($i<9) echo $B[$i] . ",";
  else echo $B[$i] . ")";
  }
 
  echo "<Br>"; echo "<Br>";
  $Prom1 = Promedio($A);
  $Prom2 = Promedio($B);
 
  echo "Promedio de A[i]=" . $Prom1;
  echo "<Br>";
  echo "Promedio de B[i]=" . $Prom2;
  echo "<Br>"; echo "<Br>";
  echo "El vector: ";
  if ($Prom1>$Prom2) echo "A[i]";
  else echo "B[i]";
  echo "<Br>";
  echo "es el que tiene un Promedio Mayor";
  ?>
 </Body>
 </Html> 
 