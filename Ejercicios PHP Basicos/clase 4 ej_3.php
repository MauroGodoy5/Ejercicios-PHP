<Html>
<Title> Capitulo 3 – Propuesto Nro.11 </Title>
<Body>
 <?Php
 $T=7;
 $S=0;
 for ($i=1; $i<=20; $i++)
 {
 $T = $T + 3;
 $S = $S + $T;
 if ($i<20) echo("$T" . " + ");
 else echo("$T" . " = ");
 }
 echo("$S");
?>
</Body>
</Html>