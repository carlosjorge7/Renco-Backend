<?php
    /** POST */
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Content-Type: application/json');
    
    $json = file_get_contents('php://input');
    $params = json_decode($json);
    
    include '../connection.php'; 

    mysqli_query($conn,"UPDATE registros SET fechaInicio = '$params->fechaInicio',
                                            fechaFin = '$params->fechaFin',
                                            precio = $params->precio,
                                            descuento = $params->descuento,
                                            compra = '$params->compra',
                                            idCoche = $params->idCoche,
                                            idCliente = $params->idCliente
                                        WHERE idRegistro = $params->idRegistro");

    class Result {}
    $response = new Result();
    $response->resultado = 'OK';
    $response->mensaje = 'registro actualizado';
    
  //echo json_encode($response);  
    echo json_encode($json);  
?>