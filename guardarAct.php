<?php
//Se Agrega el archivo que contine la conexion a la BD
include "conexionBD.php";

$id=$_POST['id'];
$nom=$_POST['nombre'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];
$foto=$_POST['fot'];
$lat=$_POST['lat'];
$longt=$_POST['lon'];


$foto=$_POST['fot'];

$sql="UPDATE datos SET Nombre='$nom', Direccion='$dir', Tel='$tel',FotoRuta='$foto', Latitud='$lat', Longitud='$longt' WHERE id=$id";
$res=mysqli_query($conexion,$sql);
if($res){
	echo "Los datos se actualizaron de manera exitosa";
	}else{
		  echo "Se produjo un error al momento de Actualizar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
