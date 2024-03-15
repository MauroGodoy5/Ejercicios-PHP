<html>
<head>
</head>
<body>
<h1>Menu de opciones</h1>
2 - <a href="listadopedido.php">Listado del curriculum</a><br>
<h1>Pedido de pizzas</h1>
<form action="altapedido.php" method="post">
 Apellido y nombre:
 <input type="text" name="apenom" size="40">
 <br>
 Direccion:
 <input type="text" name="direccion" size="40">
 <br>
 Telefono:
 <input type="text" name="telefono" size="40">
 <br>
Muzarella:
 <select name="muzarella">
 <option value="0">0</option>
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 </select>
 <br>
Jamon y Queso:
<select name="jamonqueso">
 <option value="0">0</option>
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 </select>
 <br>
Palmitos:
<select name="palmitos">
 <option value="0">0</option>
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 </select>
 <br>
 Tipo de Envio:
 <br>
 <input type="radio" name="envio" value="1">Normal (Sin costo).
 <br>
 <input type="radio" name="envio" value="2">Rapido ($5).
 <br>
 Comentarios:
 <br>
 <textarea name="comentarios" rows="10" cols="80"></textarea>
 <br>
 <input type="submit" value="confirmar">
</form>
</body>
</html>