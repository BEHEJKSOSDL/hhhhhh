<?php
include("conexion.php");
$solicitud ="SELECT * FROM $nombre" ;
$resultado= mysqli_query($conexion, $solicitud);
echo"<h1>Productos</h1>";
echo "<table>";
echo "<tr><td>Nombre del producto</td><td>Precio</td><td>Stock</td><td>Acciones</td></tr>";
while($fila=mysqli_fetch_array($resultado)){
    echo "<tr>";
    echo " <td>".$fila['Nombre']."</td>";
    echo " <td>".$fila['Precio']."</td>";
    echo " <td>".$fila['Stock']."</td>";
    echo" <td> <a href='eliminar2.php?id=".$fila['ID']."' id='eliminar'>Eliminar</a>"." "."<a href='editar2.php?id=".$fila['ID']."'id='editar'>Editar</a></td>";
    echo"</tr>";
}
echo"</table>";
?>
