<?php
include "conexion.php";

$nom=$_POST['nombre'];
$dir=$_POST['Direccion'];
$tel=$_POST['Tel'];
$lat=$_POST['Latitud'];
$longt=$_POST['Longitud'];
$foto="imagenes/".$telefono.".jpg";

$sql="INSERT INTO datos (id, Nombre, Direccion, Tel, Latitud, Longitud, FotoRuta,) VALUES('','$nom','$dir','$tel','$lat','$longt', '$foto')";
$res=mysqli_query($conexion,$sql);
if($res){
		echo "Los datos se registraron de manera exitosa";
	  echo "nombre:".$nom." Dirección:".$dir." Teléfono:".$tel." Latitud:".$lat." Longitud:".$longt." Foto:".$foto;
	}else{
  	echo "Se produjo un error al momento de registar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
