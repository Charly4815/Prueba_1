<?php
include("Conexion.php");

$mail = $_GET["Mail"];
$comentarios = $_GET["comentarios"]; 

if(empty($mail)){
	echo "<script>
                alert('Ingrese su Correo electronico');
                window.location.href= '../index_r.html';	
    </script>";
}elseif (empty($comentarios)) {
	echo "<script> alert('Debe de escribir algun comentario');
	window.location.href= '../index_r.html';</script>";
}else{
	$query="INSERT INTO TabLa (Correo, Comentarios) VALUES ('$mail	','$comentarios')";

	$res=sqlsrv_prepare($conn,$query);

	if(sqlsrv_execute($res)){
		echo "<script> alert('Datos Insertados');
		window.location.href= '../index_r.html';</script>";
	}else{
		echo "<script> alert('Error al insertar los datos');
		window.location.href= '../index_r.html';</script>";
	}
}
 ?>