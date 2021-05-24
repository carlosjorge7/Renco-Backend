<?php 
    /** GET */
	header('Access-Control-Allow-Origin: *'); 
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	header('Content-Type: application/json');

	include '../connection.php'; 

	mysqli_query($conn,"DELETE FROM coches WHERE idCoche = $_GET[idCoche]");
	
	class Result {}

	$response = new Result();
	$response->resultado = 'OK';
	$response->mensaje = 'coche borrado';

	echo json_encode($response); 
?>