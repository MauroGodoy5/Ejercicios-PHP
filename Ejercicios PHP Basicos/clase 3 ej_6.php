<Html>
<Body>
    


 <FORM ACTION="3ejercicio6.php" METHOD="POST">
 Nombre: <INPUT TYPE="TEXT" NAME="nombre" size="10">
 <Br>
 Precio: <INPUT TYPE="TEXT" NAME="precio" size="10">
 <Br>
Stock:  <input type="number" name="stock" size="10">
<Br>
 <INPUT TYPE="SUBMIT" NAME="boton" VALUE="Ingresar Datos">
 </FORM>
 <?Php
 $nombre=$_REQUEST["nombre"];
 $precio=$_REQUEST["precio"];
 $stock=$_REQUEST["stock"];
    
 if ($stock<100){
     echo"EL PRODUCTO $nombre EQUIVALENTE A $ $precio TIENE UN STOCK POR DEBAJO DE 100(STOCK ACTUAL:$stock)";
 }
 else
     echo"EL PRODUCTO $nombre EQUIVALENTE A $ $precio TIENE UN STOCK  DE: $stock";
 
 ?>
</Body>
</Html> 
