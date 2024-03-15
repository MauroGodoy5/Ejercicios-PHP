<Html>
<Title> Ej05-5.php </Title>
<Body>
<?Php


$nombres = array("mauro","santiago","daniel","martin","marcos","aldo","micaela","candela","angela","sofia");
$reverse = array_reverse($nombres);

$show = "";
foreach($reverse as $index => $value)
{
$show .= "<p>$index : $value</p>";
}

print "<p>El array con su orden invertido: " . $show . "</p>";
 ?>
</Body>
</Html>