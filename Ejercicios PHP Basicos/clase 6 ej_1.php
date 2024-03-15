<Html>
<Title> Ej05-5.php </Title>
<Body>
<?Php
function filtraArray($umArray) {  
    $resultado = [];

    for($i = 0; $i < count($umArray); $i++){
      if ($umArray[$i] % 2  == 0) {
        $resultado[] = $umArray[$i];
      }
    }

    return $resultado;
}

$array = [1,2,3,4,5,6,7,8,9,12,13,14,15];
$resultado = filtraArray($array);
print_r($resultado);
 ?>
</Body>
</Html> 
