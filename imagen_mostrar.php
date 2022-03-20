<?php
########## imagen_mostrar.php ##########
# debe recibir el id de la imagen a mostrar
# http://www.lawebdelprogramador.com
 
# Conectamos con MySQL
 require('conectdb.php');
# Buscamos la imagen a mostrar
$result=mysqli_query($conexion,"SELECT * FROM `imagephp` WHERE id=".$_GET["id"]);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
# Mostramos la imagen
header("Content-type:".$row["tipo"]);
echo $row["imagen"];
?>