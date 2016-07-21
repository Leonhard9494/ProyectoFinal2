<?php
include "conexionBD.php";

$nom=$_POST['nombre'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];
$lat=$_POST['lat'];
$longt=$_POST['lon'];
$foto="imagenes/".$tel.".jpg";

$sql="INSERT INTO datos VALUES('','$nom','$dir','$tel','$foto','$lat', '$longt')";
$res=mysqli_query($conexion,$sql);
if($res){
		echo "Los datos se registraron de manera exitosa";
	  echo "nombre: " .$nom." Dirección: " .$dir." Teléfono: " .$tel." Foto: " .$foto." Latitud: " .$lat." Longitud: " .$longt;
	}else{
  	echo "Se produjo un error al momento de registar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
