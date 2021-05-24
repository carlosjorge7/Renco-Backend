<?php 
    /** GET */
	header('Access-Control-Allow-Origin: *'); 
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	header('Content-Type: application/json');

	include '../connection.php'; 

	mysqli_query($conn,"DELETE FROM registros WHERE idRegistro = $_GET[idRegistro]");
	
	class Result {}

	$response = new Result();
	$response->resultado = 'OK';
	$response->mensaje = 'registro borrado';

	echo json_encode($response); 
?>